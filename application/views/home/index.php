<div class="forums">
<?php foreach($forums as $forum): ?>
    <?php if($forum['parent'] == 0):?>
    <div class="category"><?php echo $forum['name']; ?></div>
    <?php elseif($forum['parent'] != 0):?>
    <div class="subcategory"><?php echo $forum['name'] ;?></div>
    <?php endif; ?>
<?php endforeach; ?>
</div>