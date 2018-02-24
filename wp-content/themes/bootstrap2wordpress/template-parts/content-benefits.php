<?php
$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body       = get_field('who_section_body');
?>
<!-- WHO BENEFITS
================================================== -->
<section id="who-benefits">
    <div class="container">

        <div class="section-header">

            <?php
            if (!empty($who_feature_image)) {
                ?>
                <img src="<?= $who_feature_image['url']; ?>" alt="<?= $who_feature_image['alt']; ?>">
                <?php
            }
            ?>
            <h2><?= $who_section_title; ?></h2>
        </div><!-- section-header -->

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?= $who_section_body; ?>
            </div><!-- end col -->
        </div><!-- row -->

    </div><!-- container -->
</section><!-- who-benefits -->