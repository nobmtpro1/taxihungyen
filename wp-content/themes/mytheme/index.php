<?php global $post; ?>

<?php get_header() ?>
<div class="title-container">
    <h1><?= the_title() ?></h1>
</div>
<div class="para">
    <?= the_content() ?>
</div>
<?php get_footer() ?>