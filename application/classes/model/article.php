<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Article Extends Kohana_Model{
    public function get_count(){
        return $query = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM ieraksti')->execute()->get('count');
        
    }
    public function get_articles($offset, $limit) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti ORDER By id DESC LIMIT :offset, :limit')
                ->parameters(array(':offset' => $offset, ':limit'=> $limit))->execute()->as_array();
    }
    public function get_article($nosaukums) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti WHERE slug = :nosaukums')
                ->parameters(array(':nosaukums' => $nosaukums))->execute()->as_array();
        
    }
    public function get_articles_from_query($squery, $offset, $limit){
       
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti WHERE virsraksts like :squery OR slug like :squery OR saturs like :squery ORDER By id DESC LIMIT :offset, :limit ')
                ->parameters(array(':squery' => "%$squery%", ':offset' => $offset, ':limit' => $limit))->execute()->as_array();
        
    }
    public function get_id($slug){
        
        return $query = DB::query(Database::SELECT, 'SELECT id FROM ieraksti WHERE slug = :slug')
                ->parameters(array(':slug' => $slug))->execute()->as_array();
    }
    public function get_count_where($key) {
        return $query = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM ieraksti WHERE virsraksts like :key OR slug like :key OR saturs like :key')->
                parameters(array(
                    ':key' => "%$key%",
                ))->execute()->get('count');
    }
}