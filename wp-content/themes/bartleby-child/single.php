<?php get_header(); ?>
<div class="row">
<div class="twelve columns">
<div class="single-article" role="main">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
<h1 id="post-<?php the_ID(); ?>" class="article-title">
<?php the_title(); ?>
</h1>
<section class="byline" role="contentinfo">
<span class="postinfo"><?php the_time('m/d/Y'); ?></span>
</section><!-- .byline -->
<section class="post-content">
<?php if ( has_post_thumbnail() ) { ?>
<div class="singlethumb">
<?php $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
the_post_thumbnail(); ?>
<?php $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
</div>
<?php } ?>
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-links">&after=</div>'); ?>
<div style="clear:both;"></div>
<hr>
<footer class="post-footer">
<p class="tag-links">
<?php the_tags(); ?>
</p>
<section class="article-nav" role="navigation">
<?php previous_post_link(); ?> - <?php next_post_link(); ?>
</section><!--End Article Navigation-->
<hr>
<?php do_action( 'before_widget' ); ?>
<?php if ( !dynamic_sidebar( 'belowposts-sidebar' ) ) : ?>
<?php endif; ?></footer>
</section><!-- .post-content -->
</article>
<?php endwhile; ?>
<?php comments_template(); ?>
<?php else : ?>
<h2 class="center"><?php esc_attr_e('Nothing is Here - Page Not Found', 'bartleby'); ?></h2>
<div class="entry-content">
<p><?php esc_attr_e( 'Sorry, but we couldn\'t find what you we\'re looking for.', 'bartleby' ); ?></p>
</div><!-- .entry-content -->
<?php endif; ?>
</div><!--End Single Article-->
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>