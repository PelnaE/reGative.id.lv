<?php

Class Controller_Admin Extends Controller_atemplate {

    public function action_index() {
        session_start();
        if (!isset($_SESSION['username'])) {
            $this->template->content = View::factory('admin/login');
            if (!empty($_POST['username']) and !empty($_POST['password'])):
                $valide = Model::factory('admin')->check_us_pass($_POST['username'], md5($_POST['password']));
                if ($valide) {
                    $_SESSION['username'] = $_POST['username'];
                    ?>
                    <script type="text/javascript">
                        alert('Lietotājs veiksmīgi ienācis admin panelī. :>');
                    </script>
                    <meta http-equiv="REFRESH" content="0;url=/admin"/>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        alert('Pārbaudi, vai gadījumā neesi kaut kur ielaidis kļūdiņu. :>');
                    </script>
                    <meta http-equiv="REFRESH" content="0;url=/admin"/>
                    <?php
                }
            endif;
        } else {
            $this->template->content = View::factory('admin/main');
        }
    }

    public function action_logout() {
        session_start();
        session_destroy();
        ?><script type="text/javascript">
                    alert('Lietotājs veiksmīgi izlogots no admin paneļa. :>');
        </script>
        <meta http-equiv="REFRESH" content="0;url=http://127.0.0.1/admin"/>
        <?php
    }

    public function action_write() {
        session_start();
        if (!$_SESSION['username']) {
            ?>
            <script type="text/javascript">
                alert('Ielogojies, lai kaut ko šeit darītos. :)');
            </script>
            <meta http-equiv="REFRESH" content="0;url=/admin" />
            <?php
        } else {
            $this->template->content = View::factory('admin/write');
            if (!empty($_POST['virsraksts']) and !empty($_POST['slug']) and !empty($_POST['text'])) {
                $valide = Model::factory('admin')->check_if_article_exits($_POST['virsraksts'], $_POST['slug'], $_POST['text']);
                if (!$valide) {
                    Model::factory('admin')->send_article($_POST['virsraksts'], $_POST['slug'], $_POST['text']);
                } else {
                    ?><script type="text/javascript">
                                            alert('Džekiņ, pārbaudi, vai neesi jau kaut ko tādu rakstījis... :D')   ; 
                    </script><?php
                }
            }
        }
    }

    public function action_articles() {
        session_start();
        if (!$_SESSION['username']) {
            ?>
            <script type="text/javascript">
                alert('Ielogojies, lai kaut ko šeit darītos. :)');
            </script>
            <meta http-equiv="REFRESH" content="0;url=/admin" />
            <?php
        } else {
            if (!isset($_GET['a'])) {
                $this->template->content = View::factory('admin/articles')
                        ->set('articles', Model::factory('admin')->load_articles())
                        ->bind('article', $article);
            } else {

                $id = $_GET['a'];
                $this->template->content = View::factory('admin/articles')
                        ->set('article', Model::factory('admin')->load_article($id))
                        ->bind('articles', $articles);
            }
        }
    }

    public function action_submit_edit() {
        session_start();
        if (!$_SESSION['username']) {
            ?>
            <script type="text/javascript">
                alert('Ielogojies, lai kaut ko šeit darītos. :)');
            </script>
            <meta http-equiv="REFRESH" content="0;url=/admin" />
            <?php
        } elseif (!empty($_POST['title']) and !empty($_POST['slug']) and !empty($_POST['text']) and !empty($_POST['id'])) {
            $query = Model::factory('admin')->update_article($_POST['title'], $_POST['slug'], $_POST['text'], $_POST['id']);
            if (!$query) {

                $this->template->content = View::factory('admin/submit_error');
            } else {
                $this->template->content = View::factory('admin/submit_article');
            }
        } else {
            $this->template->content = View::factory('admin/bad');
        }
    }

    public function action_commentaries() {
        session_start();
        $this->template->content = View::factory('admin/commentaries')
                ->set('commentaries', Model::factory('admin')->get_commentaries());
        if (!isset($_GET['c'])) {
            $this->template->content = View::factory('admin/commentaries')
                    ->set('commentaries', Model::factory('admin')->get_commentaries())
                    ->bind('comment', $comment);
        } else {

            $id = $_GET['c'];
            $this->template->content = View::factory('admin/commentaries')
                    ->set('comment', Model::factory('admin')->get_comment($id))
                    ->bind('commentaries', $commentaries);
        }
    }

    public function action_submit_comment() {
        session_start();
        if (!empty($_POST['name']) and !empty($_POST['text'])) {
            $query = Model::factory('admin')->update_comment(mysql_real_escape_string($_POST['name']), mysql_real_escape_string($_POST['text']), $_POST['id']);
            if (!$query):
                $this->template->content = View::factory('admin/submit_error_c');

            else:
                $this->template->content = View::factory('admin/submit_comment');
            endif;
        }
        else {
            $this->template->content = View::factory('admin/bad');
        }
    }
    public function action_settings() {
        session_start();
        if(!isset($_SESSION['username'])):
            ?>
            <script type="text/javascript">
                alert('Ielogojies, lai kaut ko šeit darītos. :)');
            </script>
            <meta http-equiv="REFRESH" content="0;url=/admin" />
            <?php
            else:
                
                $this->template->content = View::factory('admin/settings')->
                    set('settings', Model::factory('admin')->load_settings());
                if(isset($_GET['do']) and $_GET['do'] == 'update'):
                    Model::factory('admin')->update_settings($_POST['site_name'], $_POST['site_description'], $_POST['img_descr']);
                endif;
        endif;
    }

}
