<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Зитва За Трон</title>
	<link href="https://epicwarru-a.akamaihd.net/iframe_v2//css/feedback.v2.css?_nxv=1b99dbe" rel="stylesheet" type="text/css" media="all" />
</head>
	<body oncontextmenu="return false;" class="bg--throne">
		<div id="flash-wrapper" style="width: 100%;">
			<style>
	#flash-content .jshaxe-content-text {
		display: block;
		position: absolute;
		color: #FFFFFF;
		font-family: Arial, sans-serif;
		font-size: 24px;
		font-weight: bold;
		top: 50%;
		width: 100%;
		height: 100%;
		margin: 0 auto;
		
		
	}
	body.bg--heroes #flash-content .jshaxe-content-text {
		color: #424142;
	}
</style>

<div id="flash-content" style="background: black;height: 640px;">
	<div class="jshaxe-content-text">
		Загрузка...	</div>
</div>
		</div>
			
		<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js-common/iframeLoaded.js?_nxv=f72f0c1"></script>
<script>

	function nxFrameSendStash(type, info) {
		var requestUrl = 'https://epicwar-mm.nextersglobal.com/api/clientStat/?';

		requestUrl += 'networkIdent=mail';
		requestUrl += '&applicationId=710278';
		requestUrl += '&type='+type;
		requestUrl += '&userId=13805796353382191964';

		if (info && typeof info === 'object') {
			requestUrl += '&'+jQuery.param({
				info: info
			});
		}

		var img = new Image();
		img.src = requestUrl;
	}

	function nxFrameSendStashInfo(type, info) {
		info = info || {};
		$.get('https://epicwar-mm.nextersglobal.com/api/clientStat/', {
			networkIdent  : 'facebook',
			applicationId : '710278',
			type          : type,
			info          : info,
			userId        : '13805796353382191964',
		},
		function(){},
		'jsonp');
	}

	iframeLoaded('https://epicwar-mm.nextersglobal.com/api/', {
		userId : '13805796353382191964',
		networkIdent : 'mail',
		referrer : '',
		countryCode : 'DE'
	});

</script>



		

<script>
	var NXCurrentTimestamp = 1608997915;
	var NXFeedbackLang = 'ru';
	if (navigator.userAgent.match('Chrome')) {

		window.addEventListener('focus', function(){
			setTimeout(function() {
				$('#custom_footer .button-menu').css('opacity', 0.01);
				$('#custom_footer .button-menu').show();
				setTimeout(function() {
					$('#custom_footer .button-menu').css('opacity', 1);
					$('#custom_footer .button-menu').hide();
					// document.getElementById('crutch_pixel');
				}, 1000);
			}, 1000);
		});
	}

	
	
</script>

<div class="feedback_policy policy terms fanterms ru">
	<div class="container">
		<div class="form-header">
			<button type="button" class="form-arrow"></button>
			<button type="button" class="form-cross zd_close link_close" data-action="form-hide"></button>
			<span class="form-title" data-form-search="Вопросы и ответы" data-form-feedback="Задать вопрос">Задать вопрос</span>
		</div>
		<div class="content"></div>
	</div>
</div>


<div class="feedback_footer ru buttons--ru network_mm" id="custom_footer">
	<div class="customFooterContent">

		
		<div id="your_id" data-id="">
			<span>Ваш игровой ID:</span>
			<input type="text" readonly="readonly" value="13805796353382191964 J" />
		</div>

		
		
		
		
		<a id="button_q" class="button button--feedback" href="#" data-action="form-show"></a>

					<a id="button_g" class="button button--group" href="https://my.mail.ru/community/thronerush/" target="_blank"></a>
		
		
					<a id="button_i" class="button button--invite" href="#"></a>
		
		
		
					<span id="button_m" class="button button--legal">
				<span class="button-menu">
					<a id="link_policy" href="#">Политика<br>конфиденциальности</a>
					<a id="link_terms"  href="#">Пользовательское<br>соглашение</a>
				</span>
			</span>
		
		
			</div>
</div>


