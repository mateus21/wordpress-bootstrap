<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="post-details">
                <i class="fa fa-user"></i> <?php the_author(); ?>
                <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
                <i class="fa fa-folder"></i> <?php the_category(', ') ?>
                <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>

                <div class="post-comments-badge">
                    <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%') ?></a>
                </div><!-- post-comments-badge -->
				<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i> ', ''); ?>
            </div><!-- post-details -->
			<?php
			//bootstrap2wordpress_posted_on();
			//bootstrap2wordpress_posted_by();
			?>
		<?php endif; ?>
    </header><!-- .entry-header -->

	<?php //bootstrap2wordpress_post_thumbnail(); ?>

	<?php
	if (has_post_thumbnail()) {
		?>
        <div class="post-image">
			<?php the_post_thumbnail(); ?>
        </div><!-- post-image -->
		<?php
	}
	?>

	<?php
	if ( is_singular() ) :
		?>
        <div class="post-body">
			<?php the_content(); ?>
        </div>
		<?php
	else :
		?>
        <div class="post-excerpt">
			<?php the_excerpt(); ?>
        </div><!-- post-excerpt -->
		<?php
	endif;
	?>

    <footer class="entry-footer">
		<?php bootstrap2wordpress_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
