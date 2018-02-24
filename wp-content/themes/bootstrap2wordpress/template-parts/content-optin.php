<!-- OPT IN SECTION
================================================== -->
<section id="optin">
    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                <p class="lead"><?= get_post_meta($post->ID, 'optin_text', true) ?></p>
            </div><!-- end col -->

            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?= get_post_meta($post->ID, 'optin_button_text', true) ?>
                </button>
            </div><!-- end col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- optin -->