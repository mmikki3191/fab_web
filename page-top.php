<?php get_header(); ?>

<?php
$img1 = wp_get_attachment_image_src(post_custom('img1'),'large' );
$img2 = wp_get_attachment_image_src(post_custom('img2'),'large' );
$img3 = wp_get_attachment_image_src(post_custom('img3'),'large' );
$img4 = wp_get_attachment_image_src(post_custom('img4'),'large' );
$img5 = wp_get_attachment_image_src(post_custom('img5'),'large' );
?>
<div id="slider">
<ul class="clearfix">
<!-- 	<li><a href="<?php bloginfo('url'); ?>/beginner" title="初めての方へ"><img src="<?php echo get_template_directory_uri(); ?>/img/index/img_slide_beginner.jpg" alt="初めての方へ" width="840" height="559" /></a></li> -->
	<?php if ( get_post_meta($post->ID,'img1',TRUE) ): ?>
	<li><a href="<?php echo post_custom('url1'); ?>" title="<?php echo post_custom('titEn1'); ?>"><img src="<?php echo $img1[0]; ?>" alt="<?php echo post_custom('titEn1'); ?>" width="840" height="559" /></a>
	<?php if(post_custom('titEn1') != ''): ?><p><strong class="enCopy slideBgColor1"><a href="<?php echo post_custom('url1'); ?>" title="<?php echo post_custom('titEn1'); ?>"><span><?php echo post_custom('titEn1'); ?></span></a></strong>
	<strong class="jpCopy"><a href="<?php echo post_custom('url1'); ?>" title="<?php echo post_custom('titJp1'); ?>"><em class=" slideBgColor1"><?php echo post_custom('titJp1'); ?></em></a></strong></p><?php endif; ?></li>
	<?php endif; ?>

	<?php if ( get_post_meta($post->ID,'img2',TRUE) ): ?>
	<li><a href="<?php echo post_custom('url2'); ?>" title="<?php echo post_custom('titEn2'); ?>"><img src="<?php echo $img2[0]; ?>" alt="<?php echo post_custom('titEn2'); ?>" width="840" height="559" /></a>
	<?php if(post_custom('titEn2') != ''): ?><p><strong class="enCopy slideBgColor2"><a href="<?php echo post_custom('url2'); ?>" title="<?php echo post_custom('titEn2'); ?>"><span><?php echo post_custom('titEn2'); ?></span></a></strong>
	<strong class="jpCopy"><a href="<?php echo post_custom('url2'); ?>" title="<?php echo post_custom('titJp2'); ?>"><em class=" slideBgColor2"><?php echo post_custom('titJp2'); ?></em></a></strong></p><?php endif; ?></li>
	<?php endif; ?>

	<?php if ( get_post_meta($post->ID,'img3',TRUE) ): ?>
	<li><a href="<?php echo post_custom('url3'); ?>" title="<?php echo post_custom('titEn3'); ?>"><img src="<?php echo $img3[0]; ?>" alt="<?php echo post_custom('titEn3'); ?>" width="840" height="559" /></a>
	<?php if(post_custom('titEn3') != ''): ?><p><strong class="enCopy slideBgColor3"><a href="<?php echo post_custom('url3'); ?>" title="<?php echo post_custom('titEn3'); ?>"><span><?php echo post_custom('titEn3'); ?></span></a></strong>
	<strong class="jpCopy"><a href="<?php echo post_custom('url3'); ?>" title="<?php echo post_custom('titJp3'); ?>"><em class=" slideBgColor3"><?php echo post_custom('titJp3'); ?></em></a></strong></p><?php endif; ?></li>
	<?php endif; ?>

	<?php if ( get_post_meta($post->ID,'img4',TRUE) ): ?>
	<li><a href="<?php echo post_custom('url4'); ?>" title="<?php echo post_custom('titEn4'); ?>"><img src="<?php echo $img4[0]; ?>" alt="<?php echo post_custom('titEn4'); ?>" width="840" height="559" /></a>
	<?php if(post_custom('titEn4') != ''): ?><p><strong class="enCopy slideBgColor4"><a href="<?php echo post_custom('url4'); ?>" title="<?php echo post_custom('titEn4'); ?>"><span><?php echo post_custom('titEn4'); ?></span></a></strong>
	<strong class="jpCopy"><a href="<?php echo post_custom('url4'); ?>" title="<?php echo post_custom('titJp4'); ?>"><em class=" slideBgColor4"><?php echo post_custom('titJp4'); ?></em></a></strong></p><?php endif; ?></li>
	<?php endif; ?>

	<?php if ( get_post_meta($post->ID,'img5',TRUE) ): ?>
	<li><a href="<?php echo post_custom('url5'); ?>" title="<?php echo post_custom('titEn5'); ?>"><img src="<?php echo $img5[0]; ?>" alt="<?php echo post_custom('titEn5'); ?>" width="840" height="559" /></a>
	<?php if(post_custom('titEn5') != ''): ?><p><strong class="enCopy slideBgColor5"><a href="<?php echo post_custom('url5'); ?>" title="<?php echo post_custom('titEn5'); ?>"><span><?php echo post_custom('titEn5'); ?></span></a></strong>
	<strong class="jpCopy"><a href="<?php echo post_custom('url5'); ?>" title="<?php echo post_custom('titJp5'); ?>"><em class=" slideBgColor5"><?php echo post_custom('titJp5'); ?></em></a></strong></p><?php endif; ?></li>
	<?php endif; ?>
