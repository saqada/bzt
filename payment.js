var utils = {
	makeGet: function(hash) {
		var r = [];
		for (var k in hash) {
			if (!hash.hasOwnProperty(k)) continue;
			r[r.length] = k + '=' + encodeURIComponent(hash[k]);
		}
		return r.join('&');
	},
	parseGet: function (str) {
		var p = str.split('&'),
			result = {},
			di;

		for (var i = p.length; i--;) {
			di = p[i].indexOf('=');
			try {
				result[p[i].substr(0, di)] = decodeURIComponent(p[i].substr(di + 1));
			} catch(e) {
			}
		}
		return result;
	},
	stat: function(id) {
		var reg = /^\d+$/;

		if (reg.test(id)) {
			(new Image()).src='//rs.mail.ru/d' + id + '.gif?'+Math.random();
		}
	}
};

function closeWindow() {
	notifyApp();
	parent.postMessage(JSON.stringify({
		name: 'close'
	}), '*');
	if (parent.winModal) {
		parent.winModal.get('paymentDialog').down();
	}
}

function resize (params) {
	var dialog;

	params = params || {};

	if (!params.height) {
		params.height = document.body.offsetHeight;
	}
	if (!params.width) {
		params.width = document.body.offsetWidth;
	}

	if (parent) {
		if (parent.winModal) {
			dialog = parent.winModal.get('paymentDialog');
			if (dialog) {
				dialog.resize(params);
			}
		}

		parent.postMessage(JSON.stringify({
			name: 'resize',
			data: params
		}), '*');
	}
}

function getRandom() {
	return Math.round(Math.random(+new Date() + Math.random()) * 10000000);
}

