<?php 
class filter_moodlefilterexample extends moodle_text_filter
{
    public function filter($text, array $options = array())
    {
        global $CFG;
        if (!isset($CFG->filter_moodlefilterexample_phrase))
        {
            set_config('filter_moodlefilterexample_phrase', get_string('phrase_default',
                'filter_moodlefilterexample'));
        }
        if (!isset($CFG->filter_moodlefilterexample_link))
        {
            set_config('filter_moodlefilterexample_link', get_string('link_default',
                'filter_moodlefilterexample'));
        }
        $searchphrase = $CFG->filter_moodlefilterexample_phrase;
        $starttag = '<a href="' . $CFG->filter_moodlefilterexample_link . '" target="_blank">';
        $endtag = '</a>';

        $filterobjects = array();
        $filterobjects[] = new filterobject($searchphrase, $starttag, $endtag);

        $text = filter_phrases($text, $filterobjects);

        return $text;
    }
}