</ul>
<p id="prev"><a href="javascript:void(0)" id="prevBtn" title="前のスライドへ"><img src="<?php echo get_template_directory_uri(); ?>/img/index/prev.png" alt="前のスライドへ" /></a></p>
<p id="next"><a href="javascript:void(0)" id="nextBtn" title="次のスライドへ"><img src="<?php echo get_template_directory_uri(); ?>/img/index/next.png" alt="次のスライドへ" /></a></p>
</div><!-- slider END -->
<div class="bannarList">
	<ul class="clearfix">
		<li><a href="http://fablabdazaifu.com/archives/event/%E3%83%95%E3%82%A1%E3%83%96%E3%83%A9%E3%83%9C%E5%A4%AA%E5%AE%B0%E5%BA%9C%E8%A6%8B%E5%AD%A6%E3%83%84%E3%82%A2%E3%83%BC"><img src="<?php echo get_template_directory_uri(); ?>/img/index/top_bannar_01.png" alt=""></a></li>
		<li><a href="http://fablabdazaifu.com/howtouse"><img src="<?php echo get_template_directory_uri(); ?>/img/index/top_bannar_02.png" alt=""></a></li>
		<li><a href="http://fablabdazaifu.com/fablabdazaifu"><img src="<?php echo get_template_directory_uri(); ?>/img/index/top_bannar_03.png" alt=""></a></li>
		<li><a href="http://fablabdazaifu.com/event"><img src="<?php echo get_template_directory_uri(); ?>/img/index/top_bannar_04.png" alt=""></a></li>
	</ul>
</div>
<!-- ~~~~~~~~~~~~~~~~from here event info~~~~~~~~~~~~~~~~~ -->

<section class="eventInfo">
	<h1 class="chapter"><img src="http://fablabdazaifu.com/wp/wp-content/uploads/2015/10/event.gif" alt="イベントのお知らせ" /></h1>
	<ul class="secNav">
		<li><a href="<?php bloginfo('url'); ?>/event" title="イベント一覧">イベント一覧</a></li>
	</ul><!-- secNav END -->
	<div class="clearfix">
<?php
$toplist = array(
    'post_type' => array('event'),
    'orderby'        => 'date',
    'showposts' => 4
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>
			<article class="heCl">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('indexEventThumb');
					}else {
						echo '<img src="' . get_bloginfo('template_directory') . '/img/index/noimg_event.jpg"' . ' alt="イベント画像" />';
					}; ?>
					<?php  ?>
				</a>
				<em class="<?php if(post_custom('category') != ''): ?>categoryColor<?php endif; ?><?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->slug . ' ';} ?>"><?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->name . ' ';} ?><?php if(post_custom('category') != ''): ?><span class="categoryColor"><?php echo post_custom('category'); ?></span><?php endif; ?></em>
				<strong><a href="<?php the_permalink(); ?>" title="タングラムワークショップ"><?php the_title(); ?></a></strong>
				<?php if(post_custom('day') != ''): ?><span class="day"><?php echo post_custom('day'); ?></span><?php endif; ?>
				<?php if(post_custom('price') != ''): ?><span class="price"><?php echo post_custom('price'); ?> yen</span><?php endif; ?>
				<?php if(post_custom('enTitle') != ''): ?><span class="enTitle"><?php echo post_custom('enTitle'); ?></span><?php endif; ?>
			</article><!-- article.itemThumbBox END -->
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
	</div>
