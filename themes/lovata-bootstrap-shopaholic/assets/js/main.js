"use strict";$(document).ready(function(){$(".header__buton-drop").on("click",function(){$(".header__submenu").toggleClass("is-active")}),$(".hamburger_trigger").on("click",function(){$(".header__menu").addClass("is-active")}),$(".header__button-close").on("click",function(){$(".header__menu").removeClass("is-active")});var e=$(".basket__input-price"),s=$(".basket__input-amount"),t=$(".basket__btnplus"),a=$(".basket__btnminus"),i=$(".basket__input-total"),n=$(".basket__btn-del"),o=$(".basket__clear"),r=$(".basket__total-resident"),_=$(".basket__total-order");function c(t){var a=0,e=parseInt($('.basket__radio-input[checked="checked"]').val());$(".basket__input-total").each(function(){a+=parseInt($(this).val()),r.val(a),_.val(a+e)})}function l(t){var a=t.currentTarget.innerHTML;"+"==a?($(this).parent().siblings(".basket__input-amount").val(parseInt($(this).parent().siblings(".basket__input-amount").val())+1),$(this).parents(".basket__product").find(i).val(parseInt($(this).parents(".basket__product").find(s).val()*$(this).parents(".basket__product").find(e).val()))):"-"==a&&($(this).parent().siblings(".basket__input-amount").val()<=1||($(this).parent().siblings(".basket__input-amount").val(parseInt($(this).parent().siblings(".basket__input-amount").val())-1),$(this).parents(".basket__product").find(i).val(parseInt($(this).parents(".basket__product").find(s).val()*$(this).parents(".basket__product").find(e).val())))),c()}function p(){$(".basket__table").remove(),$(".basket__none").css("display","block")}c(),t.on("click",l),a.on("click",l),s.change(function(){$(this).val()<=0&&$(this).val(1),$(this).parents(".basket__product").find(i).val(parseInt($(this).val()*$(this).parents(".basket__product").find(e).val())),c()}),n.on("click",function(){$(this).parents(".basket__product").remove(),$(".basket__products div").hasClass("basket__product")?c():p()}),$("div").is(".basket__table")&&$(".basket__none").css("display","none"),o.on("click",p),$(".basket__radio-input").on("click",function(){$(this).attr("checked",!0),$(this).parent().siblings(".basket__radio").find($(".basket__radio-input")).attr("checked",!1),c()});var d=$(".easyzoom").easyZoom(),u=d.filter(".easyzoom--with-thumbnails").data("easyZoom");$(".thumbnails").on("click","a",function(t){var a=$(this);t.preventDefault(),u.swap(a.data("standard"),a.attr("href"))});var v=d.filter(".easyzoom--with-toggle").data("easyZoom");$(".toggle").on("click",function(){var t=$(this);!0===t.data("active")?(t.text("Switch on").data("active",!1),v.teardown()):(t.text("Switch off").data("active",!0),v._init())}),$(".info__btn").on("click",function(t){var a=t.currentTarget.innerHTML;"+"==a?$(this).parent().siblings(".info__counter-input").val(parseInt($(this).parent().siblings(".info__counter-input").val())+1):"-"==a&&($(this).parent().siblings(".info__counter-input").val()<=1||$(this).parent().siblings(".info__counter-input").val(parseInt($(this).parent().siblings(".info__counter-input").val())-1))}),$(".info__counter-input").change(function(){$(this).val()<=0?$(this).val(1):$(this).val($(this).val())}),$(".store__drop").on("click",function(){$(".store__sorting-icon").toggleClass("is-active"),$(".store__list-ul").toggleClass("is-active")}),$(".store__list-li").click(function(t){t.preventDefault(),$(this).parent().siblings(".store__text").text($(this).text()),$(".store__sorting-icon").toggleClass("is-active"),$(".store__list-ul").toggleClass("is-active"),$(".store__list-li").removeClass("active"),$(this).addClass("active")}),$(".order__pay-radio").on("click",function(){$(this).parents(".order__pay-radios").find(".order__pay-radio").attr("checked",!1),$(this).attr("checked",!0);var t=$("#pay-free"),a=$("#pay-elmoney"),e=$("#pay-cart");t.attr("checked")?($(".order__pay-free").addClass("pay-active"),$(".order__pay-elsom").removeClass("pay-active"),$(".order__pay-cart").removeClass("pay-active")):a.attr("checked")?($(".order__pay-free").removeClass("pay-active"),$(".order__pay-elsom").addClass("pay-active"),$(".order__pay-cart").removeClass("pay-active")):e.attr("checked")&&($(".order__pay-free").removeClass("pay-active"),$(".order__pay-elsom").removeClass("pay-active"),$(".order__pay-cart").addClass("pay-active"))}),$(".products__slider ").owlCarousel({loop:!0,margin:10,responsive:{0:{items:1}}}),$(".info__thumbnails").owlCarousel({nav:!0,navText:['<i class="icon-left info__icon">','<i class="icon-right info__icon">'],dots:!1,responsive:{0:{items:3}}}),$(".newproduct__products").owlCarousel({dots:!1,nav:!0,navText:['<i class="icon-left product__icon">','<i class="icon-right product__icon">'],responsive:{0:{items:1},768:{items:2},1140:{items:3}}})});


$(".basket__btn-pay").click(function(event) {
	$("#order-page").show('slow/400/fast', function() {

		
	});
	$(".basket").hide();
});