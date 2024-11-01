=== Super Floating Social Buttons ===
Contributors: Alexandru Stan
Tags: floating, social media, facebook, youtube, twitter, floating frame, links, icons, dynamic width, clean, simple, easy, floating links
Requires at least: 3.3.0
Tested up to: 3.5.1
Stable tag: 1.1.0
License: GPL2

Add a clean and simple floating frame, with social media and custom links, to your website/blog. Fully customizable with a robust array of easy-to-use options!

== Description ==
Super Floating Social Buttons is designed to allow anyone to add a simple floating frame to their wordpress website/blog, which contains icons and links to their social media and/or partners' websites. And before you read too far you should know that I'm among those who strongly dislike "floating" animations, so this plugin does a clean simple "stay-in-place" float with no animation for an incredibly clean look. 

The purpose of this plugin is to give highly customizable options and move away from "like" "share" and "subscribe" buttons in favor of simple, stylish linked icons (although these "action buttons" can still be included). Instead of simply asking visitors to acknowledge their appreciation of your work (by liking or following), this encourages them to also check out your social media <i>content</i>, increasing real social interaction (more so than simply using page "likes" to indicate interaction). As native support for "share" features is rapidly becoming the norm (ie Windows 8, Google Chrome 24 (Canary), Mobile Devices, Safari), it is becoming redundant to clutter your site with buttons that share content, although you can still do so with this plugin; rather, the intent is real interaction with your social media content. 

This plugin features a delicious interface for the admin and is incredibly easy to configure and customize. It follows a set of principles which allows you to only read through as many options as you want, hiding less frequently used options by default and never showing options which are unavailable or irrelevant based on other settings. Easy to use for ANYONE!

For web designers and developers, you may customize which pages the frame appears on with your theme templates, and you can use custom, dynamic php-generated links (see the FAQ for details).

Please feel free to offer any feature suggestions you might have (through the support forums or by Dianys) and I WILL consider them for future releases.


== Installation ==
1. Take the easy route and install through the wordpress plugin adder :) OR
1. Download the .zip file and upload the unzipped folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Ensure that the `<?php wp_head(); ?>` and `<?php wp_footer(); ?>` action hooks are in your theme's header.php and footer.php files templates
1. Enter your links, choose appearance settings, and set the first general option to "On Every Page" to activate the frame on your site (or place the custom code in your templates)

== Frequently Asked Questions ==

= The frame doesn't show up on my site! =

First, make sure that the first general option is set to show the frame on every page, or that you have placed the necessary code in the correct template files if you are showing it on customized pages. Then make sure that your browser window is larger than the value for minimum size to display the frame, and try changing that value (make it smaller). Then, check your theme's `header.php` and `footer.php` files for the necessary action hooks (more instructions on the general options settings page). Check your vertical position setting AND UNITS in the appearance settings tab (15px is much different from 15in) - it's possible that your frame is too far down the page to see. If the problems persist, try using a bigger number for the custom layering/z-index (in appearance). If all else fails, try the support forums and someone with html knowledge should be able to find the problem.

= How do I use the display on custom pages option? =

To use the option to display the frame on customized pages, instead of on every page on your site, you need to be comfortable with editing you're theme's template files (html/php). If you are, siply copy this code: `<?php floating_social_media_links() ?>` and paste it into each template file that is used for the pages that you want (for example, index.php for the main blog page, page.php for the default page template, search.php for the search results page, archives.php for archive pages, etc.). Once you find the template files that correspond to the pages you want the frame to appear on, paste the code into the file immediately before the line that says `<?php get_footer() ?>`.

To include dynamic php-generated links, call the floating_social_media_links() function with up to three parameters. Each parameter will override the custom link 1-3 url options, although you still need to set the icon image, link title, and click the show link checkbox in the settings page. If you only want one dynamic link but want it after two other custom links, you can call `<?php floating_social_media_links(null,null,$dynamic_variable); ?>`. The parameters will only replace the links if they are (identified by php as) strings. To debug, use the php function `is_string()`.

= Where's the settings page? =

It's under settings: Settings -> Super Floating Social Buttons. And on a side note, the tabs on the settings page are showing different parts of the same page, not refreshing the browser, so you can switch between tabs without needing to save.

= What about other social media sites? =

I realize that there are countless other social media sites which aren't included in this plugin. In order to avoid an extensively bloated plugin and settings page, I have only included the three most popular sites (Facebook, Twitter, and Youtube - in the US). But... one of the reasons I've included space for up to 7 custom links is so that you may include links to any additional social media sites that you wish to. Simply find a version of the site's icon that you like and upload it as the icon, then enter the entire url (including, for example, facebook.com/), and it functions just like any of the built-in links. You can also include action buttons for other sites, as long as they have url-based options (enter the share url as a custom link, then create a share icon and use them in tandem). 


= How can I add more custom links? =

Currently, up to seven custom links may be used at a time. I am preparing a massive internal restructuring of this plugin which will remove a variety of current limitations, including allowing infinite links of any time, including built-in support for many more social media sites and additional action buttons. And the best part is that it will eventually be possible to reorder everything in the frame, including links, icons, and action buttons, however you want.

= Why default to customized pages showing the links? =

