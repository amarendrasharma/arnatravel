<template>
	<div>
		<div ref="editor"></div>
	</div>
</template>
<script>
	import Quill from "quill";
	import "../../../../node_modules/quill/dist/quill.core.css";
	import "../../../../node_modules/quill/dist/quill.snow.css";
	export default {
		props: {
			value: {
				type: String,
				default: ""
			}
		},
		data() {
			return {
				editor: null
			};
		},
		mounted() {
			this.editor = new Quill(this.$refs.editor, {
				modules: {
					toolbar: [
						[{ header: [1, 2, false] }],
						["bold", "italic", "underline"],
						["image"]
					]
				},
				placeholder: "Write things don't copy and paste directly,",
				theme: "snow"
			});

			this.editor.root.innerHTML = this.value;

			this.editor.on("text-change", () => this.update());
		},

		methods: {
			update() {
				this.$emit(
					"input",
					this.editor.getText() ? this.editor.root.innerHTML : ""
				);
			}
		}
	};
</script>
<style scoped>
#editor-container {
	height: 375px;
}
</style>