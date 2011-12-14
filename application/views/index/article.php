<?php foreach ($slug as $article) : ?>
<article>
    <h2><?=$article['virsraksts']?></h2>
    <div class="raksta-dati"><?=date('d.m.Y H:i:s', $article['date']) ?> <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://regative.id.lv/article/<?=$article['slug']?>" data-text="<?=$article['virsraksts']?>" data-count="horizontal">Tweet</a>
    <iframe height="20" width="84" frameborder="0" src="http://www.draugiem.lv/say/ext/like.php?title=<?=$article['virsraksts']?>&amp;url=http://regative.id.lv/article/<?=$article['slug']?>&amp;titlePrefix=reGative.id.lv"></iframe></div>
    <p><?=nl2br($article['saturs']) ?></p>
</article>
<?php endforeach; ?>
<div class="comentari">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'regativeidlv'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script> 
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>

		</div>
