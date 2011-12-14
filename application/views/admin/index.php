<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/assets/style/admin.css" />
        <script type="text/javascript" src="/assets/plugins/tiny_mce/tiny_mce.js" ></script>
        <script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced"    //(n.b. no trailing comma, this will be critical as you experiment later)
});
</script>
        <title><?php echo $site_title; ?> - Admin Lapa</title>
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <div class="menu-item-first"><a href="/admin">Sākums</a></div>
                <div class="menu-item"><a href="/admin/write">Ievietot rakstu</a></div>
                <div class="menu-item"><a href="/admin/articles">Pārvaldīt rakstus</a></div>
                <div class="menu-item"><a href="/admin/logout">Izlogoties</a></div>
                <div class="menu-item"><a href="/admin/settings">Uztādījumi</a></div>
                <div style="clear:both"></div>
            </div>
            <div class="content">
                <?php 
                if(!empty($content)):
                    echo $content; 
                endif;?>
            </div>
        </div>

    </body>
</html>