const IN_PRODUCTION = process.env.NODE_ENV === "production";

module.exports = {
    parser: require('postcss-comment'),

    plugins: [
        require('autoprefixer'),

        require('postcss-nested'),
        require('postcss-each-variables'),

        require('postcss-each'),
        require('postcss-extend'),
        require('postcss-mixins'),
        require('postcss-for'),


        IN_PRODUCTION &&
        require("@fullhuman/postcss-purgecss")({
            content: [`./resources/views/**/*.php`, `./resources/js/**/*.vue`],
            defaultExtractor(content) {
                const contentWithoutStyleBlocks = content.replace(
                    /<style[^]+?<\/style>/gi,
                    ""
                );
                return (
                    contentWithoutStyleBlocks.match(
                        /[A-Za-z0-9-_/:]*[A-Za-z0-9-_/]+/g
                    ) || []
                );
            },
            safelist: {
                greedy: [/^swiper/]
            },
        }),
    ],
};
