<?php get_header(); ?>
<section>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article id="post" >
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>