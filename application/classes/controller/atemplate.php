<?php defined('SYSPATH') or die('No direct script access.');
Class Controller_Atemplate Extends Kohana_Controller_Template{
    public $template = 'admin/index';
    public function before() {
        parent::before();
        $config = Kohana::$config->load('common');
        $this->template
                ->set('site_title', $config->site_title);
    }
}
