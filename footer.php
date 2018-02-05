	</div><!-- mainContents END -->
	<footer class="clearfix">
		<div class="ftrL">
			<p class="btnPageTop"><a href="#wrapper" title="ページの先頭へ戻る"><img src="<?php echo get_template_directory_uri(); ?>/img/share/top_button.gif" alt="ページの先頭へ戻る"></a></p>
			<strong>ファブラボ太宰府（Fablab DAZAIFU）</strong>
			<address>福岡県太宰府市都府楼南2-19-30　株式会社イーケイジャパン内</address>
			<span>092-923-8223<br />
			10:00～17:00（不定休）</span>
			<small>&copy; FABLAB DAZAIFU ALL RIGHTS RESERVED.</small>
		</div>
		<div class="ftrR clearfix">
			<ul class="footerNavi">
				<li><a href="<?php bloginfo('url'); ?>/photogallery"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav1.png" alt="フォトギャラリー" width="120" height="18" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/archives/2490"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav2.png" alt="リクルート" width="75" height="18" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/privacy"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav3.png" alt="プライバシーポリシー" width="150" height="18"/></a></li>
				<li><a href="<?php bloginfo('url'); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav4.png" alt="Q&amp;A" width="32" height="18" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/link"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav5.png" alt="リンク" width="45" height="18"/></a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/img/share/fnav6.png" alt="お問い合わせ" width="90" height="18"/></a></li>
			</ul>
			<p><em>produced by </em><strong><a href="http://www.gooday.co.jp" target="_blank" title="グッデイ"><img src="<?php echo get_template_directory_uri(); ?>/img/share/gooday_logo.gif" alt="gooday"></a></strong></p>
			<ul class="clearfix">
				<li class="ggl"><a href="#" title=""><g:plusone size="medium"></g:plusone></a></li>
				<li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
				<li class="fb"><div class="fb-like" data-href="http://fablabdazaifu.com" data-width="120" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>

			</ul>
		</div>
	</footer>
</div><!-- wrapper END -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script>
<?php if(is_page('fablabdazaifu') || is_page('facilities') || is_page('contact') || is_page('project') || is_page('price')): ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20130801/jquery.cycle2.min.js"></script>
<?php endif; ?>
<?php if(is_page('faq')): ?>
<script>
    $(function(){
        $(".faqCont dt").on("click", function() {
            $(this).next().slideToggle( 200, "easeOutQuart");
        });
    });
</script>
<?php endif; ?>
<?php if(is_page('top')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js" ></script>
<?php endif; ?>
<?php if(is_page('beginner')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js" ></script>
<script>
$("#slide-01").slider({
time: 20,
pause: false,
easing: "linear"
});
</script>
<?php endif; ?>
<?php if(is_page('project') || 'project' == get_post_type()): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script>$(".projectArchiveWrap>article").matchHeight();</script>
<?php endif; ?>
<?php if(is_page('calendar')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>

<!-- <link href='<?php echo get_template_directory_uri(); ?>/js/fullcalendar.css' rel='stylesheet' /> -->
<!-- <link href='<?php echo get_template_directory_uri(); ?>/js/fullcalendar.print.css' rel='stylesheet' media='print' /> -->
<script src='<?php echo get_template_directory_uri(); ?>/js/fullcalendar.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/gcal.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/fablabcalendar.js'></script>


<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/init.js" ></script>
<?php if(is_page('facilities') || is_page('beginner') || is_page('access')): ?>
<script type="text/javascript" charset="utf-8" src="http://maps.googleapis.com/maps/api/js?&sensor=false"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/gmap.js"></script>
<?php endif; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51330872-1', 'fablabdazaifu.com');
  ga('send', 'pageview');

</script>
</body>
</html>
