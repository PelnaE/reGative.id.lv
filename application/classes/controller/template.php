<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

    public $template = 'template/index';

    public function before() {
        parent::before();
        $setting = Kohana::$config->load('common');
        $this->template
                ->set('site_title', $setting['site_title'])
                ->set('img_descr', $setting['img_descr'])
                ->set('site_description', $setting['site_description'])
                ->set('footer', View::factory('template/footer'));
    }

}

// End Welcome
