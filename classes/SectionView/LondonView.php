<?php

namespace MySociety\TheyWorkForYou\SectionView;

class LondonView extends SectionView {
    public $major = 9;
    protected $class = 'LMQLIST';

    protected function front_content() {
        return $this->list->display('recent_wrans', array('days'=>30, 'num'=>20), 'none');
    }

    protected function getViewUrls() {
        $urls = array();
        $day = new \MySociety\TheyWorkForYou\Url('lmqs');
        $urls['lmqsday'] = $day;
        $urls['day'] = $day;
        return $urls;
    }

    protected function getSearchSections() {
        return array(
            array( 'section' => 'lmqs', 'title' => 'Mayoral Questions' )
        );
    }
}
