<template>
	<div>
		<text-editor v-model="itinarary"></text-editor>
		<button @click.prevent="fetch()">Save</button>
	</div>
</template>
<script>
	import TextEditor from "../../ui/TextEditor";
	import { RepositoryFactory } from "../../../repositories/repositoryFactory";
	const PackagesApi = RepositoryFactory.get("packages");
	export default {
		components: {
			TextEditor
		},
		data() {
			return {
				itinarary: "",
				packages: ""
			};
		},
		methods: {
			async fetch() {
				const { data } = await PackagesApi.get();
				this.packages = data;
			},
			postData() {
				axios.post("/takedummy", this.itinarary).then(res => {
					this.dummy = res.data;
					console.log(res.data);
				});
			}
		}
	};
</script>