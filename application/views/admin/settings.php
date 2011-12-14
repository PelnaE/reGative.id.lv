<?php foreach ($settings as $setting): ?>
    <h2>Lapas uzstādījumi:</h2>
    <form action="/admin/settings/?do=update" method="post">
        Lapas nosaukums - <input type="text" name="site_name" value="<?=$setting['site_name']?>" /><br />
        Lapas paskaidrojums - <input type="text" name="site_description" value="<?=$setting['site_description']?>" /><br />
        Galvenes bildes paskaidrojums - <input type="text" name="img_descr" value="<?=$setting['img_descr']?>" /><br />
        <input type="submit" value="OK!" />
    </form>
<?php endforeach; ?>
