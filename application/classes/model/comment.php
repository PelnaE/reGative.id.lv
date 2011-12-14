<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Comment Extends Kohana_Model{
    
    public function get_comment_count($article) {
        return $query = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM komentari WHERE artcl_id = :article')
                ->parameters(array(
                    ':article' => $article,
                    ))->execute()->get('count');
    }
    public function update_comment_count($id) {
        return $query = DB::query(Database::UPDATE, 'UPDATE ieraksti SET komentaru_skaits = komentaru_skaits+1 WHERE id = :id')
                ->parameters(array(
                    ':id' => $id,
                ))->execute();
    }
}