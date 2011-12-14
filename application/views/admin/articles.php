<?php 
if(!isset($_GET['a'])):
    foreach($articles as $article): ?>
<p class="article"><a href="/admin/articles/?a=<?php echo $article['id']; ?>"><?php echo $article['virsraksts']; ?></a></p>
<?php endforeach; 
else:?>
<?php foreach($article as $data):?>
<form action="/admin/submit_edit" method="post">
<input class="artcl_input" type="text" name="title" value="<?php echo $data['virsraksts']; ?>" /><br />
<input class="artcl_input" type="text" name="slug" value="<?php echo $data['slug']; ?>" /><br />
<input name="id" type="hidden" value="<?php echo $data['id']; ?>" />
<textarea name="text"><?php echo $data['saturs']; ?></textarea><br />
<input type="submit" class="submit" value="OK!" />
</form>
<?php endforeach; 
endif;?>

