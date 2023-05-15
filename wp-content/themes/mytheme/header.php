<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= bloginfo('template_directory') ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= bloginfo('template_directory') ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= bloginfo('template_directory') ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= bloginfo('template_directory') ?>/assets/site.webmanifest">
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/assets/style.css" />
</head>

<body class="<?= body_class() ?>">
    <div class="container">

        <div class="sidebar">
            <div class="close">
                <i class="fa fa-times" style="color: #ffffff;"></i>
            </div>
            <h1><a href="<?= bloginfo('url') ?>"><?= get_bloginfo('name'); ?></a></h1>
            <ul>
                <?php
                $pages = new WP_Query(['post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC']);
                $pages = $pages->posts;
                ?>
                <?php foreach ($pages ?? [] as $page) : ?>
                    <li> <a href="<?= get_permalink($page) ?>"><?= $page->post_title ?></a></li>
                <?php endforeach ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
        <div class="content">
            <div class="hamburger">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
            </div>
            <form class="search-input" action="<?= bloginfo('url') ?>">
                <input type="text" name="s" value="" placeholder="Tìm kiếm...">
                <button><i class="fas fa-search"></i></button>
            </form>