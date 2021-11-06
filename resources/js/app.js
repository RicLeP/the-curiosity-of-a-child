import Vue from 'vue';
import Cloudinary from 'cloudinary-vue';
import { Tweet } from 'vue-tweet-embed'
import * as VueGoogleMaps from 'vue2-google-maps'
import VideoHero from "./components/VideoHero";
import PixiHero from "./components/PixiHero";
import PixiImageHero from "./components/PixiImageHero";
import { swiper, swiperSlide } from 'vue-awesome-swiper'

Vue.use(Cloudinary);

Vue.use(VueGoogleMaps, {
	load: {
		key: 'AIzaSyBqRCrKBCKtlmUnM_cXUURCKaZNMaQtH8w'
	},
})

window.axios = require('axios');

const app = new Vue({
	el: '#app',
	comments: true,

	components: {
		swiper,
		swiperSlide,
		Tweet,
		PixiHero,
		PixiImageHero,
		VideoHero
	},

	data() {
		return {
			gallerySwiper: {
				pagination: {
					el: '.swiper-pagination'
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				}
			},
			autoSwiper: {
				autoplay: {
					delay: 3000
				},
			},
			liveData: {},
			showTranscript: false
		}
	},

	mounted() {
		//const request = axios.CancelToken.source();

		/*window.storyblok.on('input', (payload) => {
			// Current unsaved Story without _editable properties
		//	console.log(payload.story.content);



			axios.post('/live-field', {
				content: payload.story.content,
				cancelToken: request.token
			}).then((response) => {
				console.log(response.data);
				this.liveData = response.data;
			});

			// Add _editable properties to keep the Storyblok JS Bridge active after the content updates.
		//	let updatedStoryContent = window.storyblok.addComments(payload.story.content, payload.story.id)

			// Story object including _editable properties for each component.
		//	console.log(updatedStoryContent)

			// Use to update your projects content state

		})*/
	}
});

