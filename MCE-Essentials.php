// TinyMCE: First line toolbar customizations
if( !function_exists('base_extended_editor_mce_buttons') ){
	function base_extended_editor_mce_buttons($buttons) {
		// The settings are returned in this array. Customize to suite your needs.
		return array(
			'formatselect', 'bullist', 'numlist', 'blockquote', 'charmap',  'link', 'unlink','wp_more', 'wp_adv'
		);
		/* WordPress Default
		return array(
			'bold', 'italic', 'strikethrough', 'separator',
			'bullist', 'numlist', 'blockquote', 'separator',
			'justifyleft', 'justifycenter', 'justifyright', 'separator',
			'link', 'unlink', 'wp_more', 'separator',
			'spellchecker', 'fullscreen', 'wp_adv'
		); */
	}
	add_filter("mce_buttons", "base_extended_editor_mce_buttons", 0);
}

// TinyMCE: Second line toolbar customizations
if( !function_exists('base_extended_editor_mce_buttons_2') ){
	function base_extended_editor_mce_buttons_2($buttons) {
		// The settings are returned in this array. Customize to suite your needs.
		return array(
			'pastetext', 'pasteword','removeformat','undo', 'redo', 'wp_help', 'fullscreen', 'spellchecker',
		);
		/* WordPress Default
		return array(
			'formatselect', 'underline', 'justifyfull', 'forecolor', 'separator',
			'pastetext', 'pasteword', 'removeformat', 'separator',
			'media', 'charmap', 'separator',
			'outdent', 'indent', 'separator',
			'undo', 'redo', 'wp_help'
		); */
	}
	add_filter("mce_buttons_2", "base_extended_editor_mce_buttons_2", 0);
}
// Customize the format dropdown items
if( !function_exists('base_custom_mce_format') ){
	function base_custom_mce_format($init) {
		// Add block format elements you want to show in dropdown
		$init['block_formats'] = 'Paragraph=p;Header 2=h2;Header 3=h3';
		//$init['extended_valid_elements'] = 'code[*]';
		return $init;
	}
	add_filter('tiny_mce_before_init', 'base_custom_mce_format' );
}
