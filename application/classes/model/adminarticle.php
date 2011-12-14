<?php

defined('SYSPATH') or die('No direct script access.');

Class Model_Adminarticle Extends Kohana_Model {

    public function load_articles() {
        return $qiery = DB::query(Database::SELECT, 'SELECT * FROM ieraksti ORDER BY id DESC')->execute()->as_array();
    }

    public function load_article($id) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti WHERE id = :id')
                        ->parameters(array(
                            ':id' => $id
                        ))->execute()->as_array();
    }
    public function send_article($title, $slug, $text) {
        return $query = DB::query(Database::INSERT, 'INSERT INTO ieraksti SET virsraksts = :title, slug = :slug, saturs = :text, date = :date')
                        ->parameters(array(
                            ':title' => $title,
                            ':slug' => $slug,
                            ':text' => $text,
                            ':date' => time(),
                        ))->execute();
    }

    public function check_if_article_exits($title, $slug, $text) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti WHERE virsraksts = :title OR slug = :slug OR saturs = :text')
                        ->parameters(array(
                            ':title' => $title,
                            ':slug' => $slug,
                            ':text' => $text,
                        ))->execute()->as_array();
    }

    public function update_article($title, $slug, $text, $id) {
        return $query = DB::query(Database::UPDATE, 'UPDATE ieraksti SET virsraksts = :title, slug = :slug, saturs = :text WHERE id = :id')
                        ->parameters(array(
                            ':title' => $title,
                            ':slug' => $slug,
                            ':text' => $text,
                            ':id' => $id,
                        ))->execute();
    }
}

?>
