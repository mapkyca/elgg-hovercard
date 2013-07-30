Elgg Hovercards
===============

This is an Elgg 1.8 plugin which provides Hovercard support via Prashant Chaudhary's hovercard.js <http://designwithpc.com/Plugins/Hovercard>.

Plugin was created by Marcus Povey <http://www.marcus-povey.co.uk>

Installation
------------

* Install into /mod/elgg-hovercard
* Activate through your plugin's menu

Usage
-----

Out of the box the plugin provides a hovercard on (most) occurrances of a user name. It does this by overriding the user object view, as well as a number of river views, and using the data-hovercard hook to make reference to a new "hovercard" template view of the object.

This works well, but if you have a custom theme you may need to do some modifications. Additionally, if you want to add your own custom hovercard types you'll need to add your own extensions in a similar way.

See
---
* Marcus Povey <http://www.marcus-povey.co.uk>
* Hovercard.js <https://github.com/prashantchaudhary/hovercard>

