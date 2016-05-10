<?php if(!defined('KIRBY')) exit ?>

title: Offer
pages: false
files: true
fields:
	title:
		label: Title
		type:  text
	baseline:
		label: Baseline
		type: textarea
	text:
		label: Text
		type:  textarea
	elements:
		label: Offer elements
		type: structure 
		entry: >
			{{title}}</br>
			{{baseline}}
		fields:
			title:
				label: Title
				type: text
			fa:
				label: Font Awesome code 
				type: text
			baseline:
				label: Baseline
				type: text
			examples:
				label: Examples
				type: textarea
