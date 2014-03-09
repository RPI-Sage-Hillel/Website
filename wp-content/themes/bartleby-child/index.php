<?php get_header(); ?>
<?php global $bartleby_options;
$bartleby_settings = get_option( 'bartleby_options', $bartleby_options );
?>
<?php if ( $bartleby_settings['home_headline'] !='' && is_home() && !is_paged() ) { ?>
<div class="row header-row" style="background-image: url('<?php echo $bartleby_settings['home_header_image'] ?>');">
<div class="sixteen columns">
<h1 class="big-headline">
<?php echo $bartleby_settings['home_headline']; ?>
</h1>
<p class="subtext">The primier Jewish student group in New York State</p>
<p class="lead-description">Holoucost Memorial at RPI</p>
</div>
</div>
<?php } ?>
<?php if( $bartleby_settings['column_posts']) : ?>
<div class="row">
<div class="sixteen columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="eight columns">
<div class="column-post">
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<h5 class="latest-title">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h5>
<div class="bartleby-excerpt">
<?php the_excerpt(); ?>
</div>
</article>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
<?php endif; ?>
<div class="row">
<div class="ten columns centered">
<section id="post-nav">
<?php posts_nav_link(); ?>
</section><!--End Navigation-->
</div>
</div>
<?php else: ?>
<div class="row">
<div class="sixteen columns">
<div class="twelve columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<h5 class="latest-title">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h5>
<?php the_excerpt(); ?>
</article>
<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php endif; ?>
<div class="row">
<div class="ten columns centered">
<section id="post-nav" role="navigation">
<?php posts_nav_link(); ?>
</section><!--End Navigation-->
</div>
</div>
<?php endif; ?>
	<div class="row">
			<div class="four columns">
				<img class="market-icon" src ="img/calendar-icon.png" alt="Calendar Icon">
				<h3><a href="jlife#prosStudents">Calendar</a></h3>
					<p>Interested in what genius events RPI-Sage Hillel is coming up with?</p>
					<p><a class="btn" href="jlife#calendar">Check out our calendar &raquo;</a></p>
			</div>
			<div class="four columns">
					<img class="market-icon" src ="img/Israel.png" alt="Suport Israel Icon">
					<h3><a href="jlife#israel">Israeli Culture</a></h3>
					<p>RPI Hillel values Israeli cutlure and history and we maximize this exposure through integrating it into our events and religious life.</p>
					<p><a class="btn" href="http://localhost/wordpress/?page_id=67">Learn More &raquo;</a></p>
			</div>
	</div>
<?php get_footer(); ?>