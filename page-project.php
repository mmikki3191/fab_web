<?php get_header(); ?>
<h1 class="pageTitle"><img src="<?php echo get_template_directory_uri(); ?>/img/project/pagetitle.gif" alt="PROJECT" /></h1>
<div class="projectArchiveWrap clearfix">
	<?php
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query('post_type=project' . '&paged=' . $paged . '&posts_per_page=-1');
	?>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		<article class="heCl clearfix">
			<p class="thumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> 詳細ページへ">
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail('eventThumb');
				}else {
					echo '<img src="' . get_bloginfo('template_directory') . '/img/project/noimg.png"' . ' alt="thumbnail" />';
				}; ?>
			</a></p>
			<div class="txtSet">
				<em><?php echo post_custom('category'); ?></em>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>詳細ページ"><?php the_title(); ?></a></h2>
				<strong><?php echo post_custom('enTitle'); ?></strong>
			</div><!-- txtSet END -->
		</article><!-- article.itemThumbBox END -->
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</div><!-- productArcWrap END -->

<?php get_footer(); ?>