<form class="form isSocial ru buttons--ru network_mm" action="/" method="post" id="zd_form" accept-charset="UTF-8" enctype="multipart/form-data" data-version="2">
	<div class="container">
		<div class="loader hidden"></div>

		<div class="form-header">
			<button type="button" class="form-arrow"></button>
			<button type="button" class="form-cross zd_close" data-action="form-hide"></button>
			<span class="form-title main-title" data-form-search="Вопросы и ответы" data-form-feedback="Задать вопрос">Задать вопрос</span>
		</div>

		<div class="form-faq">
						<div class="page page_page">
				<div class="text"></div>
			</div>
		</div>

		<fieldset class="form-feedback">

			<!-- тип обращения -->
			<div class="form-feedback-selectbox-wrapper">
				<div class="form-feedback-selectbox" data-name="type" data-value="">
					<span class="form-feedback-selectbox-value" >Укажите тип обращения</span>
					<ul>
						<li data-enabled-in="_fm" data-value="gameplay_question">Вопрос по игре</li>
						<li data-value="_techerror" data-default="true">Техническая проблема</li>
						<li data-value="_money">Проблема с оплатой</li>
						<li data-enabled-in="*,-_fm" data-value="_bug">Ошибка игры</li>
						<li data-enabled-in="*,-_fm" data-value="feedback">Отзывы и предложения по игре</li>
						<li data-enabled-in="_fm" data-value="privacy_request">Обращение по Политике конфиденциальности / контакт DPO</li>
					</ul>
				</div>
			</div>

			<!-- внутриигровые проблемы -->
			<div class="form-feedback-selectbox-wrapper form-typical-field hidden">
				<div class="form-feedback-selectbox" data-field-type="_bug" data-value="gameplayerror_gen">
					<span class="form-feedback-selectbox-value">Общие проблемы с игрой</span>
					<ul>
						<li data-value="gameplayerror_gen" data-default="true">Общие проблемы с игрой</li>
						<li data-value="gameplayerror_lost">У меня пропало игровое имущество</li>
						<li data-value="gameplayerror_quest">Проблемы с заданиями</li>
					</ul>
				</div>
			</div>

			<!-- технические проблемы -->
			<div class="form-feedback-selectbox-wrapper form-typical-field hidden">
				<div class="form-feedback-selectbox" data-field-type="_techerror" data-value="tech_conlost">
					<span class="form-feedback-selectbox-value">Потеря соединения</span>
					<ul>
						<li data-value="tech_conlost" data-default="true">Потеря соединения</li>
						<li data-value="tech_perform">Проблема с производительностью</li>
						<li data-value="tech_crash">Игра не запускается/вылетает</li>
						<li data-value="tech_visual">Визуальные ошибки</li>
						<li data-value="tech_gen">Другая техническая проблема</li>
					</ul>
				</div>
			</div>

			<!-- проблемы с оплатой -->
			<div class="form-feedback-selectbox-wrapper form-typical-field hidden">
				<div class="form-feedback-selectbox" data-field-type="_money" data-value="paym_noitems">
					<span class="form-feedback-selectbox-value">Не получил оплаченную услугу</span>
					<ul>
						<li data-value="paym_noitems" data-default="true">Не получил оплаченную услугу</li>
						<li data-value="paym_cantpay">Не могу произвести платеж</li>
						<li data-value="paym_offer">Не получил награду за рекламные предложения</li>
					</ul>
				</div>
			</div>

			<input name="subject" class="form-feedback-subject" placeholder="Тема" required="required" type="text" />

			<textarea name="description" class="form-feedback-description" placeholder="Описание" required="required" ></textarea>

			<input name="email" class="form-feedback-email" placeholder="Ваш email" required="required" type="email" />

			<!-- game type -->
			<input type="hidden" name="fields[21727158]" value="_epic" />

			<!-- user id -->
			<input type="hidden" name="name" value="13805796353382191964" />

			<input type="hidden" name="brand_id" value="176588" />

			<input type="hidden" name="fields[21707382]" value="_mm" />

			<input type="hidden" name="fields[81086248]" value="ru" />
			<input type="hidden" name="fields[360000338947]" value="" />

			<input type="hidden" name="game_client_version" value="js" />

			<input type="hidden" name="network_testing" value="rpc|gif|https://epicwar-mm.nextersglobal.com/pong.gif;static|gif|https://epicwarru-a.akamaihd.net/iframe/pong.gif" />
			<input type="hidden" name="network_test" value="" />

			<input type="hidden" name="params[app_id]" value="710278" />
			<input type="hidden" name="params[rpc_url]" value="https://epicwar-mm.nextersglobal.com/api/" />
			<input type="hidden" name="params[network]" value="mail" />

			<input type="hidden" name="support_token" value="1608997915:fb630195f296a2d11a292354af4328c77b519e611bab1243c0202c75437ae30f" />
			<input type="hidden" name="data_token" value="b83ba9f4cffa4b414b27a342b74d5f210d6d2d765bc2a07dcb85bc73edb35251" />

			<div class="attachment-wrapper">
				<span class="attachment-title">Прикрепить файлы<br/><small>Размер файла не должен превышать 5 мб</small></span>
				<input type="file" name="attachment" multiple="multiple" accept="image/*,video/*,text/plain" />
			</div>

			<ul class="attachment-list"></ul>

			<button type="button" class="form-search-ask" data-action="form-submit" id="zd_submit">Отправить</button>

		</fieldset>

		<div id="message" class="hidden">
			<div class="holder">
				<div class="loading"></div>
				<div class="message_text"></div>
			</div>
		</div>
	</div>
