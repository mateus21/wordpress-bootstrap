<?php
$project_feature_title  = get_field('project_feature_title');
$project_feature_body   = get_field('project_feature_body');
?>
<!-- PROJECT FEATURES
================================================== -->
<section id="project-features">
    <div class="container">

        <h2><?= $project_feature_title; ?></h2>
        <p class="lead"><?= $project_feature_body; ?></p>

        <?php
        $loop = new WP_Query(array(
            'post_type' => 'project_feature',
            'order_by' => 'post_id',
            'order' => 'ASC'
        ));
        ?>
        <div class="row">
            <?php

            while ($loop->have_posts()) {
                $loop->the_post();

                ?>
                <div class="col-sm-4">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div><!-- col -->

                <?php
            }
            wp_reset_query();
            ?>
        </div>

    </div><!-- container -->
</section><!-- project-features -->