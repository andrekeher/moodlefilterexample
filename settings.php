<?php 
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree)
{
    $settings->add(new admin_setting_configtext('filter_moodlefilterexample_phrase',
        get_string('phrase', 'filter_moodlefilterexample'), get_string('phrase_config',
        'filter_moodlefilterexample'), get_string('phrase_default', 'filter_moodlefilterexample')));
    $settings->add(new admin_setting_configtext('filter_moodlefilterexample_link',
        get_string('link', 'filter_moodlefilterexample'), get_string('link_config',
        'filter_moodlefilterexample'), get_string('link_default', 'filter_moodlefilterexample')));
}
