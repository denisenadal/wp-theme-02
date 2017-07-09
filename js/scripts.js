// SVG HOVER EFFECTS //	
$(document).ready(function(){
$('#attachment-page').find('#menu-item-44').addClass('current-menu-parent');
$('nav polygon').attr("fill","hsla(174, 76%, 58%,1)").css({'transition': 'fill .3s'});
$('#index nav polygon, #contact nav polygon').attr("fill","#fff100");
$('#contact .current-menu-item polygon, .current-menu-item polygon, .current-menu-parent polygon').attr("fill","#EC008B");
$('#contact .current-menu-item polygon, .current-menu-item polygon').css({"filter":"url(#drop-shadow)"});
$(".menu-item").hover(
	function(){
		$(this).find("polygon").attr("fill","#fff100");
		$(this).find("polygon").css({"filter":"url(#drop-shadow)"});},
	function(){
		$(this).find("polygon").css({"filter":"none"});
		var status = $(this).hasClass("current-menu-item") || $(this).hasClass("current-menu-parent");
		if (status){
			$(this).find("polygon").attr("fill","#EC008B");
		}
		else{
			$(this).find("polygon").attr("fill","hsla(174, 76%, 58%,1)");
		}
	});
$('#index nav li, #contact nav li').hover(
	function(){
		$(this).find("polygon").attr("fill","hsla(174, 76%, 58%,1)");
		$(this).find("polygon").css({"filter":"url(#drop-shadow)"});},
	function(){
		$(this).find("polygon").css({"filter":"none"});
		var status = $(this).hasClass("current-menu-item")|| $(this).hasClass("current-menu-parent");
		if (status){
			$(this).find("polygon").attr("fill","#EC008B");
		}
		else{
			$(this).find("polygon").attr("fill","#fff100");
		}
	});
});

/*Text Resizer*/

var textResizer = function(container,extraPadding,textElement){
	if ($(container).is(":hidden") || $(textElement).is(":hidden")) {
		return;
	}
	
	function maxTextLength(){
		var strings = $(textElement).map(function(){
			return $(this).width();
		});
		var bigtext = Math.floor(Math.max.apply(Math, strings));
		console.log(bigtext);
		return bigtext;
	}
	console.log("beginning");
	var title_width = maxTextLength();
	console.log("initial text width: "+title_width);
	
	var box_width = parseInt($(container).css("width"));
	box_width -= extraPadding * 2;
	console.log("box width: "+box_width);
	
	var text_size = Math.floor(parseInt($(textElement).css("font-size")));
	if (title_width > box_width){
		do {
			text_size-=1;
			$(textElement).css("font-size",text_size+"px");
			$(textElement).css("line-height",toString(text_size+5)+"px");
			var title_width = maxTextLength();
		}
		while (title_width > box_width);
		console.log("complete shrinking, new text width: "+title_width);
		return;
	}
	else if (box_width > title_width){
		do {
			text_size+=1;
			$(textElement).css("font-size",text_size+"px");
			$(textElement).css("line-height",toString(text_size+5)+"px");
			var title_width = maxTextLength();
		}
		while (box_width > title_width);
		console.log("complete growth, new text width: "+title_width);
		return;
	}
	else{
	console.log("finished\n\n");
	}
}