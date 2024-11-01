=== SyntaxHighlighter Evolved Applescript ===
Contributors: apollox2
Donate link: http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/donate/
Tags: syntax, hightligher, applescript, code, CSS, html, php, sourcecode
Requires at least: 2.7
Tested up to: 3.1.1
Stable tag: 1.4.0

Adds support for the AppleScript language to the SyntaxHighlighter Evolved plugin using [applescript] and [as] tags.

== Description ==

<b>SyntaxHighlighter Evolved Applescript</b> adds support to the [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) plugin for the AppleScript language using the brush provided by [David Chambers](http://davidchambersdesign.com).  It is based on the [SyntaxHighlighter JavaScript package by Alex Gorbatchev](http://alexgorbatchev.com/SyntaxHighlighter/).

== Installation ==

###Prerequisite###

In order to use SyntaxHighlighter Evolved Applescript, you must first install [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/).

###Installation###

Extract all files from the ZIP file, making sure to keep the file/folder structure intact, and then upload it to /wp-content/plugins/.

###Plugin Activation###

Go to the admin area of your WordPress install and click on the "Plugins" menu. Click on "Activate" for the "SyntaxHighlighter Evolved: AppleScript" plugin.

###Plugin Usage###

Just wrap your code in [applescript], such as [applescript]code here[/applescript] or [as]code here[/as].

The shortcodes accept a wide variety of parameters. For details, see the bottom of the SyntaxHighlighter Evolved's settings page.

== Frequently Asked Questions ==

= The code is just being displayed raw. It isn't being converted into a code box or anything. What's wrong?  =

Make sure your theme's `footer.php` file has `<?php wp_footer(); ?>` somewhere inside of it, otherwise the plugin won't be able to do it's thing.

== Screenshots ==

1. This is a sample image of the plugin in action as applied to AppleScript code.

2. Longer sample showing additional syntax.

== Changelog ==

= 1.4.0 =
* Updated AppleScript brush stylesheet and script to version 3.0.83, as provided by [David Chambers](http://davidchambersdesign.com).

= 1.3.0 =
* Added support for accessing plugin via [as].

= 1.2.0 =
* Bug fixes.

= 1.1.0 =
* Initial release