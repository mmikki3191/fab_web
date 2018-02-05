<?php get_header(); ?>
<h1 class="pageTitle"><img src="<?php echo get_template_directory_uri(); ?>/img/event/pagetitle.gif" alt="EVENT" /></h1>
<div class="eventWrap clearfix">
	<?php
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query('post_type=event' . '&paged=' . $paged . '&posts_per_page=-1');
	?>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		<article class="heCl clearfix <?php if(post_custom('now') === '開催中'): ?>openEvent<?php elseif(post_custom('now') === '開催終了'): ?>closeEvent<?php endif; ?>">
			<p class="thumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail('indexEventThumb', array('class' => 'eventThumbnailImg')); //original : eventThumb
				}else {
					echo '<img src="' . get_bloginfo('template_directory') . '/img/shop/noimg.png"' . ' alt="thumbnail" />';
			}; ?></a>

			<em class="<?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->slug . ' ';} ?>"><?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->name . ' ';} ?></em>
			<?php if(post_custom('now') === '開催終了'): ?>
<!-- Finish文字位置の変更をしました．元に戻す時はstyleを消してください． -->
			<p class="finish" style="margin-top:-45px;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/event/finish.png" alt="FINISH" style="text-align:left"/></p><?php endif; ?>
			</p>
			<div class="fR">
				<?php if(post_custom('enTitle') != ''): ?><strong class="enTitle"><?php echo post_custom('enTitle'); ?></strong><?php endif; ?>
				<?php if(post_custom('copy') != ''): ?><h2 class="copy"><em><?php echo post_custom('copy'); ?></em></h2><?php endif; ?>
				<?php if(post_custom('now') === '開催終了'):?>
				<h3 class="title"><span class="titClose">FINISH</span><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>詳細ページへ"><?php the_title(); ?></a></strong></h3>
				<?php elseif(post_custom('now') != '開催終了'):?>
				<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>詳細ページへ"><?php the_title(); ?></a></h3>
				<?php endif; ?>
				<dl>
					<?php if(post_custom('day') != ''): ?><dt>DAY</dt>
					<dd><?php echo post_custom('day'); ?></dd><?php endif; ?>
					<?php if(post_custom('price') != ''): ?><dt>PRICE</dt>
					<dd <?php if(post_custom('price') === '無料'): ?>class="yen0"<?php endif; ?>><?php echo post_custom('price'); ?> <?php if(post_custom('price') != '無料'): ?>yen<?php endif; ?></dd><?php endif; ?>
				</dl>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
		</article><!-- article.itemThumbBox END -->
	<?php endwhile; ?>	
</div><!-- productArcWrap END -->
<?php get_footer(); ?>