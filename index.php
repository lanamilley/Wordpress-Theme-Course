<?php 

	/**
	 * Output header (found in header.php) -- notes from Chris Maissan
	 */
	get_header(); 

?>

<?php 

	/**
	 * Output sidebar (found in sidebar.php) -- notes from Chris Maissan
	 */
	get_sidebar(); 

?>

<?php 

	/**
	 * Check if there is any content for this page -- notes from Chris Maissan
	 */
	if ( have_posts() ) :

		/**
		 * Output each post one at a time
		 * This is referred to as "The Loop" -- notes from Chris Maissan
		 */
		while ( have_posts() ) :

			/**
			 * Load the next post -- notes from Chris Maissan
			 */
			the_post(); ?>

			

			<article>
			
				<h1 class="multiple-post-header"><a class="permalink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_title(); ?></a></h1>

				<div class="content">
					<?php the_content(); ?>
				</div>

				<!-- displaying posts in same category using next/prev post functions -->
				<div id="previous">
				<?php previous_post_link($format='&laquo %link', $link=' previous post', $in_same_cat = true); ?>
				</div><div id="next">
				<?php next_post_link($format='&laquo %link', $link='next post ', $in_same_cat = true); ?>
				</div>



			</article>

		<?php 

		/**
		 * End of "The Loop" -- notes from Chris Maissan
		 */
		endwhile; 

	?>



                        


<?php 

	/**
	 * No content was found
	 */
	else: 

?>

	<strong>No posts found.</strong>

<?php 

	endif; 

?>

<?php 

	/**
	 * Output footer (found in footer.php)
	 */
	get_footer(); 

?>