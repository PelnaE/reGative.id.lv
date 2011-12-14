<?php

defined('SYSPATH') or die('No direct script access.');

Class Model_User Extends Kohana_Model {
    

    public function check_us_pass($username, $parole) {
        return $query = DB::query(Database::SELECT, 'SELECT * FROM lietotaji WHERE lietotajvards = :username AND parole = :parole')
                        ->parameters(array(
                            ':username' => $username,
                            ':parole' => $parole,
                        ))->execute()->as_array();
    }


}

?>
