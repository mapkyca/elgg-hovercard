<?php

/**
 * Hovercards for Elgg.
 * 
 * Provides hovercard support for users, as well as library functions for hovering other things.
 * 
 * Uses hovercard.js, created by Prashant Chaudhary.
 * 
 * @licence GNU Public License version 2
 * @link https://github.com/mapkyca/elgg-hovercard
 * @link http://www.marcus-povey.co.uk
 * @link http://designwithpc.com/Plugins/Hovercard
 * @author Marcus Povey <marcus@marcus-povey.co.uk>
 */
	

elgg_register_event_handler('init', 'system', function() {
    
    // Load library
    elgg_register_js('hovercard', elgg_get_config('wwwroot').'mod/elgg-hovercard/vendor/jquery.hovercard.min.js');
    elgg_load_js('hovercard');
    
    // Add generic hovercard hooks
    elgg_extend_view('page/elements/foot', 'elgg-hovercard/ext/data-customcard');
    elgg_extend_view('page/elements/foot', 'elgg-hovercard/ext/data-twittercard');
    elgg_extend_view('page/elements/foot', 'elgg-hovercard/ext/data-facebookcard');
});