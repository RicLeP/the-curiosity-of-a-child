module.exports = {
	"extends": ["stylelint-config-standard-scss"],
	"plugins": ["stylelint-scss", "stylelint-order"],
	"rules": {
		"indentation": "tab",
		"declaration-empty-line-before": null,
		"order/properties-order": [
			[
				{
					"groupName": "reset",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"all"
					]
				},
				{
					"groupName": "heading",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"content",
						"quotes"
					]
				},
				{
					"groupName": "display",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"box-sizing",
						"display",
						"visibility"
					]
				},
				{
					"groupName": "position",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"position",
						"z-index",
						"top",
						"right",
						"bottom",
						"left"
					]
				},
				{
					"groupName": "grid",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"grid",
						"gap",
						"grid-after",
						"grid-area",
						"grid-auto-columns",
						"grid-auto-flow",
						"grid-auto-rows",
						"grid-before",
						"grid-column",
						"grid-column-end",
						"grid-column-gap",
						"grid-column-start",
						"grid-columns",
						"grid-end",
						"grid-gap",
						"grid-row",
						"grid-row-end",
						"grid-row-gap",
						"grid-row-start",
						"grid-rows",
						"grid-start",
						"grid-template",
						"grid-template-areas",
						"grid-template-columns",
						"grid-template-rows"
					]
				},
				{
					"groupName": "flex",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"flex",
						"flex-basis",
						"flex-direction",
						"flex-flow",
						"flex-grow",
						"flex-shrink",
						"flex-wrap",
						"align-content",
						"align-items",
						"align-self",
						"justify-content",
						"justify-items",
						"order"
					]
				},
				{
					"groupName": "dimensions",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"aspect-ratio",
						"object-fit",
						"object-position",
						"width",
						"min-width",
						"max-width",
						"height",
						"min-height",
						"max-height"
					]
				},
				{
					"groupName": "margin",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"margin",
						"margin-top",
						"margin-right",
						"margin-bottom",
						"margin-left"
					]
				},
				{
					"groupName": "padding",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"padding",
						"padding-top",
						"padding-right",
						"padding-bottom",
						"padding-left"
					]
				},
				{
					"groupName": "float",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"float",
						"clear"
					]
				},
				{
					"groupName": "overflow",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"clip",
						"overflow",
						"overflow-x",
						"overflow-y",
						"zoom"
					]
				},
				{
					"groupName": "background",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"background",
						"background-attachment",
						"background-clip",
						"background-color",
						"background-image",
						"background-position",
						"background-repeat",
						"background-size",
						"box-shadow",
						"fill"
					]
				},
				{
					"groupName": "borders",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"border",
						"border-top",
						"border-right",
						"border-bottom",
						"border-left",
						"border-width",
						"border-top-width",
						"border-right-width",
						"border-bottom-width",
						"border-left-width",
						"border-style",
						"border-top-style",
						"border-right-style",
						"border-bottom-style",
						"border-left-style",
						"border-radius",
						"border-top-left-radius",
						"border-top-right-radius",
						"border-bottom-right-radius",
						"border-bottom-left-radius",
						"border-color",
						"border-top-color",
						"border-right-color",
						"border-bottom-color",
						"border-left-color",
						"outline",
						"outline-color",
						"outline-offset",
						"outline-style",
						"outline-width",
						"stroke-width",
						"stroke-linecap",
						"stroke-dasharray",
						"stroke-dashoffset",
						"stroke"
					]
				},
				{
					"groupName": "typography",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"color",
						"font",
						"font-emphasize",
						"font-emphasize-position",
						"font-emphasize-style",
						"font-family",
						"font-size",
						"font-size-adjust",
						"font-smoothing",
						"font-stretch",
						"font-style",
						"font-variant",
						"font-weight",
						"hyphens",
						"line-height",
						"letter-spacing",
						"text-align",
						"text-align-last",
						"text-decoration",
						"text-decoration-color",
						"text-decoration-line",
						"text-decoration-style",
						"text-emphasis",
						"text-emphasis-color",
						"text-emphasis-style",
						"text-emphasis-position",
						"text-indent",
						"text-justify",
						"text-outline",
						"text-overflow",
						"text-overflow-ellipsis",
						"text-overflow-mode",
						"text-rendering",
						"text-shadow",
						"text-transform",
						"text-wrap",
						"word-break",
						"word-wrap",
						"vertical-align",
						"white-space",
						"word-spacing"
					]
				},
				{
					"groupName": "lists",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"list-style",
						"list-style-image",
						"list-style-position",
						"list-style-type"
					]
				},
				{
					"groupName": "columns",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"columns",
						"column-gap",
						"column-fill",
						"column-rule",
						"column-span",
						"column-count",
						"column-width"
					]
				},
				{
					"groupName": "tables",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"table-layout",
						"empty-cells",
						"caption-side",
						"border-spacing",
						"border-collapse",

					]
				},
				{
					"groupName": "animation",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"transform",
						"transform-box",
						"transform-origin",
						"transform-style",
						"backface-visibility",
						"perspective",
						"perspective-origin",
						"transition",
						"transition-property",
						"transition-duration",
						"transition-timing-function",
						"transition-delay",
						"animation",
						"animation-name",
						"animation-duration",
						"animation-play-state",
						"animation-timing-function",
						"animation-delay",
						"animation-iteration-count",
						"animation-direction"
					]
				},
				{
					"groupName": "other",
					"emptyLineBefore": "always",
					"noEmptyLineBetween": true,
					"properties": [
						"counter-increment",
						"counter-reset",
						"cursor",
						"nav-index",
						"nav-up",
						"nav-right",
						"nav-down",
						"nav-left",
						"pointer-events",
						"resize",
						"speak",
						"tab-size",
						"user-select"
					]
				},
			],
			{
				"unspecified": "bottom",
				"emptyLineBeforeUnspecified": "always"
			}
		]
	},
}
