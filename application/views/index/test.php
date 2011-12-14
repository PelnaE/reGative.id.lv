<?php if(count($query) == 0): ?>
<article>
    <div style="float:left; width: 590px;">
        <h2>Te nekā nav</h2>
        <p>Vismaz pagaidām</p>
    </div>
    <div style="float:left; margin-left: 10px; width: 130px; border-left: 1px solid #ddd;">
        
    </div>
</article>
<?php else: ?>
<?php foreach($query as $raksta): ?>
<article>
    <div style="float:left; width: 590px;">
    <h2><?=$raksta['virsraksts'] ?></h2>
    <?=nl2br($raksta['saturs']) ?>
    </div>
    <div style="float:left; margin-left: 10px; width: 130px; border-left: 1px solid #ddd;">
        <img src="/assets/img/comments.png" style="margin-top:6px; margin-right: 3px;" align="top"/><a href="/article/<?=$raksta['slug']?>#disqus_thread" style="color:#444; text-decoration: none;"><?=$raksta['virsraksts']?></a>
        <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://regative.id.lv/article/<?=$raksta['slug']?>" data-text="<?=$raksta['virsraksts']?>" data-count="horizontal">Tweet</a>
    <iframe height="20" width="84" frameborder="0" src="http://www.draugiem.lv/say/ext/like.php?title=<?=$raksta['virsraksts']?>&amp;url=http://regative.id.lv/article/<?=$raksta['slug']?>&amp;titlePrefix=reGative.id.lv"></iframe>
    </div>
    <div style="clear:both"></div>
</article>
<?php endforeach; ?>
<?php endif;?>