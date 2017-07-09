// SVG HOVER EFFECTS //	
$(document).ready(function(){
$('nav svg polygon').attr("fill","hsla(174, 76%, 58%,1)").css({'transition': 'fill .3s'});
$('#index nav svg polygon, #contact nav svg polygon').attr("fill","#fff100");
$('#contact nav .nav-active svg polygon, nav .nav-active svg polygon').attr("fill","#EC008B");
$('#contact nav .nav-active svg polygon, nav .nav-active svg polygon').css({"filter":"url(#drop-shadow)"});
$("nav li").hover(
	function(){
		$(this).find("polygon").attr("fill","#fff100");
		$(this).find("polygon").css({"filter":"url(#drop-shadow)"});},
	function(){
		$(this).find("polygon").css({"filter":"none"});
		var status = $(this).hasClass("nav-active");
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
		var status = $(this).hasClass("nav-active");
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
			return
		}
		var maxTextLength = function(){
			var strings = $(textElement).map(function(){
				return $(this).width();
			}).get();
			return Math.max.apply(Math, strings);
		};
		var title_width = maxTextLength();
		console.log("initial text width: "+title_width);
		var box_width = parseInt($(container).css("width"));
		box_width -= extraPadding * 2;
		console.log("box width: "+box_width);
		var text_size = Math.floor(parseInt($(textElement).css("font-size")));
		if (title_width > box_width){
			while (title_width > box_width){
				text_size-=1;
				$(textElement).css("font-size",text_size+"px");
				$(textElement).css("line-height",text_size+5+"px");
				var title_width = maxTextLength();
			}
			console.log("complete shrinking, new text width: "+title_width);
		}
		else if (box_width > title_width){
			while (box_width > title_width){
				text_size+=1;
				$(textElement).css("font-size",text_size+"px");
				$(textElement).css("line-height",text_size+5+"px");
				var title_width = maxTextLength();
			}
			console.log("complete growth, new text width: "+title_width);
		}
		console.log("finished\n\n");
	}