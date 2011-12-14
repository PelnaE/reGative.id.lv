<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_name; ?> || <?php echo $site_description; ?> || <?php echo $page_name; ?></title>
</head>
<body>
        <?php if(isset($content)): ?>
    <?php echo $content; ?>
    <?php endif; ?>
    
</body>
</html>
