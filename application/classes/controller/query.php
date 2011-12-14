<?php

Class Controller_Query Extends Controller_Template{
        public function action_index()
        {
            if(!empty($_GET['search'])){
                $pagjinaacija= Pagination::factory(array(
                    'total_items' => Model::factory('index')->get_count_where($_GET['search']),
                    'items_per_page' => 2,
                    'auto_hide' => TRUE,
                ));
                $this->template->content = View::factory('index/query')
                        ->set('query', Model::factory('index')->get_articles_from_query($_GET['search'], $pagjinaacija->offset, $pagjinaacija->items_per_page))
                        ->set('pagjinaacija', $pagjinaacija->render());
            }
            else{
                $this->template->content = View::factory('index/error')->set('message', 'Nav rakstu ar šādu atslēgvārdu.');
            }
                
        }
  
}