(function($) {
	var handlers,
		options = window.DMR,
		parent = window.parent,
		isFrameLoaded = false,
		$iframe,
		dmrFrameTimer,
		isErrorFrameLoad = false,
		isApp = !!(window.parent.mailru && window.parent.mailru.isApp),
		byHearts = false,
		waitIndex = 0;
	// РћР±СЂР°Р±РѕС‚С‡РёРєРё СЃРѕР±С‹С‚РёР№ РѕС‚ Р”РњР 
	handlers = {
		resize: function (height) {
			$iframe.height(height);
			log('resize');
			resize();
		},
		stateChange: function (data) {
			changeState(data);
		}
	};

	if (window.evaluate === undefined) {
		window.evaluate = function(a) {
			return eval(a);
		};
	}

	window.onCometPayment = function (app_id, service_name, status, issuer_id) {
		// inside MM
		console.log("IRLOG: onCometPayment(), status = " + status);
		if (parent !== window && typeof parent.onCometPayment === 'function') {
			console.log("IRLOG: onCometPayment(), onCometPayment");
			parent.onCometPayment(app_id, service_name, status, issuer_id);
			// external apps(sites)
		} else {
			console.log("IRLOG: onCometPayment(), success");
			changeState('success');
		}
	};

	window.selectTabById = function(id) {
		var $tab = $('.wrp-ctab-' + id);
		if ($tab.length) {
			$('.wrp-ctab').hide();
			$tab.show();
		}
	};

	function findGetParameter (str, parameterName) {
		var param = str.split("&").filter(function (el) {return el.indexOf(parameterName) > -1});
		return param[0] ? param[0].split('=')[1] : '';
	}

	function onMessage (event) {
		var message;

		clearTimeout(dmrFrameTimer);

		if (event.origin === 'https://ml.money.mail.ru') {
			message = utils.parseGet(event.data);

			if (message && handlers.hasOwnProperty(message.method)) {
				handlers[message.method](message.data);
			}
		}
	}

	function waitStatus (time, noRefund) {
		var timeout = time || 5000;

		requirejs(['client-server'], function (ClientServer) {
			setTimeout(function () {
				ClientServer.func('billing.getStatByIssuerId',
					{
						issuer_id: options.issuerId,
						no_refund: noRefund || 0
					},
					{
						success: function (data) {
							var status, i;
							data = JSON.parse(data);
							status = data[2].res;

							if (data[1] === 'OK') {
								switch (status) {
									case 'OK':
									    console.log("IRLOG: waitStatus(), OK");
										if (data[2].dmrurl) {
											evaluate(data[2].callback);
										} else if (data[2].res === 'OK' && Object.prototype.toString.call(data[2].callback) === '[object Array]') {
											for (i = 0; i < data[2].callback.length; i++) {
												evaluate(data[2].callback[i]);
											}
										}
										break;
									case 'ERR':
									    console.log("IRLOG: waitStatus(), ERR");
										changeState('error-ajax');
										break;
									case 'WAIT':
									    console.log("IRLOG: waitStatus(), WAIT");
										if (noRefund && !isFrameLoaded && waitIndex <= 10) {
											waitStatus(1000, 1);
										} else if (waitIndex < 3) {
											waitStatus(3000);
										} else {
											waitStatus(10000);
										}
										waitIndex++;
										break;
									default:
								}
							}
						}
					}
				);
			}, timeout);
		});
	}

	function showState(state) {
		$('.payment-status').css({display: 'none'});
		$('#' + state).css({display: 'block'});
		resize();
	}

	function log(state) {
		var params = [];

		if (typeof state === 'string') {
			(new Image()).src = 'https://my.mail.ru/grstat?value=1&name=my.api.payments.' + state + '&r=' + Math.random();

			if (state.indexOf('error') >= 0) {
				if (byHearts) {
					(new Image()).src = 'https://my.mail.ru/grstat?value=1&name=my.api.payments.' + state + '.byHearts&r=' + Math.random();
				} else {
					(new Image()).src = 'https://my.mail.ru/grstat?value=1&name=my.api.payments.' + state + '.byMoney&r=' + Math.random();
				}
				if (!isApp) {
					(new Image()).src = 'https://my.mail.ru/grstat?value=1&name=my.api.payments.' + state + '.connect&r=' + Math.random();
				}

				params.push('state=' + state);
				params.push('loaded=' + isFrameLoaded);
				params.push('byHearts=' + byHearts);
				params.push('uid=' + options.userId);
				params.push('url=' + encodeURIComponent($iframe.prop('src')));
				params.push('r=' + Math.random());

				new Image().src = '//csp.my.mail.ru/jserr/payment-error?' + params.join('&');
			}
		}
	}

	function changeState(params) {
		var $dmr = $('.dmr');

		log(params);
        console.log("IRLOG: changeState(), params = " + params);

		switch (params) {
			case 'wait':
				$dmr.hide();

				$('.payment-status.visible').addClass('wait');

				/* billing.getStatByIssuerId РЅРµ СЂР°Р±РѕС‚Р°РµС‚ РґР»СЏ РїРѕРїРѕР»РЅРµРЅРёСЏ Р±Р°Р»Р°РЅСЃР° (РїРѕРєСѓРїРєРё РјРµР№Р»РёРєРѕРІ) */
				if (options.issuerId) {
					waitStatus();
				}

				resize();
				break;
			case 'success':
				utils.stat('487204');
				showState('payment-success');
				break;
			case "small-balance":
		    	utils.stat('487204');
				showState('payment-success');
				// console.log('small-balance', options.buyUrl + Math.random());
				// // TODO: СѓР±СЂР°Р» РїРѕРєР° Р”РњР  РЅРµ РїРѕС‡РёРЅРёС‚ РєРЅРѕРїРєСѓ "РћРїР»Р°С‚РёС‚СЊ". РџРѕРґСЂРѕР±РЅРµРµ РІ PMM-13894
				// showState('add-balance');
				// $iframe.attr('src', options.buyUrl + Math.random());
				break;
			case "addBalance":
				showState('add-balance');
				$iframe.attr('src', options.buyUrl + Math.random());
				break;
			case "error":
				utils.stat('487204');
				showState('payment-success');
				break;
			case "error-frame-load":
				utils.stat('487204');
				showState('payment-success');
				break;
			case "error-ajax":
				utils.stat('487204');
				showState('payment-success');
				break;
			case "close":
				closeWindow();
				break;
			default:
				closeWindow();
		}
		
		notifyApp();
	}

	if (window.addEventListener) {
		window.addEventListener('message', onMessage, false);
	} else {
		window.attachEvent("onmessage", onMessage);
	}

	$(function () {
		var isCloseClicked = false;
		byHearts = !!(findGetParameter(window.DMR.url, 'payed'));
		$iframe = $('<iframe>').appendTo('#dmr-iframe-container');
		$iframe.on('load', function () {
			isFrameLoaded = true;
		});

		dmrFrameTimer = setTimeout(function () {
			changeState('error-frame-load');
			isErrorFrameLoad = true;
		}, options.maxLoadTime);

		//РµСЃР»Рё РµСЃС‚СЊ С„Р»Р°Рі РІ РѕРЅР»Р°Р№РЅРєРѕС„Рµ, Рё РЅРµ РІРЅСѓС‚СЂРµРЅРЅСЏСЏ РїСЂРёР»РѕР¶СѓС…Р°, Рё РЅРµС‚ Р°Р№С„СЂРµР№РјР° Р”РњР 
		if (window.externalAppsPollingPay && !isApp && !$('#dmr-iframe-container').length) {
			clearTimeout(dmrFrameTimer);
			// РЅРµ Р¶РґС‘Рј РєРѕРјРµС‚С‹ РёР»Рё РїРѕСЃС‚РјРµСЃР°РґР¶Р° Р° С€Р»С‘Рј Р·Р°РїСЂРѕСЃС‹ РєР°Р¶РґСѓСЋ СЃРµРє
			waitStatus (1000, 1);
		}

		$iframe.attr('src', options.url + '&postdata=1&dmrid=' + getRandom());

		$('.close-button').on('click', function () {
			if (!isCloseClicked) {
				isCloseClicked = true;
				if (!isFrameLoaded) {
					log('error-close-before-load');
				}
				if (isErrorFrameLoad) {
					log('error-close-frame-load');
					isErrorFrameLoad = false;
				}
				log('close-cross');
			}
			utils.stat('487200');
			closeWindow();
		});

		$('.price').on('click', function () {
			$('#tooltip').fadeIn(150);
		});

		$('.close-tooltip').on('click', function(el){
			$(this).closest('#tooltip').fadeOut(150);
		});

	});
}(jQuery));