</form>

		<script src="//connect.mail.ru/js/loader.js?1" type="text/javascript" charset="utf-8"></script>

		<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js-dev/combined.dev.-sockets.js?_nxv=67d4e22" type="text/javascript"></script>
<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js-common/web_socket.js?_nxv=80aef61" type="text/javascript"></script>
<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js/nxg.lib.js?_nxv=a9656cb" type="text/javascript"></script>
<script src="https://epicwarru-a.akamaihd.net/iframe_v2/dev/yt_new_video.js?_nxv=9ecf4a4" type="text/javascript"></script>
<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js/feedback.v2.js?_nxv=2aef75d" type="text/javascript"></script>
<script src="https://epicwarru-a.akamaihd.net/iframe_v2/js-dev/Pushd4ClientWar.js?_nxv=c05d6d6" type="text/javascript"></script>

		<script>
			var timestamp = new Date();
			var timestamp_swf = 0;

			function hideApplication() {
				if (thisMovie('flash-app')) {
					if (navigator.userAgent.indexOf("Firefox")!=-1 || navigator.userAgent.indexOf("Opera")!=-1) {
						thisMovie('flash-app').style.visibility = 'hidden';
					} else {
						thisMovie('flash-app').parentNode.style.position = 'absolute';
						thisMovie('flash-app').parentNode.style.top = "1000px";
					}
				}
			};

			function showApplication() {
				if (thisMovie('flash-app')) {
					if (navigator.userAgent.indexOf("Firefox")!=-1 || navigator.userAgent.indexOf("Opera")!=-1) {
						thisMovie('flash-app').style.visibility = 'visible';
					} else {
						thisMovie('flash-app').parentNode.style.position = 'relative';
						thisMovie('flash-app').parentNode.style.top = "0px";
					}
				}
			};

			function toggleApplication(action) {
				if (action === 'show') showApplication();
				if (action === 'hide') hideApplication();
			};

			function doFrameResizeToEven() {
				var width = $('#flash-wrapper').width();
				if (width % 2) {
					$('#flash-app').width(width-1);
				} else {
					$('#flash-app').width(width);
				}
			}
			$(window).resize(function() {
				doFrameResizeToEven();
			});

			$(document).ready(function(){
				doFrameResizeToEven();
				$('#button_i').on('click', function(e){
					e.preventDefault();
					mailru.app.friends.invite();
				});
			});

		</script>

		<script type="text/javascript">

	try {
		window.nxg.registerModule('errord', new window.nxg.ErrordClient('mail','710278','13805796353382191964','https://error.nextersglobal.com/client/'));
		window.nxg.registerModule('stat', new window.nxg.StatClient('mail','710278','13805796353382191964','2-12-85-06','54-46','https://stat.nextersglobal.com/collector/client/'));
	} catch(e) {}

	function NXSendErrorDString(text, errorKey) {
		if (window.nxg && window.nxg.checkModule('errord')) {
			text = text.substring(0, 2000);
			window.nxg.getModule('errord').send({
				url: '',
				status: 0,
				fversion: 'iframe',
				appversion: '',
				errorKey: errorKey,
				request: 'JS iFrame Request',
				response: text
			});
		}
	}

	function NXJsLoadError(that) {
		NXSendErrorDString('Error loading client js, try fallback', 'JS Client Error');
	}

	window.onerror = function(message, source, lineno, colno, error) {
		var errorKey = 'JS Client Error';
		var err = '';
		var stack = (error && error.stack && error.stack.toString());
		if (!stack) {
			stack = '';
		}
		if (source.match('iframe')) {
			errorKey = 'JS iFrame Error';
		}
		err += message + '\n';
		err += 'source: ' + source + '\n';
		err += 'line: ' + lineno + '\n';
		err += 'col: ' + colno + '\n';
		err += 'stack: ' + stack;
		NXSendErrorDString(err, errorKey);
	}

</script>

