<?php
function get_project($data)
{
    $project = @(new WP_Query([
        'post_type' => 'project',
        'p' => @$data['id']
    ]))->posts[0];
    $meta = get_post_meta($project->ID);
    $gallery = [];
    foreach (@$meta['gallery'] ?? [] as $image) {
        $gallery[] = @wp_get_attachment_image_src($image, 'full', false)[0];
    }
?>
    <div class="item-content">
        <div class="container">
            <h3><?= $project->post_title ?></h3>
            <div class="row">
                <div class="col-md-9">
                    <div class="slider">
                        <?php foreach ($gallery as $image) : ?>
                            <div><img class="slide-img" alt="Game play with Leap motion." src="<?= $image ?>" /></div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Project Details</h4>
                    <p><span class="field">Link:</span> <a target="__blank" href="<?= @$meta['link'][0] ?>"><?= @$meta['link'][0] ?></a> </p>
                    <p><span class="field">Client:</span> <?= @$meta['client'][0] ?></p>
                    <p><span class="field">Date:</span> <?= @$meta['date_complete'][0] ?></p>
                    <h4>Project Description</h4>
                    <p><?= @$meta['description'][0] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    $response = new WP_REST_Response('', 200);
    $response->header('Content-Type', 'text/html');
    return $response;
}

add_action('rest_api_init', function () {
    register_rest_route('project', '/project/(?P<id>\d+)', array(
        'methods'  => 'GET',
        'callback' => 'get_project',
    ));
});

?>