<!-- HERO
================================================== -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                </div><!-- col -->

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name') ?></h1>
                    <p class="lead"><?php bloginfo("description") ?></p>

                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                            <span><?= get_post_meta($post->ID, 'prelaunch_price', true); ?></span>
                        </div><!-- end price -->
                        <div class="price">
                            <h4>Launch Price <small>Coming soon!</small></h4>
                            <span><?= get_post_meta($post->ID, 'lauch_price', true); ?></span>
                        </div><!-- end price -->
                        <div class="price">
                            <h4>Final Price <small>Coming soon!</small></h4>
                            <span><?= get_post_meta($post->ID, 'final_price', true); ?></span>
                        </div><!-- end price -->
                    </div><!-- price-timeline -->

                    <p><a class="btn btn-lg btn-danger" href="<?= get_post_meta($post->ID, 'course_url', true); ?>" role="button"><?= get_post_meta($post->ID, 'button_text', true); ?></a></p>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- container -->
    </article>
</section>