=== Plugin Name ===
Contributors: eisenivan
Donate link: https://github.com/eisenivan/loyalty
Tags: customer loyalty, jquery, loyalty, user rewards, business logic
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Loyalty.js tracks visitor page views and helps you to serve content dynamically based on visitor loyalty.

== Description ==

Loyalty js is a lightweight jQuery plugin that keeps track of how many times a user has come to your web property and allows you to craft a different experience based on that count. You can control the behavior by adding data-attribute tags to your DOM elements. Now, rather than having content rotate for every user at the same time, you will be able to "tell a story" that always starts at the beginning and progresses as a user becomes more engaged.


Wordpress Usage

This wordpress plugin comes complete with a shortcode that allows you to use loyalty.js tags in your content editor code. The shortcode is an enclosing tag.

[loyalty min="3" max="4"]Your Content[/loyalty]


The plugin will honor min and max first. If you want the content to display at one specific view count, use ONLY the exact parameter.

[loyalty exact="6"]This content will show on visit #6[/loyalty]



Advanced Implementation

If you would like to roll up your sleeves a little farther you can manually add data-attribute tage into your code. Please read the documentation on the GitHub page. https://github.com/eisenivan/loyalty


== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Why is this cool? =

This plugin is designed to make "storytelling" easier. The web is often boring, and each site offers the exact same experience to every user ever time. With this plugin you can define a different story for a user based on how many times they have visited. Maybe you want to show your "like us on facebook" call to action to users that have been to your site less than 10 times. After 10 visits though, they probably would have liked your page if they wanted to, so you can easily use that space to give them more useful information.


== Changelog ==

= 1.0 =
* Hello world!!! The initial release