<?php

/**
 * Simple Debug Tool for Elgg
 * Provides basic information about elgg in an easily viewable form.
 *
 * @licence GNU Public License version 2
 * @link https://github.com/mapkyca/elgg-statsd
 * @link http://www.marcus-povey.co.uk
 * @author Marcus Povey <marcus@marcus-povey.co.uk>
 */
elgg_register_event_handler('init', 'system', function() {
    global $CONFIG;
    
    if ($CONFIG->debug)
            elgg_extend_view('page/default', 'simple-debug/debug');
});