<script type="text/javascript" src="https://epicwarru-a.akamaihd.net/iframe_v2/tr/lib/FileSaver.min.js"></script>
<script type="text/javascript" src="https://epicwarru-a.akamaihd.net/iframe_v2/tr/lib/howler.min.js"></script>
<script type="text/javascript" src="https://epicwarru-a.akamaihd.net/iframe_v2/tr/lib/pako.min.js"></script>
<script src="https://epicwarru-a.akamaihd.net/mm/v0771/assets/Start.js" onerror="NXJsLoadError()" crossorigin="anonymous" type="text/javascript"></script>

<script type="text/javascript">

	var NXFlashVars = {"is_app_user":"1","session_key":"a4dd02163bd8f7f27bef11518269eef2","vid":"13805796353382191964","oid":"13805796353382191964","app_id":"710278","authentication_key":"ps-qqPm3MUx-1608997915-80.136.180.217-50b2ae121f60f7db4d5961dc81d63e12","session_expire":"1609084312","ext_perm":"notifications,emails,payments","sig":"61bfaf826569ee689627fe3d83eafcf7","window_id":"CometName_01c3a624df981c5b1c082ade937087cd","referer_type":"wo_ref","browser":"chrome","country_code":"DE","error_url":"https://error.nextersglobal.com/client/","game_url":"https://my.mail.ru/apps/710278","geoip_city":"","ident":"throne","iframe_static_url":"https://epicwarru-a.akamaihd.net/iframe_v2/","index_url":"https://epicwarru-a.akamaihd.net/mm/index.v0771.json.gz","interface_lang":"ru","network":"mail","onlineCnt":0,"onlineInterval":100000,"preloader_asset":"preloader/preloader_dwarf.swf?v=1","ref":"","requestLoadingInfoTimeout":"3000","rpc_url":"https://epicwar-mm.nextersglobal.com/api/","stat_url":"https://stat.nextersglobal.com/collector/client/","static_url":"https://epicwarru-a.akamaihd.net/","sys_id":"2","uid":"13805796353382191964","static_urls":["https://epicwarru-a.akamaihd.net/"],"group_url":"https://my.mail.ru/community/thronerush/","miniloader":"https://epicwarru-a.akamaihd.net/mm/","preloader":"https://epicwarru-a.akamaihd.net/mail/v043/MmLoader.swf?v=3"};
	var haxeDom = document.getElementById('flash-content');

	if (NXFlashVars === '') {
		NXSendErrorDString('NXFlashVars is empty');
	}

	if (window.lime) {
		haxeDom.innerHTML = '';
		haxeDom.style.visibility = 'visible';
		lime.embed('Start', 'flash-content', 0, 0, {parameters: NXFlashVars});
	} else {
		$.ajax({
			url: 'https://epicwarru-a.akamaihd.net/mm/v0771/assets/Start.js',
			dataType: 'text',
			success: function(data, status) {
				eval(data);
				haxeDom.innerHTML = '';
				haxeDom.style.visibility = 'visible';
				lime.embed('Start', 'flash-content', 0, 0, {parameters: NXFlashVars});
			},
			error: function(xhr, desc, er) {
				var text = 'Error loading client js, again.';
				text += ' Status: '+xhr.readyState;
				text += ' Text: '+xhr.statusText;
				text += ' State: '+xhr.state();
				NXSendErrorDString(text);
			}
		});
	}

</script>

		<script type="text/javascript">
	$(document).ready(function(){
		
		var feedbackOptions = {"language":"ru","url":"https://i-epicwar-mm.nextersglobal.com/iframe_social/mail/epicwar//feedback/index.php?request=","fantermsEndPoint":"https://i-epicwar-mm.nextersglobal.com/iframe_social/mail/epicwar/","policyEndPoint":"https://i-epicwar-mm.nextersglobal.com/iframe_social/mail/epicwar/terms/policy_epicwar.php","termsEndPoint":"https://i-epicwar-mm.nextersglobal.com/iframe_social/mail/epicwar/terms/terms_epicwar.php"};

					feedbackOptions.flashHideCallback = hideApplication;
			feedbackOptions.flashShowCallback = showApplication;
		
		window.feedback = new Feedback.Controller(feedbackOptions);

		//swf callbacks
		window.feedback._clickPrivacy = function() {
			$('#link_policy').click();
		};
		window.feedback._clickTerms = function() {
			$('#link_terms').click();
		};

	});
