<! DOCTYPE html>
<html>
    <head>
        <title><?php echo $page_title; ?> &mdash; <?php echo $site_title; ?></title>
        <link type="text/css" rel="stylesheet" href="/assets/css/new_theme.css" />
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
        <meta charset="UTF=8" />
    </head>
    <body>
        <div class="container">
            <img src="/assets/img/header.png"/>
            <header>
                <h2><?php echo $site_title; ?></h2>
                <div class="social_links">
                    <div class="social_link"><a href="http://twitter.com/#!/reGative" title="Mans Twitter akkaunts">Twitter</a></div>
                    <div class="social_link"><a href="http://facebook.com/reGative" title="Mans Feisbūks">Facebook</a></div>
                    <div class="social_link"><a href="http://about.me/reGative" title="Mana Ebaut.mī lapa">About.ME</a></div>
                </div>
            </header>
            <div class="content">
                <?php if(!empty($content)):
                    echo $content;
                endif;?>
            </div>
            
            <div style="clear:both"></div><div class="footer">
                &copy 2011. Dizains v2. Dzinis v1. Visu šo sviestu ir gatavojis viens cilvēks. Centās. :)
            </div>
        </div>
    </body>
</body>
</html>