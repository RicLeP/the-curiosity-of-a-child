import Vue from 'vue';
import Cloudinary from 'cloudinary-vue';
import { Tweet } from 'vue-tweet-embed'
import * as VueGoogleMaps from 'vue2-google-maps'

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
		Tweet
	},

	data() {
		return {
		}
	},

	mounted() {
	}
});

