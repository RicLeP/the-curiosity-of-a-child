<template>
	<div style="background: red;">
		<canvas id="pixi" style="width: 100%"></canvas>
	</div>
</template>

<script>
	import * as PIXI from 'pixi.js'

	export default {
		name: "PixiHero",

		data() {
			return {
				pixiApp: null
			}
		},

		methods: {
			/*setScene: function(url){
				playground.appendChild(renderer.view);

				stage = new PIXI.Container();

				tp = PIXI.Texture.fromImage(url);
				preview = new PIXI.Sprite(tp);

				preview.anchor.x = 0;

				displacementSprite = PIXI.Sprite.fromImage('https://res.cloudinary.com/dvxikybyi/image/upload/v1486634113/2yYayZk_vqsyzx.png');
				displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;

				displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);

				displacementSprite.scale.y = 0.6;
				displacementSprite.scale.x = 0.6;


				stage.addChild(displacementSprite);

				stage.addChild(preview);

				animate();
			},
			animate() {

				let raf = requestAnimationFrame(this.animate);

				displacementSprite.x = count*10;
				displacementSprite.y = count*10;

				count += 0.05;

				this.pixiApp.stage.filters = [displacementFilter];

				this.pixiApp.render(this.pixiApp.stage);

				//const canvas = document.getElementById('pixi');

			}*/
		},

		mounted() {
			const canvas = document.getElementById('pixi');

			this.pixiApp = new PIXI.Application({
				view: canvas,
				width: window.innerWidth,
				height: 580,
				transparent: true
			});

			const container = new PIXI.Container();
			this.pixiApp.stage.addChild(container);

			let videoSource = new PIXI.Texture.from('https://res.cloudinary.com/sirric/video/upload/v1593170731/coac/ep16/ep16_hero_sc6pih.mp4');
			//videoSource.baseTexture.resource.source.loop = true; ////////////////////


			let video = new PIXI.Sprite(videoSource);
			video.width = this.pixiApp.renderer.width;

			//video.preload = 'auto';
			//this.pixiApp.autoPlay = video.autoplay;

			//let mask = new PIXI.Sprite.from('https://localhost:3000/img/image-border--2.png');
			//let mask = new PIXI.Sprite.from('https://0201.nccdn.net/1_2/000/000/11a/e17/house-xxl.png');
			let mask = new PIXI.Sprite.from('https://res.cloudinary.com/sirric/video/upload/v1593250901/coac/common/smoke2_cdjkoi.mp4');
			//mask.anchor.set(0.5);
			//mask.x = 310;
			//mask.y = 190;



			video.mask = mask;


			let displacementSprite = PIXI.Sprite.from('https://res.cloudinary.com/dvxikybyi/image/upload/v1486634113/2yYayZk_vqsyzx.png');
			displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;

			let displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);
			container.addChild(displacementSprite);


			container.addChild(mask);
			this.pixiApp.stage.addChild(video);

			let count = 0;


			this.pixiApp.ticker.add(() => {
				displacementSprite.x = count*50;
				displacementSprite.y = count*50;
				displacementSprite.rotation += .001;

				count += 0.05;

				this.pixiApp.stage.filters = [displacementFilter];
				this.pixiApp.render(this.pixiApp.stage);

				/*container.filters = [displacementFilter];
				this.pixiApp.render(this.pixiApp.stage);*/
				//this.pixiApp.render(this.pixiApp.stage);
			});

		}
	}
</script>
