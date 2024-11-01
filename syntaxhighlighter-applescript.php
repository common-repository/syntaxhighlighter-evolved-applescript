<?php
/*
Plugin Name: SyntaxHighlighter Evolved: AppleScript
Description: Adds support for the AppleScript language to the SyntaxHighlighter Evolved plugin.
Author: Scott Selikoff
Version: 1.4.0
Author URI: http://www.selikoff.net/
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_applescript_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_applescript_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_applescript_regscript() {
	wp_register_script( 'syntaxhighlighter-brush-applescript', plugins_url('syntaxhighlighter-evolved-applescript/scripts/shBrushAppleScript.js'), array('syntaxhighlighter-core'), '1.4.0');
	wp_register_style(  'syntaxhighlighter-theme-applescript', plugins_url('syntaxhighlighter-evolved-applescript/styles/shThemeAppleScript.css'), array('syntaxhighlighter-core'), '1.4.0');
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_applescript_addlang( $brushes ) {
	$brushes['applescript'] = 'applescript';
	$brushes['as'] = 'applescript';
	return $brushes;
}
?>