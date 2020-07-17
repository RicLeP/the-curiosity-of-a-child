<template>
	<div>
		<template v-if="isMobile">
			<cld-video cloud-name="sirric" :public-id="imageSrc" muted="true" loop="true" width="100%" autoplay="true"></cld-video>
		</template>
		<template v-else>
			<canvas id="pixi" style="width: 100%"></canvas>
		</template>
	</div>
</template>

<script>
	import * as PIXI from 'pixi.js'

	export default {
		name: "PixiImageHero",

		props: ['imageSrc'],

		data() {
			return {
				pixiApp: null,
				isMobile: false
			}
		},

		methods: {

		},

		mounted() {
			this.isMobile = !window.matchMedia('(min-width: 600px)').matches;

			const loader = PIXI.Loader.shared;
			const sprites = {};
			loader.add('hero', this.imageSrc);


			loader.load((loader, resources) => {
				sprites.hero = new PIXI.Texture.from('https://res.cloudinary.com/sirric/image/upload/v1580590237/coac/ep1/Guernsey_July_2010_Le_D%C3%A9hus_14_zhbv7j.jpg');
			});

			loader.onComplete.add(() => {
				console.log(sprites.hero);

				if (!this.isMobile) {
					setTimeout(() => {
						const canvas = document.getElementById('pixi');

						this.pixiApp = new PIXI.Application({
							view: canvas,
							width: window.innerWidth,
							height: (window.innerWidth * .364),
							transparent: true
						});

						const container = new PIXI.Container();
						this.pixiApp.stage.addChild(container);


						let image = new PIXI.Sprite(sprites.hero);
						image.width = this.pixiApp.renderer.width;
						image.height = this.pixiApp.renderer.height;

						let mask = new PIXI.Sprite.from('https://res.cloudinary.com/sirric/video/upload/v1593250901/coac/common/smoke2_cdjkoi.mp4');
						mask.width = this.pixiApp.renderer.width;
						mask.height = this.pixiApp.renderer.height;

						image.mask = mask;

						container.addChild(mask);
						this.pixiApp.stage.addChild(image);
					}, 1500);
				}
			});
		}
	}
</script>
