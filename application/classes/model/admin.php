<?php

defined('SYSPATH') or die('No direct script access.');

Class Model_Admin Extends Kohana_Model {
    public function update_settings($site_name, $site_description, $img_description) {
        
        return $query = DB::query(Database::UPDATE, 'UPDATE settings SET site_name = :site_name AND site_description = :site_description AND img_descr = :img_descr')
                ->parameters(array(
                    ':site_name' => $site_name,
                    ':site_description' => $site_description,
                    ':img_descr' => $img_description,
                    ))->execute();var_dump($query);
    }
    public function load_settings() {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM settings')->execute()->as_array();
    }

    public function check_us_pass($username, $parole) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM lietotaji WHERE lietotajvards = :username AND parole = :parole')
                        ->parameters(array(
                            ':username' => $username,
                            ':parole' => $parole,
                        ))->execute()->as_array();
    }

    public function load_articles() {
        return $qiery = DB::query(Database::SELECT, 'SELECT * FROM ieraksti ORDER BY id DESC')->execute()->as_array();
    }

    public function load_article($id) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM ieraksti WHERE id = :id')
                        ->parameters(array(
                            ':id' => $id
                        ))->execute()->as_array();
    }

    public function get_comment($id) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM komentari WHERE com_id = :id')
                        ->parameters(array(
                            ':id' => $id,
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

    public function update_comment($name, $text, $id) {
        return $query = DB::query(Database::UPDATE, 'UPDATE komentari SET name = :name, text = :text WHERE com_id = :id')
                        ->parameters(array(
                            ':name' => $name,
                            ':text' => $text,
                            ':id' => $id,
                        ))->execute();
    }

    public function get_commentaries() {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM komentari ORDER BY com_id DESC')->execute()->as_array();
    }

}

?>
