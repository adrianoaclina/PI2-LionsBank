// LOGIN VIA AJAX
$(document).ready(function () {
	$('.mssg').hide(); //Esconde o elemento com id errolog
	$('.cpf').mask('000.000.000-00', { reverse: true });
	$('.tel').mask('(00) 00000-0000');
	$('#form-login').submit(function () { 	//Ao submeter formulário
		var login = $('#login-email').val();	//Pega valor do campo email
		var senha = $('#login-senha').val();	//Pega valor do campo senha
		$.ajax({			//Função AJAX
			url: "../Controllers/LoginController.php", //Arquivo php
			type: "post",				//Método de envio
			data: "login=" + login + "&senha=" + senha,	//Dados
			success: function (data) {
				//Sucesso no AJAX
				if (data == 1) {
					location.href = 'Dashboard.php'	//Redireciona
				} else {
					$('.mssg').show().addClass('animate');
					setTimeout(function () {
						$('.mssg').removeClass('animate');
					}, 2500);
				}
			}
		})
		return false;	//Evita que a página seja atualizada
	})
});
// LOGIN TABS
$(function () {
	var tab = $('.tabs h3 a');
	tab.on('click', function (event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');
		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
// SLIDESHOW
$(function () {
	$('#slideshow > div:gt(0)').hide();
	setInterval(function () {
		$('#slideshow > div:first')
			.fadeOut(200)
			.next()
			.fadeIn(200)
			.end()
			.appendTo('#slideshow');
	}, 3850);
});
// CUSTOM JQUERY FUNCTION FOR SWAPPING CLASSES
(function ($) {
	'use strict';
	$.fn.swapClass = function (remove, add) {
		this.removeClass(remove).addClass(add);
		return this;
	};
}(jQuery));
// SHOW/HIDE PANEL ROUTINE (needs better methods)
// I'll optimize when time permits.
$(function () {
	$('.agree,.forgot, #toggle-terms, .log-in, .sign-up').on('click', function (event) {
		event.preventDefault();
		var terms = $('.terms'),
			recovery = $('.recovery'),
			close = $('#toggle-terms'),
			arrow = $('.tabs-content .fa');
		if ($(this).hasClass('agree') || $(this).hasClass('log-in') || ($(this).is('#toggle-terms')) && terms.hasClass('open')) {
			if (terms.hasClass('open')) {
				terms.swapClass('open', 'closed');
				close.swapClass('open', 'closed');
				arrow.swapClass('active', 'inactive');
			} else {
				if ($(this).hasClass('log-in')) {
					return;
				}
				terms.swapClass('closed', 'open').scrollTop(0);
				close.swapClass('closed', 'open');
				arrow.swapClass('inactive', 'active');
			}
		}
		else if ($(this).hasClass('forgot') || $(this).hasClass('sign-up') || $(this).is('#toggle-terms')) {
			if (recovery.hasClass('open')) {
				recovery.swapClass('open', 'closed');
				close.swapClass('open', 'closed');
				arrow.swapClass('active', 'inactive');
			} else {
				if ($(this).hasClass('sign-up')) {
					return;
				}
				recovery.swapClass('closed', 'open');
				close.swapClass('closed', 'open');
				arrow.swapClass('inactive', 'active');
			}
		}
	});
});
// DISPLAY MSSG
$(function () {
	$('.recovery .button').on('click', function (event) {
		event.preventDefault();
		$('.recovery .mssg').addClass('animate');
		setTimeout(function () {
			$('.recovery').swapClass('open', 'closed');
			$('#toggle-terms').swapClass('open', 'closed');
			$('.tabs-content .fa').swapClass('active', 'inactive');
			$('.recovery .mssg').removeClass('animate');
		}, 2500);
	});
});


