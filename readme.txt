=== Screenshot Machine Shortcode ===
Contributors: jsmoriss
Donate link: http://surniaulula.com/extend/plugins/contribution-form/
Tags: screenshot, machine, shortcode
Requires at least: 3.0
License: GPLv2 or later
Tested up to: 3.5.1
Stable tag: 1.1

Include images from Screenshot Machine in your content with a shortcode.

== Description ==

Use the `&#91;ssm&#93;` shortcode in your content with the following arguments:

* key="{account key}"
* url="{website url}"
* size="{size letter}" (default=T)
* format="{jpg|png|gif}" (default=jpg)
* days="{cache expiration}" (default=14)
* wait="{wait in ms}" (default=200)
* title="{href title}"
* link="{yes|no}" (default=yes)
* target="{link target}" (default=_blank)
* refresh="{yes|no}" (default=yes)

<!--more-->

You can find the {account key} on [your Screenshot Machine account/settings page](https://www.screenshotmachine.com/account.php).

The {website url} is the web page URL to capture into a screenshot.

Valid {size letter} values are:

* T = Width 120 x Height 90
* S = Width 200 x Height 150
* E = Width 320 x Height 240
* N = Width 400 x Height 300
* M = Width 640 x Height 480
* L = Width 800 x Height 600
* X = Width 1024 x Height 768

{jpeg|png|gif} is the image format to use (default is jpg).

{cache expiration} is the number of days a screenshot should be used before a new one is created.

{wait in ms} is the number of milliseconds to wait before capturing the screenshot.

{href title} is the title text for the image alt and link title.

The link yes/no value will determine if the image is linked to the web page URL or not.

The {link target} default will open links in a new window/tab. An empty string, '_self', '_top', '_parent', and a framename are also valid.

The refresh parameter includes javascript to retry the image every second until it's available (for a maximum of 10 seconds).

Example:

`
&#91;ssm key="abc123" url="http://surniaulula.com/extend/plugins/screenshot-machine-shortcode/" size="S"&#93;
`

== Installation ==

*Using the WordPress Dashboard*

1. Login to your weblog
1. Go to Plugins
1. Select Add New
1. Search for *NextGEN Facebook*
1. Select Install
1. Select Install Now
1. Select Activate Plugin

*Manual*

1. Download and unzip the plugin
1. Upload the entire adobe-xmp-for-wp/ folder to the /wp-content/plugins/ directory
1. Activate the plugin through the Plugins menu in WordPress

== Frequently Asked Questions ==

== Changelog ==

= Version 1.1 =

* Removed the 'blank' argument, replacing it with 'target' instead.
* Added the 'format', 'days', and 'wait' arguments.

= Version 1.0 =

* Initial release.

