<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('about/index');
	}

} // End Welcom