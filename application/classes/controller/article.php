<?php

Class Controller_Article Extends Controller_Template {

    public function action_index() {
        session_start();
        if (!array_key_exists('token', $_SESSION)) {
            $_SESSION['token'] = rand();
        }

        $slug = $this->request->param('name'); //Mainīgais $slug tiek nodefinēts par 'name' parametru
        $mysql_respnse = Model::factory('index')->get_article($slug); //Meklē rakstu ar attiecīgu slug'u :D
        $id_get = Model::factory('index')->get_id($slug); //Šitais meklē pēc 'slug' raksta identifikācijas kodu
        if ($mysql_respnse) {

            $this->template->content = View::factory('index/article')//Definējam mainīgo content kā skatu index/article
                    ->set('slug', $mysql_respnse);
        } else {
            $this->template->content = View::factory('index/error')->set('message', 'Šāda raksta šeit nav!');
        }
    }

}
