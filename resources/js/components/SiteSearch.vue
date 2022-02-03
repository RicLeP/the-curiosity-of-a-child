<template>
	<ais-instant-search :search-client="searchClient" index-name="The Curiosity of a Child Podcast">
		<ais-configure :hits-per-page.camel="5" :distinct="true"/>

		<ais-autocomplete :escape-html="true">
			<div slot-scope="{ currentRefinement, indices, refine }" class="search">
				<input
					type="text"
					placeholder="Search"
					v-bind:class="component + '__input'"
					@focus="focused"
					v-model="localQuery"
					@input="delaySearch(refine, localQuery)"
					autocomplete="off"
					name="query"
				>

				<ul v-if="currentRefinement && queryFieldHasAtLeastThreeCharacters" v-bind:class="component + '__results'">
					<li v-for="hit in indices[0].hits" :key="hit.objectID" v-bind:class="component + '__hit'">
						<a :href="'/' + hit.slug" v-bind:class="component + '__link'">{{ hit.name }}</a>
					</li>

					<li v-if="indices[0].hits.length == 0" v-bind:class="component + '__hit'">
						Oops, we couldn't find anything. Try something else…
					</li>
				</ul>
			</div>
		</ais-autocomplete>
	</ais-instant-search>
</template>

<script>
import algoliasearch from 'algoliasearch/lite';
//import filterMixin from './filter-mixin.js';

const algoliaClient = algoliasearch('ZT5127R5R6', '44b0e4f94d1bb722adc7da3ccc394abd');

const searchClient = {
	search(requests) {
		// Ensures that the query params is non-empty before firing search
		if(requests.every(({ params }) => !params.query)) {
			return Promise.resolve({
				results: requests.map(() => ({
					hits: [],
					nbHits: 0,
					processingTimeMS: 0,
				})),
			});
		}

		return algoliaClient.search(requests);
	},
};

export default {
	name: 'autocomplete-search',

	//mixins: [filterMixin],

	props: {
		indexName: {
			type: String
		},
		delay: {
			type: Number,
			default: 50,
			required: false,
		},
	},

	data() {
		return {
			localQuery: '',
			queryFieldHasAtLeastThreeCharacters: false,
			searchClient,
			component: 'search'
		};
	},

	destroyed() {
		if (this.timeoutId) {
			clearTimeout(this.timeoutId);
		}
	},

	methods: {
		focused() {
			this.$emit('searchFocused');
		},

		delaySearch(refine, queryParam) {
			// Only refine search if character length is greater than 2
			if(queryParam.trim().length >= 3) {
				this.queryFieldHasAtLeastThreeCharacters = true;
				this.timeoutId = setTimeout(() => {
					refine(queryParam);
				}, this.delay);
			} else {
				this.queryFieldHasAtLeastThreeCharacters = false;
			}
		}
	}
};
</script>