<?php get_header(); ?>
<h1 class="pageTitle"><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_01.png" alt="SCHEDULE / カレンダー" width="250" height="30"/></h1>

<div class="weekly">
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_txt_01.png" alt="" width="630" height="30"></p>
</div>
<div class="scheduleCol clearfix">
	<ul>
		<li>・・機材予約状況</li>
		<li>・・イベント</li>
		<li>・・機材・ソフトウェア講習会</li>
		<li>・・開館日</li>
		<li>・・休館日</li>
	</ul>
</div>
<div id='calendar'></div>
<section class="reservation">
	<h2><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_02.png" alt="" width="96" height="29"></h2>
	<ul class="l-wrapper clearfix">
		<li>
			<section>
				<h3><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_03.png" alt="機材を予約する" width="119" height="20"></h3>
				<p>①ご希望の機材・利用希望日時②会員番号をご記入の上、下の予約フォームよりご予約ください。メールアドレス（info[@]fablabdazaifu.com）電話（092-923-8223）でも予約ができます。機材の空き状況はカレンダーをご確認ください。</p><br>
				<p>【機材予約前のお願い】<br>
				・ご予約は翌週分まで承ります。<br>
				・休憩時間やデータ作成の時間を鑑みた上で、分割した予約などをお願いいたします。<br>
				・量産（同データの複数枚の加工）を目的とした長時間の利用は、予約時間数を制限させていただくことがございます。<br>
				<br>
				</p>
			</section>
		</li>
		<li>
			<section>
				<h3><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_05.png" alt="講習会を受講する" width="136" height="20"></h3>
				<p>講習会の日時をカレンダーでご確認の上、①ご希望の講習会・実施日時②会員番号③氏号をご記入の上、下の予約フォームよりご連絡ください。メールアドレス（info[@]fablabdazaifu.com）または電話（092-923-8223）でも予約ができます。ソフトウェア講習会に関しては随時実施しております、ご希望日時をご明記の上、フォームよりお問い合わせください。</p>
			</section>
		</li>
		<li>
			<section>
				<h3><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_04.png" alt="イベントに参加する" width="153" height="20"></h3>
				<p>イベント情報ページより各イベントの詳細をご確認いただけます。同ページ内の申し込みフォームよりお申し込みください。なお定員制のイベントはカレンダー上で予約状況をご確認いただけます。<a href="http://fablabdazaifu.com/event" class=button><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_txt_02.png" alt="イベント一覧" width="88" height="16"></a></p>
			</section>
		</li>
	</ul>
</section>
<section>
	<h2><img src="<?php echo get_template_directory_uri(); ?>/img/calendar/schedule_tit_06.png" alt="予約・お問い合わせフォーム" width="312" height="29" /></h2>

<?php echo do_shortcode('[contact-form-7 id="121" title="fablab form2"]'); ?>
	<section class="sec1">
	<ul class="atn">
		<li>※送信完了後受領完了の自動送信メールをお送りしております。その後当社スタッフより2〜3日以内にメールでご連絡させていただきます、万が一ご連絡がない場合はお手数ですが、<strong>092-923-8223（ファブラボ太宰府）【10:00～17:00（水〜土）】</strong>までご連絡くださいますよう、お願い申し上げます。</li>
		<li>※携帯電話のメールアドレスを設定のお客様は
		「メールの受信拒否、ドメイン指定受信、迷惑メール防止機能」などを設定している場合、受信ができない場合があります。</li>
	</ul>
	</section>
</section>
<?php get_footer(); ?>