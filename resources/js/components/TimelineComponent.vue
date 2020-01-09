<template>
	<div id="app">
		<div class="container">
			<input v-model="searchQuery" class="search-box" placeholder="Search for articles..." />
			<div class="timeline" v-if="anyArticle()">
				<div v-for="(dateWithArticles, date) in searchedArticles" :key="date">
					<p v-if="dateWithArticles.length > 0" class="date">{{ date }}</p>
					<div v-for="(article,articleIndex) in dateWithArticles" class="article" :key="articleIndex">
						<span class="dot"></span>
						<p class="article-date">{{ article.published_at }}</p>
						<h3>
							<a :href="'#' + article.slug">{{ article.title }}</a>
						</h3>
						<p>{{ article.teaser }}</p>
					</div>
				</div>
			</div>
			<p v-else>No articles found.</p>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				searchQuery: "",
				datesArticles: {
					"September, 2016": [
						{
							title: "Five",
							slug: "five",
							teaser: "five",
							published_at: "30.09.2016."
						},
						{
							title: "Four",
							slug: "four",
							teaser: "four",
							published_at: "15.09.2016."
						}
					],
					"April, 2016": [
						{
							title: "Three",
							slug: "three",
							teaser: "three",
							published_at: "14.04.2016."
						},
						{
							title: "Two and a half",
							slug: "two-and-a-half",
							teaser: "two and a half",
							published_at: "02.04.2016."
						}
					],
					"December, 2015": [
						{
							title: "Two",
							slug: "two",
							teaser: "two",
							published_at: "25.12.2015."
						},
						{
							title: "One",
							slug: "one",
							teaser: "one",
							published_at: "01.12.2015."
						}
					]
				}
			};
		},
		computed: {
			searchedArticles() {
				var searchRegex = new RegExp(this.searchQuery, "i");
				var searchedObj = {};

				if (this.searchQuery == "") {
					return this.datesArticles;
				}

				for (var date in this.datesArticles) {
					searchedObj[date] = this.datesArticles[date].filter(article => {
						return (
							searchRegex.test(article.title) ||
							searchRegex.test(article.teaser) ||
							searchRegex.test(article.published_at) ||
							searchRegex.test(date)
						);
					});
				}
				return searchedObj;
			}
		},
		methods: {
			anyArticle() {
				return this.countAllArticles() ? true : false;
			},
			countAllArticles() {
				var count = 0;
				for (var date in this.searchedArticles) {
					count += this.searchedArticles[date].length;
				}
				return count;
			}
		}
	};
</script>
<style scoped>
.container {
	margin: 0 auto;
	width: 100%;
	max-width: 500px;
}

.search-box {
	padding: 10px;
	margin: 20px 0;
	border: 1px solid black;
	border-radius: 5px;
}

.timeline {
	position: relative;
	border-left: 1px solid black;
}

.date {
	display: inline-block;
	border: 1px solid black;
	border-radius: 5px;
	padding: 5px;
	position: relative;
	left: 15px;
	margin: 15px 0;
}

&:before {
	content: "";
	position: absolute;
	top: 50%;
	left: -16px;
	border: 1px solid black;
	width: 14px;
}
.article {
	position: relative;
	left: 20px;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
	border-radius: 5px;
	padding: 10px;
	margin: 10px 0;
}
&:hover {
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.4);
}

a {
	color: green;
	text-decoration: none;
}

.article-date {
	font-weight: 300;
	font-size: 14px;
}
.dot {
	display: block;
	position: absolute;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background: green;
	left: -25.5px;
	top: calc(50% - 5px);
}
</style>