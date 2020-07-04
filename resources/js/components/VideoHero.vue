<template>
	<div>
		<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593170731/coac/ep16/ep16_hero_sc6pih.mp4" muted="true" loop="true" width="100%" autoplay="false">
		</cld-video>

		<div class="hero__overlay">
			<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593250901/coac/common/smoke2_cdjkoi.mp4" muted="true" width="100%" autoplay="false">
			</cld-video>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'VideoHero',

		data() {
			return {
				playing: false,
			}
		},

		mounted() {
			setTimeout(() => {
				this.playing = true;
			}, 2500);
		}
	}

	/*
	<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593170731/coac/ep16/ep16_hero_sc6pih.mp4" muted="true" loop="true" width="100%" :autoplay="playing">
		</cld-video>

		<div class="hero__overlay">
			<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593250901/coac/common/smoke2_cdjkoi.mp4" muted="true" width="100%" :autoplay="playing">
			</cld-video>
		</div>
	* */
</script>
