<?php get_header() ?>
<div class="title-container">
    <h1>Tìm Kiếm</h1>
</div>
<div class="search-results">
    <?php

    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <a href="<?= get_permalink(the_post()) ?>" class="result">
                <h2><?php the_title(); ?></h2>
                <p><?= get_the_excerpt()  ?></p>
            </a>
        <?php
        endwhile;
    else :
        ?>
        <div>Không tìm thấy kết quả</div>
    <?php
    endif; ?>



</div>

<?php get_footer() ?>