<?php
if(count($query) == 0):?>
<h2>404. kļūdiņa...</h2>
<h4>Pēc atslēgvārda <i><?php echo $_GET['search']; ?></i> šeit nav neviena raksta</h4>
<?php
else:
    ?>
<h2>Meklēšanas rezultāti pēc vaicājuma <i><?php echo $_GET['search']; ?></i></h2>
<h4>Pēc atslēgvārda tika 
<?php 
if(count($query) == 1):
    ?>
    atrasts 1 ieraksts.
    <?php
else:
    ?>atrasti <?php echo count($query); ?> ieraksti<?php
endif;
?></h4>
<?php

    foreach ($query as $item):
   
        echo '<h2><a href="/article/' . $item['slug'] . '">' . $item['virsraksts'] . '</a></h2>';
        echo '<p>' . nl2br($item['saturs']) . '</p>';
   
    endforeach;
    
    endif;
    echo $pagjinaacija;
    
?>