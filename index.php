
<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		
		<title>One Dining Table FES. 3・2・1・いただきます。</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css?<?php echo date('Ymd'); ?>" rel="stylesheet" type="text/css">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">

		
		<?php wp_head(); ?>
	</head>
<body>
		<div id="full_screen">
			<div id="iframe_player_api"></div>
			<span id="close_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png" width="60" alt="×" /></span>
		</div>

	<header id="header" class="flex">
		<nav>
			<ul class="gnav">
				<li>
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">TOP</a>
				</li>
				<li>
					<a href="/#about"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">ABOUT</a>
				</li>
				<li>
					<a href="/#concept"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">CONCEPT</a>
				</li>
				<li>
					<a href="/#who"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">WHO WE ARE</a>
				</li>
				<!-- <li>
					<a href="/#award"><img src="</?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">AWARD</a>
				</li>
				<li>
					<a href="/#stage"><img src="</?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">STAGE</a>
				</li>
				<li>
					<a href="/#workshop"><img src="</?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">WORKSHOP</a>
				</li> -->
				<li>
					<a href="/#contact"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">CONTACT</a>
				</li>
			</ul> 
		</nav>

		<div class="sns_line">
			<div class="sns_container">
				<div class="flex">
					<p>SHARE ON SNS</p>
					<span class="border"></span>
					<ul class="flex sns_list pc">
						<li>
							<a href="https://www.instagram.com/odt_fes/?next=%2F"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_white.svg" alt=""></a>
						</li>
						<li>
							<a href="https://twitter.com/odt321?s=21&t=Pn97SC0LzWZuY6nGPcsbJg"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_white.svg" alt=""></a>
						</li>
						<li>
							<a href="https://m.facebook.com/profile.php?id=100086227661770&_rdr"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_white.svg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /sns_line -->
	</header>

	<div id="toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>

