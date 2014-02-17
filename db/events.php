<?php

/**
 * TDM: Module modification notification.
 *
 * @author Luke Carrier <luke@tdm.co>
 * @copyright (c) 2014 The Development Manager Ltd
 */

defined('MOODLE_INTERNAL') || die;

$observers = array(

    /*
     * Course module created.
     */
    array(
        'eventname' => '\core\event\course_module_created',
        'callback'  => 'local_tdmmodnotify_observer::course_module_created',
    ),

    /*
     * Course module updated.
     */
    array(
        'eventname' => '\core\event\course_module_updated',
        'callback'  => 'local_tdmmodnotify_observer::course_module_updated',
    ),

);
