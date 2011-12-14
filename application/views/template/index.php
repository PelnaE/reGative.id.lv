<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link style="margin:0" href="/assets/style/common.css" rel="stylesheet" type="text/css"/>
        <title><?php echo $site_title; ?></title>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18496828-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'regativeidlv'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
                var s = document.createElement('script'); s.async = true;
                s.type = 'text/javascript';
                s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
            }());
        </script>
        <div id="container">
            <div class="title"><?php echo $site_title; ?></div>
            <div class="subtitle"><?php echo $site_description; ?></div><div style="clear:both"></div>
            <header> 
            </header>
            <div class="menu-bar">
                <div class="menu-bar-item-first"><a href="/" title="Šī podziņa ved uz sākumu.">Sākums</a></div>
                <div class="menu-bar-item"><a href="/about" title="Kas tas ir un kas šeit notiekās?">Nedaudz par mani</a></div>
                <div class="menu-bar-item"><a href="http://twitter.com/#!/reGative" title="Burvju podziņa uz manu twiter. :)">Twitter</a></div>
                <div class="menu-bar-item-search" style="float:right"><form action="/query/" method="get"><input type="text" name="search" placeholder="Ievadi savu meklējamo šeit..." /></form></div><div style="clear:both"></div>
            </div>
            <div id="left-sidebar">
                <?php echo $content; ?>
            </div><div style="clear:both"></div>
            <div id="footer">
                <?php echo $footer; ?>
            </div>
        </div>
    </body>
</html>