This allows users to enter their links before the frame is actually show on your site. This option replaces an old option to activate the frame output; which would be redundant as this option does essentially the same thing. I try to minimize the number of unuseful options so that I can maximize the useful ones without bloating the plugin and making it take more than a couple minutes to set up.

= Why is the twitter icon the bird instead of the t? =

When I was preparing the new icon set for version 1.4.0, in order to add support for square corners, I realized that <a href="" target="_blank">Twitter actually wants people to use the bird</a>, NOT the t (twitter hasn't been using the t for some time now, and addoption has been quite slow, the bird is the standard now). Additionally, this icon is better suited for the cleaner, more streamlined look that this plugin seeks to use (as are all of the new icons). Finally, the t can easily be confused with the t icon for Tumblr...

= My settings for a custom link disapeared when I said to hide it. Can I get them back or do I need to start over? =

Any custom links that are hidden from your site will also be hidden from your settings page, by default. All of your settings, however, are saved. Simply click "Add Another Custom Link" and your previous settings will be pre-populated in the form. 

Note: If you have custom url 2 set, but not custom url 1 (for example), the options for custom url 2 will be hidden and url 1 shown on the options page (not on your site). Please use the custom urls sequentially to avoid this scenario. Eventually, I will introduce the ability to reorder the links, but this is at least 6-10 months out.

= How can I include a facebook like / twitter follow / youtube subscribe button in the frame? =

Simply go to the "action buttons" tab on the settings page and check the boxes for the buttons that you would like to show. Facebook like buttons do have the potential to increase your page load time though. This is an issue with the facebook SDK, not this plugin, and is present regardless of whether you include the facebook like button with this plugin or elsewhere.

= Where are the custom color scheme settings? =

Once you click on the "custom" color scheme option, all of the associated settings will appear. In general, options that are dependent on other options are hidden when they aren't available so that you don't need to read and scroll past them (creating a very convinient, user-friendly interface!).

= When I switched to a dynamic width mode I lost my border settings and can't find them... =

Because CSS borders can't be a percentage width, they will add a certain number of pixels to the width of the frame even if the frame has a percentage width. To avoid this senario, borders are disabled in dynamic width mode, but frame shadows are still allowed to separate the frame from the page background.

= Link to facebook homepage? = 

I could envision a scenario where you might want to do this. Blank links are automatically hidden (as you will rarely want to do something like this), but you can put an 'index.php' or '/' in the facebook url field if you want the homepage.

== Screenshots ==
1. A collage of uses of the plugin on various sites with various settings to view more, higher-resolution screenshots. Wordpress requires all acreenshots displayed here to be included with the plugin in every installation, and I don't feel that it's right to make everyone store an extra few hundeed KB of files that are completely unnecessary once the plugin is installed.

== Changelog ==
= 1.0.0 =
Compatible with WordPress 3.5. Fixed two security vulnerabilities. Added option for improved minimum width rendering. Safe update from version 1.4.0 and higher. Visit options page after update if updating from an older version.
* Major Update, lots of bugfixes, new features, and enhancements, including a new built-in icon set!
* NEW FEATURES:
* When a visitor hides the frame on one page, it will remain hidden on every other page they visit on the site or if they refresh the page (if it is reopened, it will remain reopened, etc.). The preference for keeping the frame hidden is kept for one week as a cookie. For sites that start with the frame hidden, note that the frame will never be saved as being in the open position.
* The length of the cookie for remembering a hidden frame can be customized.
* Ability to prevent facebook like button from overflowing the frame contents (unfortunately, facebook is stubborn with their api and the only way to accomplish this is to make their width the minimmum possible for the frame, but the frame will still resize larger when using this option)
* Advanced/detailed options and options that are unavailable are now always hidden as necessary, making the overall user experience less cluttered and faster to use. Want more options? Click the appropriate links and the will be shown. Not using a custom color scheme? Those options won't be shown (a preliminary framework for this system has been in place for a while, but it is now fully implemented accross every options tab). The plugin will also remember your preferrences next time you visit the settings page, even if it's on a different computer.
* ENHANCEMENTS:
* Upgraded icon set allows full support for square corners on icons and the frame, a much more modern look which will fit better with most websites and is the new default.
* New, larger & dynamic width "X" icon for hiding the frame (much easier to hit on touch devices!)
* Added opacity/hover effect to the x and + icons to make them more blendable and less distracting (not available on non-html5/css3 browsers, as with rounded corners and shadows)
* Restructured html&css output for more streamlined spacing and padding around frame (again)
* New update mechanism that makes saving options faster (you still need to "save changes" after most updates though)
* Updated screenshots, which now include several examples of the plugin in use. If you want me to add yours with the next version, tell me please.!
* Confirmed compatibility with Wordpress 3.4.2
* BUGFIXES:
* Fixed bug with hiding advanced appearance options
* The frame is no longer hidden behind the wordpress "logged in toolbar", it's moved down the page accordingly instead; so you don't need to log out or use a different browser to set up vertical positioning! Please note that the animations for closing the frame will display differently without the admin toolbar.
* Fixed inconsistencies where certain themes could mess up the appearance of the frame.
* The most thuroughly tested and stable version yet!
