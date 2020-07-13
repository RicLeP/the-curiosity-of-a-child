import Vue from 'vue';
import Cloudinary from 'cloudinary-vue';
import { Tweet } from 'vue-tweet-embed'
import * as VueGoogleMaps from 'vue2-google-maps'
import VideoHero from "./components/VideoHero";
import PixiHero from "./components/PixiHero";
import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'

Vue.use(Cloudinary);

Vue.use(VueGoogleMaps, {
	load: {
		key: 'AIzaSyBqRCrKBCKtlmUnM_cXUURCKaZNMaQtH8w'
	},
})


const app = new Vue({
	el: '#app',
	comments: true,

	components: {
		Swiper,
		SwiperSlide,
		Tweet,
		PixiHero,
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
			}
		}
	},

	mounted() {
	}
});

