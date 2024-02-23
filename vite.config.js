import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ command, mode, ssrBuild }) => {
    return {
        resolve: {
            alias: {
                // vue: 'vue/dist/vue.esm.js',
            }
        },
        plugins: [
            laravel({
                input: ['resources/css/app.css'],
                refresh: true,
            }),

            vue({
                template: {
                    transformAssetUrls: {
                        base: null,

                        includeAbsolute: false,
                    },
                    compilerOptions: {
                        comments: true,
                    }
                },
            }),
        ],
        server: {
            hmr: {
                protocol: "wss",
                // if your DDEV project serves multiple hosts, update the "host" as required.
                host: `${process.env.DDEV_HOSTNAME}`,
            }
        }
    }
});
