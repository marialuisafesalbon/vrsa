/* 
$(function() {
	var effects = 'animated bounce';
	var effectsEnd = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
	
	$('a.button').hover(function(){
		$(this).addClass(effects).one(effectsEnd, function(){
			$(this).removeClass(effects);
		});
	});
});
*/

$(function() {
	var effects = 'animated bounceInOut';
	var effectsEnd = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
	
	$('contactus').scroll(function(){
		$(this).addClass(effects).one(effectsEnd, function(){
			$(this).removeClass(effects);
		});
	});
});