</section>

<!-- event info -->

<section class="eventInfo">
	<h1 class="chapter"><img src="http://fablabdazaifu.com/wp/wp-content/uploads/2015/10/project.gif" alt="プロジェクトのお知らせ" /></h1>
	<ul class="secNav">
		<li><a href="<?php bloginfo('url'); ?>/project" title="プロジェクト一覧">プロジェクト一覧</a></li>
	</ul><!-- secNav END -->
	<div class="clearfix">
<?php
$toplist = array(
    'post_type' => array('project'),
    'orderby'        => 'date',
    'showposts' => 4
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>
			<article class="heCl">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('indexEventThumb');
					}else {
						echo '<img src="' . get_bloginfo('template_directory') . '/img/index/noimg_event.jpg"' . ' alt="イベント画像" />';
					}; ?>
					<?php  ?>
				</a>
				<em class="<?php if(post_custom('category') != ''): ?>categoryColor<?php endif; ?><?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->slug . ' ';} ?>"><?php $terms = wp_get_object_terms($post->ID,'event_category'); foreach($terms as $term){echo $term->name . ' ';} ?><?php if(post_custom('category') != ''): ?><span class="categoryColor"><?php echo post_custom('category'); ?></span><?php endif; ?></em>
				<strong><a href="<?php the_permalink(); ?>" title="タングラムワークショップ"><?php the_title(); ?></a></strong>
				<?php if(post_custom('day') != ''): ?><span class="day"><?php echo post_custom('day'); ?></span><?php endif; ?>
				<?php if(post_custom('price') != ''): ?><span class="price"><?php echo post_custom('price'); ?> yen</span><?php endif; ?>
				<?php if(post_custom('enTitle') != ''): ?><span class="enTitle"><?php echo post_custom('enTitle'); ?></span><?php endif; ?>
			</article><!-- article.itemThumbBox END -->
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
	</div>
</section>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~end~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<div class="blogFbWrap clearfix">
	<div class="blogWrap">
		<h1 class="chapter"><a href="<?php bloginfo('url'); ?>/blog" title="blog"><img src="<?php echo get_template_directory_uri(); ?>/img/index/tit2.gif" alt="blog" /></a></h1>
		<ul class="secNav">
			<li><a href="<?php bloginfo('url'); ?>/blog" title="ブログ一覧">ブログ一覧</a></li>
		</ul><!-- secNav END -->

		<?php
		$posts = get_posts('numberposts=6');
		global $post;
		if($posts): foreach($posts as $post): setup_postdata($post); ?>
		<article class="clearfix">
			<p class="thumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail('indexThumb');
			}else {
				echo '<img src="' . get_bloginfo('template_directory') . '/img/index/noimg_blog.jpg"' . ' alt="ブログ画像" />';
			}; ?>
			</a></p>
			<div class="fR">
				<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>詳細ページへ"><?php the_title(); ?></a></strong>
				<em><?php echo date("Y.m.d", strtotime($post->post_date)); ?></em>
			</div>
		</article>
		<?php endforeach; endif;?>
		<?php wp_reset_query(); ?>

	</div><!-- blogWrap END -->
	<div class="facebook">
		<div class="fb-like-box" data-href="https://www.facebook.com/fablabdazaifu" data-width="336" data-height="346" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
	</div><!-- facebook END -->
</div><!-- blogFbWrap END -->
<!-- <p class="btnBeginner"><a href="/beginner" target="_blank" title="fablab太宰府が初めての方へ"><img src="/img/index/btn_beginner.png" alt="fablab太宰府が初めての方へ" /></a></p> -->
<?php get_footer(); ?>
