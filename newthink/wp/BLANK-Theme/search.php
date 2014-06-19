<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php get_sidebar('first'); ?>
<?php get_sidebar('second'); ?>

<div id="mainContent">
			<div id="introTitle">
				<h2>Welcome to my Website</h2>
			</div>

			<p id="introParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, provident, cum, beatae deserunt doloribus esse eaque obcaecati qui aut dicta reprehenderit incidunt illum aliquid excepturi non inventore optio ratione deleniti.</p>

		<?php while (have_posts()) : the_post(); ?>



			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<div id="postLists">

				<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<div id="postLists">

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<p class="postExcerpt">
				<?php the_content(); ?>
			</p>

				</div>

			</div>

			</div>


		<?php endwhile; ?>

					</div>			

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>


<?php get_footer(); ?>
