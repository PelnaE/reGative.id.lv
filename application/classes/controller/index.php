<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public function action_index()
	{
            $pagination = Pagination::factory(array(
                'total_items' => Model::factory('index')->get_count(),
                'items_per_page' => 2,
                'view' => 'pagination/digg'
            ));
		$this->template->content = View::factory('index/index')
                        ->set('query', Model::factory('index')->get_articles($pagination->offset, $pagination->items_per_page))
                        ->set('pagination', $pagination->render());
	}


} // End Welcome
