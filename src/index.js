import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";

registerBlockType("mein-gutenberg-plugin/hello-world", {
	title: __("Hello World", "mein-gutenberg-plugin"),
	icon: "smiley",
	category: "widgets",
	edit: () => <div>Hello World (Backend)</div>,
	save: () => <div>Hello World (Frontend)</div>,
});
