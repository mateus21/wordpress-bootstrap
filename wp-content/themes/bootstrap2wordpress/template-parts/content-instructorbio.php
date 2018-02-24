<?php
$instructor_title       = get_field('instructor_section_title');
$instructor_name        = get_field('instructor_name');
$instructor_excerpt     = get_field('bio_excerpt');
$instructor_full_bio    = get_field('full_bio');

$instructor_twitter     = get_field('twitter_username');
$instructor_facebook    = get_field('facebook_username');
$instructor_g_plus      = get_field('google_plus_username');

$instructor_num_students= get_field('num_students');
$instructor_num_review  = get_field('num_reviews');
$instructor_num_courses = get_field('num_courses');
?>
<!-- INSTRUCTOR
================================================== -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?= $instructor_title; ?> <small><?= $instructor_name; ?></small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4">

                        <?php if (!empty($instructor_twitter)) { ?>
                            <a href="https://twitter.com/<?= $instructor_twitter ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php
                        } ?>

                        <?php if (!empty($instructor_facebook)) { ?>
                            <a href="https://facebook.com/<?= $instructor_facebook ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php
                        }
                        ?>

                        <?php if (!empty($instructor_g_plus)) { ?>
                            <a href="https://plus.google.com/<?= $instructor_g_plus ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <?php
                        }
                        ?>

                    </div><!-- end col -->

                </div><!-- row -->

                <p class="lead"><?= $instructor_excerpt; ?><p>

                    <?= $instructor_full_bio; ?>
                <hr>

                <h3>The Numbers <small>They Don't Lie</small></h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $instructor_num_students; ?>+ <span>students</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $instructor_num_review; ?> <span>reviews</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $instructor_num_courses; ?> <span>courses</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->
                </div><!-- row -->

            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- instructor -->