<main>
	
	<div id="mv">
		<div class="flex">
			<div class="mv_left">
			</div>
			<div class="mv_right">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/mv_ttl2024-02.png" class="pc" alt="「いただきます」は楽しい。を知ってもらいたい！OneDiningTableFes">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mv_ttl_sp2024.png" class="sp" alt="「いただきます」は楽しい。を知ってもらいたい！OneDiningTableFes">
					<figcaption>
						<p>後援：名古屋市、名古屋市教育委員会、名古屋市社会福祉協議会</p>
						<p>協力：あいち子ども食堂ネットワーク、愛知子ども応援プロジェクト</p>
						<p>助成：篠原欣子記念財団こども食堂応援プロジェクト</p>
					</figcaption>
				</figure>
			</div>
		</div>

		<!-- <div class="mv_text">
			<h1>MORE ON COMING SOON...</h1>
			<p>詳しい情報はお楽しみに！</p>
		</div> -->
		<!-- //mv_text -->
	</div>
	<!-- //mv -->

	<div class="mv_under_image">
		<ul>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/mv_under_img.jpg" alt="" class="pc">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/mv_under_img_sp.jpg" alt="" class="sp">
			</li>
		</ul>

	</div>
	<!-- //mv_under_image -->

	<section id="about" class="bg trigger">
		<div class="container about_wrap">
			<h2 class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_ttl_sp.png" alt="" class="sp">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_ttl.png" alt="" class="pc">
				<span>One Dining Table FES.とは</span>
			</h2>

			<p class="pc box">
				<span>NPO法人One Dining Tableと有志によって開催されるイベントです。</span><br>
				<span>子どもはもちろん、大人も楽しめるお祭り・フェスとなっていくことを</span><br>
				<span>目指しています。</span>
			</p>

			<p class="sp box">
				<span>NPO法人One Dining Tableと</span>
				<span>有志によって開催されるイベントです。</span>
				<span>子どもはもちろん、大人も楽しめる</span>
				<span>お祭り・フェスとなっていくことを</span>
				<span>目指しています。</span>
			</p>

			<ul class="flex sns_list about_sns trigger">
				<li class="box">
					<a href="https://www.instagram.com/odt_fes/?next=%2F"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_white.svg" alt=""></a>
				</li>
				<li class="box">
					<a href="https://twitter.com/odt321?s=21&t=Pn97SC0LzWZuY6nGPcsbJg"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_white.svg" alt=""></a>
				</li>
				<li class="box">
					<a href="https://m.facebook.com/profile.php?id=100086227661770&_rdr"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_white.svg" alt=""></a>
				</li>
			</ul>

			<div class="movie_wrap">
				<a href="javascript:void(0);" youtube_id="rB0JAeX3gSg" style="cursor: pointer;" class="movie_item"><img src="<?php echo get_template_directory_uri(); ?>/images/odtf2023.png" loading="lazy"></a>
			</div>
		</div>

		
	</section>
	<!-- //about -->

	<section id="concept" class="sec trigger">
		<div class="container concept_wrap">
			<h2 class="sec_ttl anim_on2">
				<span>CONCEPT</span>
			</h2>

			<div class="arch_text pc anim_on2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/arch_pc.png" alt="">
			</div>
			<div class="arch_text sp anim_on2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/arch_sp.svg" alt="">
			</div>

			<div class="concept_text">
				<p class="anim_on2">
				食事をともにすると、<br class="sp">その人が分かる気がする。<br>
				いっしょのテーブルに座るだけで、<br class="sp">ぐっと心の距離が近くなる。<br>
				家族だから、恋人だから、友人だから、<br class="sp">知り合いだから？<br>
				テーブルを囲うハードルを上げずに、<br class="sp">気軽にいただきますしませんか？<br>
				ひとつのテーブルで食事をともにすれば、<br class="sp">もう仲良し。<br>
				食事は最高のコミュニケーションツール。<br>
				「いただきます」をきっかけに、<br>
				あなたに<br class="sp">素敵なはじまりがあることを願って。
				</p>

				<b class="anim_on2">いただきますって、<span>素敵</span>なことば。</b>
			</div>
			<!-- //concept_text -->
		</div>
		<!-- //container -->
	</section>
	<!-- //concept -->

	<div class="mv_under_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image01.jpg" alt="" class="pc">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image01_sp.jpg" alt="" class="sp">
	</div>
	<!-- /mv_under_image -->

	<section id="odt" class="sec">
		<div class="container">
			<div class="flex">
				<h2 class="anim_on3">
					<p>
						私たちが<br>
						取り組んでいる活動
					</p>

					<img src="<?php echo get_template_directory_uri(); ?>/images/npo_ttl_under.svg" alt="">
				</h2>

				<div class="odt_text">
					<p class="anim_on3">
						子どもの第3の居場所として食事の提供や学習支援を行う<br>
						「子ども食堂」活動を中心に定期的に地域と関わりを持ち続けています。<br>
						：だんらん食堂・ナナ子イロ食堂…
					</p>

					<p class="anim_on3">
						また、複数の子ども食堂が合同で地方での子ども食堂活動を行うなど<br>
						名古屋市外での活動を行っております。<br>
						：虹だんらん食堂（篠島）
					</p>

					<!-- <p class="anim_on3">
						０歳児から健康なお口作りを目指す、歯科医師による、「親子で参加する<br>
						授乳・離乳食セミナー」など、名古屋市での活動を中心に、出張やオンラ<br>
						インでのサポートを行っている団体です。
					</p> -->

					<!-- <a href="http://onediningtable.jp/" target="_blank" class="common_btn anim_on3">
						サイトを見る
						<img src="<//?php echo get_template_directory_uri(); ?>/images/blank_icon.svg" alt="">
					</a> -->
				</div>
			</div>
			<!-- //flex -->
		</div>
		<!-- //container -->
	</section>
	<!-- //odt -->

	<div class="mv_under_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image02.jpg" alt="" class="pc">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image02_sp.jpg" alt="" class="sp">
	</div>
	<!-- /mv_under_image -->

	<section id="kodomo" class="sec">
		<h2 class="anim_on4">
			<img src="<?php echo get_template_directory_uri(); ?>/images/kodomo_ttl_pc.svg" alt="" class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/images/kodomo_ttl_sp.svg" alt="" class="sp">
		</h2>
		<div class="container">
			<div class="kodomo_text_wrap">
				<p class="anim_on4">
					子どもがひとりでも入れるのが子ども食堂。<br>
					経済的な理由や家庭の事情などいろいろな理由によって、孤食となっている子どもが増えています。<br>
					豊かな国というイメージの現代日本でも多くの子どもたちの食事が、ないがしろになっています。
				</p>

				<p class="anim_on4">
					健康の問題、心の問題、社会の関わり、この国の未来…<br>
					など問題は小さくありませんが、<br>
					「何よりも困っている子どもをなくしたい」<br>
					「お腹を空かせた子どもなんていてはいけない」<br>
					という想いをもとに活動しています。
				</p>

				<p class="anim_on4">
					栄養満点の温かいごはんをつくって待っているのは、近所のおじちゃん、おばちゃん、お姉さん、お兄さんたち。<br>
					そんな地域の“あたたかい場所”が子ども食堂です。
				</p>
			</div>

			<img src="<?php echo get_template_directory_uri(); ?>/images/kodomo_illust02.svg" alt="" class="anim_on4">
		</div>
		<!-- //container -->
		
	</section>
	<!-- //kodomo -->

	<section id="" class="sec">
		<div class="container workshop_explain_wrap">
			<div class="ticket">
				<div class="container">
					<h2 class="sec_ttl">
						<span>
						飲食物 無料提供 <br class="sp">事前整理券のご案内
						</span>
					</h2>
					<div class="part_text">
						<p>
							当日は<br>
							<strong>11：30</strong>と<strong>14：00</strong>のタイミングで<br>
							名古屋の飲食店・企業様のご協力による飲食物の無料配布を行います。
						</p>
							
						<p>
							<strong>【1家族2食まで】<br class="sp">【高校生以下のお子様限定】</strong><br>
							となりますのでご了承ください。
						</p>
						<p>
							下記のリンクより<br class="sp">数量限定ではございますが、<br>
							事前に整理券を取得できますので、<br class="sp">ご利用ください。
						</p>
						<p class="link_text">詳しくはこちらのページから</p>
						<a href="https://passmarket.yahoo.co.jp/event/show/detail/0290uim5idm31.html" target="_blank" class="common_btn">
							サイトを見る
							<img src="https://web.archive.org/web/20230315040737im_/https://onediningtable-fes.jp/wp/wp-content/themes/OneDiningTable/images/blank_icon.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="map">
		<div class="container">
			<div class="map">
				<h2 class="sec_ttl">
					<span>
						MAP
					</span>
				</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/main_area.png" alt="" class="pc">
				<img src="<?php echo get_template_directory_uri(); ?>/images/main_area_sp.png" alt="" class="sp">
			</div>

			<div class="time_schedule">

				<h2 class="sec_ttl anim_on2">
					<span>TIME SCHEDULE</span>
					<small>メインステージタイムスケジュール</small>

				</h2>

				<div class="container schedule_list anim_on2">
					<dl class="flex">
						<dt>12:00-</dt>
						<dd>
						開会宣言・皆で「いただきます！」
						</dd>
					</dl>
					<dl class="flex">
						<dt>12:15-</dt>
						<dd>
							TEENS ROCK IN AICHI 実行委員会〈バンド〉
						</dd>
					</dl>
					<dl class="flex">
						<dt>13:30-</dt>
						<dd>
							子どもを支援する活動を行う団体紹介
						</dd>
					</dl>
					<dl class="flex">
						<dt>14:00-</dt>
						<dd>Nagoya Sing For Life Singers〈ゴスペル〉</dd>
					</dl>
					<dl class="flex">
						<dt>14:40-</dt>
						<dd>
						皆で「いただきます！」
						</dd>
					</dl>
					<dl class="flex">
						<dt>14:45-</dt>
						<dd>
						兄弟キッズドラマーjojo ＆ juju with でらドラム<br>
						〈ドラム演奏〉
						</dd>
					</dl>
					<dl class="flex">
						<dt>15:15-</dt>
						<dd>海蔵亮太ステージ〈歌唱〉</dd>
					</dl>
					<dl class="flex">
						<dt>16:00-</dt>
						<dd>
							東海学園高校〈弾き語り〉
						</dd>
					</dl>
					<dl class="flex">
						<dd>
							閉会宣言
						</dd>
					</dl>

				</div>
				<!-- //schedule_list -->
				</div>
				<!-- //time_schedule -->

			<div class="map">

				<img src="<?php echo get_template_directory_uri(); ?>/images/satelate_area.png" alt="" class="pc">
				<img src="<?php echo get_template_directory_uri(); ?>/images/satelate_area_sp.png" alt="" class="sp">
			</div>

			<div class="time_schedule">

				<h2 class="sec_ttl anim_on2">
					<span>TIME SCHEDULE</span>
					<small>サテライト会場タイムスケジュール</small>

				</h2>

				<div class="container schedule_list anim_on2">
					<dl class="flex">
						<dt>12:00-</dt>
						<dd>
							開会宣言・皆で「いただきます！」
						</dd>
					</dl>
					<dl class="flex">
						<dt>12:15-</dt>
						<dd>
							スタジオZOO〈キッズダンス〉
						</dd>
					</dl>
					<dl class="flex">
						<dt>13:30-</dt>
						<dd>
							子どもを支援する活動を行う団体紹介〈中継〉
						</dd>
					</dl>
					<dl class="flex">
						<dt>14:00-</dt>
						<dd>Grasp dance studio〈キッズダンス〉</dd>
					</dl>
					<dl class="flex">
						<dt>14:40-</dt>
						<dd>皆で「いただきます！」</dd>
					</dl>
					<dl class="flex">
						<dt>14:45-</dt>
						<dd>
							南山中学・高校奇術部<br>
							〈イリュージョン＆ジャグリング〉

						</dd>
					</dl>
					<dl class="flex">
						<dt>15:15-</dt>
						<dd>
							寿商店（下の一色）withマグロ専門仲卸業 <br>
							加藤商店〈マグロの解体ショー〉
						</dd>
					</dl>
					<dl class="flex">
						<dt>16:00-</dt>
						<dd>フロンティアの介護 Presents<br class="sp">〈菓子まきイベント〉</dd>
					</dl>
					<dl class="flex">
						<dd>閉会宣言</dd>
					</dl>

				</div>
				<!-- //schedule_list -->
			</div>
			<!-- //time_schedule -->

		</div>

		
	</section>

	

	<section id="who" class="sec">
		<div class="container">
			<h2 class="sec_ttl anim_on5">
				<span>WHO WE ARE</span>
				<small>One Dining Table FES.実行委員会</small>
			</h2>

			<!-- <ul class="flex member_list">
				<li class="hasegawa anim_on5">
					<figure>
						<img src="</?php echo get_template_directory_uri(); ?>/images/hasegawa.jpg" alt="">
						<figcaption>
							<span>長谷川 正和</span>
							<p>
								One Dining Table FES.実行委員会<br>
								医療法人大倉会　たきかわの森歯科クリニック 院長
							</p>
						</figcaption>
					</figure>

					<div class="member_text">
						<p>歯科医師として「虫歯を減らしたい」という気持ちで、「食」について伝えられる子ども食堂活動を始めました。しかし、活動を続ける中で多くの社会課題に直面。このフェスを通じて、さまざまな活動があることを知っていただき、支援の輪が広がることを願っています。</p>
					</div>
				</li>
				<li class="iyama anim_on5">
					<figure>
						<img src="</?php echo get_template_directory_uri(); ?>/images/iyama.jpg" alt="">
						<figcaption>
							<span>井山 将成</span>
							<p>
								One Dining Table FES.実行委員会<br>
								弁護士法人 名城法律事務所 弁護士
							</p>
						</figcaption>
					</figure>

					<div class="member_text">
						<p>世の中で何が一番大切かを考えた時に、子どもの健やかな成長以外は頭に浮かびませんでした。子ども達を取り巻く環境を整えることが、未来を豊かにすることにつながる。それが大人の責務であると思っています。子どもたちが笑顔になれる食卓の輪を広げること、その輪がいくつもできることを願いなから、尽力していきます。</p>
					</div>
				</li>
				<li class="kato anim_on5">
					<figure>
						<img src="</?php echo get_template_directory_uri(); ?>/images/katou.jpg" alt="">
						<figcaption>
							<span>加藤 紀昭</span>
							<p>
								One Dining Table FES.実行委員会<br>
								bar kisho・sake bar 結 オーナー
							</p>
						</figcaption>
					</figure>

					<div class="member_text">
						<p>私の本業は、大人がふらっと立ち寄れる居場所づくりだと考えております。我々が運営する「だんらん食堂」も同様に、子どもたちが「食」を通じて心の拠り所となる場所をつくることが、彼らの明るい未来につながると信じています。今回のフェスを通じて我々の活動を皆様に知っていただければ幸いです。</p>
					</div>
				</li>
				<li class="mizutani anim_on5">
					<figure>
						<img src="</?php echo get_template_directory_uri(); ?>/images/mizutani.jpg" alt="">
						<figcaption>
							<span>水谷 僚</span>
							<p>
								One Dining Table FES.実行委員会<br>
								合同会社Everyone'S 代表・虹食堂 オーナー
							</p>
						</figcaption>
					</figure>

					<div class="member_text">
						<p>美味しい食事をすることが「支援」になる。たくさんお酒を飲むことが「支援」になる。「支援」に集まってくれた子どもたちが飲食人に「夢」を持てるようになる。その「夢」を叶えた子どもたちが、また未来の子どもたちの光になる。そしてこのフェスで、様々な活動を知っていただき、社会課題解決の糸口になりたい。</p>
					</div>
				</li>
				<li class="toki anim_on5">
					<figure>
						<img src="</?php echo get_template_directory_uri(); ?>/images/toki.jpg" alt="">
						<figcaption>
							<span>土岐 龍馬</span>
							<p>
								One Dining Table FES.実行委員会<br>
								株式会社トキ・テック 代表取締役社長
							</p>
						</figcaption>
					</figure>

					<div class="member_text">
						<p>普段はさまざまなイベントを企画・運営している会社を経営しています。今回のイベントを通じて、「子ども食堂の活動を世の中に広め、いただきますで世界を繋げていきたい」と思っています。気軽に足を運んでもらえるようなイベントを目指していきますので、よろしくお願いいたします。</p>
					</div>
				</li>
			</ul> -->

			<figure class="member__img anim_on5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/whoweare.jpg" alt="" class="pc">
				<img src="<?php echo get_template_directory_uri(); ?>/images/whoweare_sp.jpg" alt="" class="sp">
				<figcaption>
					<span>［実行委員長］水谷僚</span><br>
					<span>［実行委員］長谷川正和/井山将成/加藤紀昭/土岐龍馬/小林雅之/安田優/井原純也/桑原蓮/花森靖司/鈴木信之介/細江祐貴/淺野倫考</span>
				</figcaption>
			</figure>

			<div class="whoweare__message anim_on5">
				<p>
				「いただきます!!!」この言葉をとにかくたくさんの人たちと一緒にしたい!! みんなで食卓を囲んで、心のこもった食事をする。その当たり前のようで当たり前では無い、その楽しさや温かさは何にも代え難い幸せであります。そんな幸せな時間を1人でも多くの子どもたちに知ってもらう為に僕らの【子ども食堂】の活動があります。名古屋のど真ん中で一緒に叫びましょう！「いただきます!!! 」宜しくお願い致します！<br><span>2024年 実行委員長　水谷 僚</span>
				</p>
			</div>
		</div>
		<!-- //container -->
	</section>
	<!-- //who -->

	<section id="sponsorship">
		<div class="container">
			<h2 class="sec_ttl">
				<span>本イベントのご協賛企業様</span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_img.svg" alt="">
			</h2>

			<ul class="flex sponsor_gold sponsor_list">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img10.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img14.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img01.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img09.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img02.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img04.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img05.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img12.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img15.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img16.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img17.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img18.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img19.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img20.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/gold_img21.jpg" alt="">
				</li>
			</ul>

			<ul class="flex sponsor_sliver sponsor_list">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img01.jpg" alt="">
				</li>
				
				
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img17.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img12.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img11.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img05.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img07.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img18.jpg" alt="">
				</li>
			</ul>

			<ul class="flex sponsor_bronze sponsor_list">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img01.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img02.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img16.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/silver_img15.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img24.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img25.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img26.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img10.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img27.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img28.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img29.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img30.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img31.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img36.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img08.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img11.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img12.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img04.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img21.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img32.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img33.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img34.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img35.jpg" alt="">
				</li>
				
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img37.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img38.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img39.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img40.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img41.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img42.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img43.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img44.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img45.jpg" alt="">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsor/bronze_img46.jpg" alt="">
				</li>
				<li>
				</li>
				<li>
				</li>
				<li>
				</li>
			</ul>
			
		</div>
	</section>


	<div class="mv_under_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image03.jpg" alt="" class="pc">
		<img src="<?php echo get_template_directory_uri(); ?>/images/odt_image03_sp.jpg" alt="" class="sp">
	</div>

	<section id="contact" class="sec">
		<div class="container">
			<h2 class="sec_ttl">
				<span>
					CONTACT
				</span>
			</h2>

			<div class="form_wrap anim_on9">
				<!-- <dl class="flex">
					<dt>お名前</dt>
					<dd>[text* namae]</dd>
				</dl>
				<dl class="flex">
					<dt>フリガナ</dt>
					<dd>[text* huriganga]</dd>
				</dl>
				<dl class="flex">
					<dt>メールアドレス</dt>
					<dd>[email* email_odt]</dd>
				</dl>
				<dl class="flex">
					<dt>タイトル</dt>
					<dd>[select* ttl include_blank "イベントに関して" "アワードへ参加" "協賛について"]</dd>
				</dl>
				<dl class="flex">
					<dt>ファイル</dt>
					<dd>[file file-209]</dd>
				</dl>
				<dl class="flex last">
					<dt>内容</dt>
					<dd>[textarea naiyo]</dd>
				</dl> -->

				<?php echo do_shortcode('[contact-form-7 id="395" title="ODTコンタクトフォーム"]'); ?>


			</div>
		</div>
	</section>
	<!-- /contact -->

	<footer id="footer" class="sec">
		<figure class="ft_logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/mv_ttl2024-02.png" alt="">
		</figure>
		<div class="sns_line">
			<div class="sns_container">
				<div class="flex">
					<p>SHARE ON SNS</p>
					<span class="border"></span>
					<ul class="flex sns_list pc">
					<li>
							<a href="https://www.instagram.com/odt_fes/?next=%2F"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_white.svg" alt=""></a>
						</li>
						<li>
							<a href="https://twitter.com/odt321?s=21&t=Pn97SC0LzWZuY6nGPcsbJg"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_white.svg" alt=""></a>
						</li>
						<li>
							<a href="https://m.facebook.com/profile.php?id=100086227661770&_rdr"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_white.svg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /sns_line -->

		<div class="container">
			<ul class="ft_nav flex flex_pc">
				<li>
					<a href="/#">TOP</a>
				</li>
				<li>
					<a href="/#about">ABOUT</a>
				</li>
				<li>
					<a href="/#concept">CONCEPT</a>
				</li>
				<li>
					<a href="/#who">WHO WE ARE</a>
				</li>
				<!-- <li>
					<a href="/#award">AWARD</a>
				</li>
				<li>
					<a href="/#stage">STAGE</a>
				</li>
				<li>
					<a href="/#workshop">WORKSHOP</a>
				</li> -->
				<li>
					<a href="/#contact">CONTACT</a>
				</li>
			</ul>

			<ul class="gnav sp">
				<li>
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">TOP</a>
				</li>
				<li>
					<a href="/#about"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">ABOUT</a>
				</li>
				<li>
					<a href="/#concept"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">CONCEPT</a>
				</li>
				<li>
					<a href="/#who"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">WHO WE ARE</a>
				</li>
				<li>
					<a href="/#award"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">AWARD</a>
				</li>
				<li>
					<a href="/#stage"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">STAGE</a>
				</li>
				<li>
					<a href="/#workshop"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">WORKSHOP</a>
				</li>
				<li>
					<a href="/#contact"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.svg" alt="">CONTACT</a>
				</li>
			</ul> 
		</div>
		<!-- /container -->

		<div class="ft_bottom">
			<div class="ft_container">
				<div class="ft_bottom_content flex">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/images/ft_image.svg" alt="">
					</figure>
					<p>
						<span>運営</span><br class="sp">
						<b>NPO法人<br class="sp">One Dining Table</b><br class="sp">
					</p>

					<a href="http://onediningtable.jp/" target="_blank" class="common_btn">
						サイトを見る
						<img src="<?php echo get_template_directory_uri(); ?>/images/blank_icon.svg" alt="">
					</a>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /ft_bottom -->

		<small class="copyright">© One Dining Table All rights reserved.</small>
	</footer>
	<!-- /footer -->
</main>
	

</body>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.arctext.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/movie.js"></script>
	
</html>