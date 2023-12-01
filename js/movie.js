var ua = navigator.userAgent;
var appVersion = window.navigator.appVersion.toLowerCase();
if (ua.indexOf('iPad') > 0 || ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0　|| appVersion.indexOf("msie 7.") != -1) {


		// YouTubeのウェブサイト上にある「IFrameプレーヤーAPI」のコードを
	// 非同期的に読み込む。
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var iframePlayerApiScriptTag = document.getElementsByTagName('script')[0];
	iframePlayerApiScriptTag.parentNode.insertBefore(tag, iframePlayerApiScriptTag);

	var player;
	function onYouTubePlayerAPIReady() {
		//ここで指定しているID名（「iframe_player_api」）がついた
		//<div>タグ（上記）は、ページが表示される前に
		//自動的に<iframe>タグ（動画プレーヤー）に置き換えられます。
		player = new YT.Player('iframe_player_api', {
			//動画プレーヤーの横幅（width）と縦幅（height）
			width: '100%',
			height: '100%',
			//表示させるYouTube動画の「動画ID」
			videoId: '',
			//動画プレーヤーの設定をおこなう「パラメータ」
			playerVars: {
				//左の値は「パラメータの名前」。
				//右の値は「パラメータの値」。
				'modestbranding': 1,
				'autohide': 1,
				'controls': 1,
				'showinfo': 0,
				'rel': 0,
				'wmode': 'transparent'
			},
			//「イベントリスナー」
			events: {
				//左の値は「イベントリスナー」。
				//右の値はそのイベントが発生した時に実行される関数。
				'onStateChange': onPlayerStateChange,
				'onReady': onPlayerReady
			}
		});
	}
	//動画の再生状態が変わったときに実行される関数
	function onPlayerStateChange(event) {

		switch (event.data) {
			case YT.PlayerState.ENDED:
				$('body').removeClass('play');
				$('#full_screen').css({ "left": "-100%" });
				player.stopVideo();
				break;
			case YT.PlayerState.PLAYING:
				break;
			case YT.PlayerState.PAUSED:
				break;
			case YT.PlayerState.BUFFERING:
				break;
			case YT.PlayerState.CUED:
				break;
		}
	}

	function onPlayerReady(event) {
		$(function () {
			// 動画再生処理

			$("a[youtube_id]").css({"cursor":"pointer"});

			$('.movie_wrap a').click(function () {
				var play_id = $(this).attr('youtube_id');
				$('body').addClass('play');
				player.loadVideoById(play_id);
				$('#full_screen').css({ "left": "50%" });
				return false;
			});

			$('#close_btn').click(function () {
				$('body').removeClass('play');
				$('#full_screen').css({ "left": "-100%" });
				player.stopVideo();
			});
		});
	}

	$(function () {
		$("a[youtube_id]").css({"cursor":"default"});
	});


} else {

	// YouTubeのウェブサイト上にある「IFrameプレーヤーAPI」のコードを
	// 非同期的に読み込む。
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var iframePlayerApiScriptTag = document.getElementsByTagName('script')[0];
	iframePlayerApiScriptTag.parentNode.insertBefore(tag, iframePlayerApiScriptTag);

	var player;
	function onYouTubePlayerAPIReady() {
		//ここで指定しているID名（「iframe_player_api」）がついた
		//<div>タグ（上記）は、ページが表示される前に
		//自動的に<iframe>タグ（動画プレーヤー）に置き換えられます。
		player = new YT.Player('iframe_player_api', {
			//動画プレーヤーの横幅（width）と縦幅（height）
			width: '100%',
			height: '100%',
			//表示させるYouTube動画の「動画ID」
			videoId: '',
			//動画プレーヤーの設定をおこなう「パラメータ」
			playerVars: {
				//左の値は「パラメータの名前」。
				//右の値は「パラメータの値」。
				'modestbranding': 1,
				'autohide': 1,
				'controls': 1,
				'showinfo': 0,
				'rel': 0,
				'wmode': 'transparent'
			},
			//「イベントリスナー」
			events: {
				//左の値は「イベントリスナー」。
				//右の値はそのイベントが発生した時に実行される関数。
				'onStateChange': onPlayerStateChange,
				'onReady': onPlayerReady
			}
		});
	}
	//動画の再生状態が変わったときに実行される関数
	function onPlayerStateChange(event) {

		switch (event.data) {
			case YT.PlayerState.ENDED:
				$('body').removeClass('play');
				$('#full_screen').css({ "left": "-100%" });
				player.stopVideo();
				break;
			case YT.PlayerState.PLAYING:
				break;
			case YT.PlayerState.PAUSED:
				break;
			case YT.PlayerState.BUFFERING:
				break;
			case YT.PlayerState.CUED:
				break;
		}
	}

	function onPlayerReady(event) {
		$(function () {
			// 動画再生処理

			$("a[youtube_id]").css({"cursor":"pointer"});

			$('.movie_wrap a').click(function () {
				var play_id = $(this).attr('youtube_id');
				$('body').addClass('play');
				player.loadVideoById(play_id);
				$('#full_screen').css({ "left": "50%" });
				return false;
			});

			$('#close_btn').click(function () {
				$('body').removeClass('play');
				$('#full_screen').css({ "left": "-100%" });
				player.stopVideo();
			});
		});
	}

	$(function () {
		$("a[youtube_id]").css({"cursor":"default"});
	});


}