</script>

		<script type="text/javascript">

	function thisMovie(name) {
		return window.document[name] || window[name] || document.embeds[name];
	}

	$(document).ready(function(){
		try {

			function setFlashMovie() {
				if (thisMovie('flash-app')) {
					window.nxg.setFlashMovie(thisMovie('flash-app'));
				} else {
					setTimeout(setFlashMovie, 500);
				}
			}
			setFlashMovie();

			window.nxg.registerModule(
				'pushd',
				new window.nxg.Pushd4Client(
					['wss://pushd.nextersglobal.com:443/websocket'],
					'mm',
					'710278',
					'13805796353382191964',
					"1608997915:7vzZPURp:YyrahP4hDrbtSjie1DgB2Q"				)
			);

			window.nxg.getModule('pushd').connect();
			window.nxg.getModule('pushd').on('message', pushd_onmessage);

		} catch(e) {}
	});

</script>

		<script>
	function NXJSScroll() {
		try {

			var isMac = /mac/i.test(navigator.userAgent);

			var oldDelta = null;

			var app = thisMovie('flash-app');
			if (!app) {
				return;
			}

			var subscriber = app.attachEvent ? 'attachEvent' : 'addEventListener';

			var eventName = 
				'onwheel' in document.createElement('div') ? 'wheel' :
					document.onmousewheel !== undefined ? 'mousewheel' : 
					'DOMMouseScroll';

			function myHandleWheel(event) {

				var app = thisMovie('flash-app');

				if (app) {

					var d = event.wheelDelta || (event.detail * -1) || (event.deltaY * -1);

					var o = {
						delta: d,
						x: event.screenX,
						y: event.screenY,
						altKey: event.altKey,
						ctrlKey: event.ctrlKey, 
						shiftKey: event.shiftKey
					};

					if (typeof app.handleWheel === 'function') {
						app.handleWheel(o);
					}
				}
			}

			function mouseWheel(event) {

				event.preventDefault();

				var fireEvent;

				var newDelta = event.deltaY;

				if (isMac && oldDelta !== null) {

					if (oldDelta < 0 && newDelta > 0) {
						fireEvent = true;
					}

					if (oldDelta > 0 && newDelta < 0) {
						fireEvent = true;
					}

					if (oldDelta > 0 && newDelta > 0) {

						if (oldDelta < newDelta) {
							fireEvent = true;
						} else {
							fireEvent = false;
						}
					}

					if (oldDelta < 0 && newDelta < 0) {

						if (oldDelta > newDelta) {
							fireEvent = true;
						} else {
							fireEvent = false;
						}
					}

				} else {
					fireEvent = true;
				}           

				oldDelta = newDelta;

				if (fireEvent === true) {
					myHandleWheel(event);
				}
			}

			app[subscriber](eventName, mouseWheel);

			NXJSScroll.isInited = true;

		} catch(e) {}
	};

	$(document).ready(function(){
		NXJSScroll();
	});

	nxg.ownEvents.on('flash_started', function() {
		if (!NXJSScroll.isInited) {
			NXJSScroll();
		}
	});

</script>

		<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-38623438-1', { name : 'tracker1' });
	ga('tracker1.send', 'pageview');

			ga('create', 'UA-41003102-3', { name : 'tracker2', userId : '13805796353382191964' });
		ga('tracker2.send', 'pageview');
	
</script>

		<style>
				@font-face {
					font-family: 'Coiny';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/Coiny.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'Epicwar';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/Epicwar.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'Epicwar_title';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/Epicwar_title.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'OSR85';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/OSR85.otf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'OfficinaSansBlack';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/OfficinaSansBlack.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'OfficinaSansBlackC';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/OfficinaSansBlackC.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'OfficinaSerifBlackITC';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/OfficinaSerifBlackITC.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'OzHandicraft';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/OzHandicraft.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'Roboto Condensed Bold';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/Roboto Condensed Bold.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
							@font-face {
					font-family: 'Roboto Condensed Regular';
					src: url('https://epicwarru-a.akamaihd.net/mm/v0718/assets/fonts/Roboto Condensed Regular.ttf') format('truetype');
					font-weight: normal;
					font-style: normal;
				}
			</style>

	<span style="font-family: 'Coiny', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'Epicwar', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'Epicwar_title', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'OSR85', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'OfficinaSansBlack', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'OfficinaSansBlackC', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'OfficinaSerifBlackITC', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'OzHandicraft', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'Roboto Condensed Bold', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	
	<span style="font-family: 'Roboto Condensed Regular', sans-serif; font-size: 1px; width:1px; height:1px;"></span>	

		
	</body>
</html>