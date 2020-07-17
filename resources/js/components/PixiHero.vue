<template>
	<div>
		<template v-if="isMobile">
			<cld-video cloud-name="sirric" :public-id="videoSrc" muted="true" loop="true" width="100%" autoplay="true"></cld-video>
		</template>
		<template v-else>
			<canvas id="pixi" style="width: 100%"></canvas>
		</template>
	</div>
</template>

<script>
	import * as PIXI from 'pixi.js'

	export default {
		name: "PixiHero",

		props: ['videoSrc'],

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

					let videoSource = new PIXI.Texture.from(this.videoSrc);
					videoSource.baseTexture.resource.source.loop = true;
					videoSource.baseTexture.resource.source.muted = true;


					let video = new PIXI.Sprite(videoSource);
					video.width = this.pixiApp.renderer.width;
					video.height = this.pixiApp.renderer.height;

					let mask = new PIXI.Sprite.from('https://res.cloudinary.com/sirric/video/upload/v1593250901/coac/common/smoke2_cdjkoi.mp4');
					mask.width = this.pixiApp.renderer.width;
					mask.height = this.pixiApp.renderer.height;

					video.mask = mask;

					container.addChild(mask);
					this.pixiApp.stage.addChild(video);
				}, 1500);
			}
		}
	}
</script>
