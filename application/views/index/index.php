<?php
if (count($query) == 0):
    echo '<h3>Te nekā nav...</h3>';
    echo '<p>Vismaz pagaidām...</p>';
else:
    foreach ($query as $item):
        echo '<article><h2><a href="/article/' . $item['slug'] . '">' . $item['virsraksts'] . '</a></h2>';
        echo '<div class="raksta-dati">';
        echo '<img src="/assets/img/calendar.png" style="margin-top:6px; margin-right: 3px;" align="left" />'. date('d.m.Y H:i:s', $item['date']) . ',&nbsp;';
        ?>
        <img src="/assets/img/comments.png" style="margin-top:6px; margin-right: 3px;" align="top"/><a href="/article/<?php echo $item['slug']; ?>#disqus_thread" style="color:#444; text-decoration: none;"><?php echo $item['virsraksts']; ?></a>
        <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://regative.id.lv/article/<?=$item['slug']?>" data-text="<?=$item['virsraksts']?>" data-count="horizontal">Tweet</a>
    <iframe height="20" width="84" frameborder="0" src="http://www.draugiem.lv/say/ext/like.php?title=<?=$item['virsraksts']?>&amp;url=http://regative.id.lv/article/<?=$item['slug']?>&amp;titlePrefix=reGative.id.lv"></iframe>
        <?php
        echo '</div>';
        echo '<p>' . nl2br($item['saturs']) . '</p></article>';
    endforeach;
    echo $pagination;
endif;
?>