// hover option for menuOption - normal devices
function menuOption_hover_ModeOff (a) {
	$(a + '> .menuOption-Animation_T').removeClass('menuOption-Animation_enabled')
	$(a + '> .menuOption-Animation_B').removeClass('menuOption-Animation_enabled')
}
function menuOption_hover_ModeOn (a) {
	$(a + '> .menuOption-Animation_T').addClass('menuOption-Animation_enabled')
	$(a + '> .menuOption-Animation_B').addClass('menuOption-Animation_enabled')
}
function menuOption_hoverEnable(obj) {
	// 'where' is the div where we put those event in 
	// 'obj' is the div which those code applies in
	// 'clsName' is the class name which is added in div obj
	// ** for jquery we will add '.' **
	obj='.'+obj

	$(obj).mouseover(
		function () {
			menuOption_hover_ModeOn(obj);
		}
	);
	$(obj).mouseleave(
		function () {
			menuOption_hover_ModeOff(obj);
		}
	);
	//$(where).bind("touchstart",hover_ModeOn(obj));
}

// hover option for right navigator
function rightNav_hover_ModeOff(cls,clsName){
	$(cls).removeClass(clsName)
}
function rightNav_hover_ModeOn(cls,clsName){
	$(cls).addClass(clsName)
}

function rightNav_hoverEnable(where, obj, clsName) {
	// 'where' is the div where we put those event in 
	// 'obj' is the div which those code applies in
	// 'clsName' is the class name which is added in div obj
	if (obj=="") obj=where;
	// for jquery we will add '.'
	where='.'+where; obj='.'+obj

	$(where).mouseover(
		function () {
			rightNav_hover_ModeOn(obj,clsName);
		}
	);
	$(where).mouseleave(
		function () {
			rightNav_hover_ModeOff(obj,clsName);
		}
	);
	//$(where).bind("touchstart",hover_ModeOn(obj));
}

// search suggestion box
function resizeSuggestionBox() {
	// position
	let extra = $('.websiteNavigationBar-NormalDevice-RightSide').width();
	$('.searchSuggestions').css("transition","0s");
	$('.searchSuggestions').css("position","absolute");
	$('.searchSuggestions').css("right",extra + 35);
	$('.searchSuggestions').css("top",70);
	// width
	let plusExtra = ($(window).width()<767) ? 55 : 0;
	$('.searchSuggestions').css("width",$('.websiteNavigationBar-RightNavigation').width() + 52.5 + plusExtra);
}

// toggle menuOption for all devices
function menuOption_ModeOn() {$('.menuOption').attr("status",0);$('.menuOption').addClass('menuOption-Opened')}
function menuOption_ModeOff() {$('.menuOption').attr("status",1);$('.menuOption').removeClass('menuOption-Opened')}
function activateMenuOption() {
	if ($('.menuOption').attr("status")==1) {
		menuOption_ModeOn()
	} else {
		menuOption_ModeOff()
	}
}

// excute code when loading pages obviously
	// hover options
	$(window).load(function (){
		//yellow navigator
		rightNav_hoverEnable('websiteNavigationBar-NormalDevice-Controls-1','menuBar-NavTextFormat-1','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('websiteNavigationBar-NormalDevice-Controls-2','menuBar-NavTextFormat-2','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('websiteNavigationBar-NormalDevice-Controls-3','menuBar-NavTextFormat-3','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('websiteNavigationBar-NormalDevice-Controls-4','menuBar-NavTextFormat-4','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('websiteNavigationBar-Home','menuBar-NavTextFormat-Home-Img','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('websiteNavigationBar-Search','websiteNavigationBar-Search-Img','menuBar-NavTextFormat-Hover');
		rightNav_hoverEnable('searchSuggestions-viewMore','searchSuggestions-viewMore-Icon','searchSuggestions-viewMore-Animation');
		// menu option
		let char = ["","deku","shoto", "bakugo", "allmight", "aizawa", "kirishima" ,"uraraka", "ida", "hawks","kaminari", "tsuyu", "sero", "mic", "tamaki", "lemillion", "nejire"]
		for (i=1;i<=char.length-1;i++) {
			path = '/assets/images/char_yellow/'+char[i]+'.png'
			str = 'menuOption-' + i;
			menuOption_hoverEnable(str);
			$('.' + str + '> .menuOption-Content > .menuOption-Content-Icon > div').css("background-image", 'url(' + path + ')')
		}

	});

	//resize search suggestion box
	$(window).load(function() {resizeSuggestionBox()});
	$(window).resize(function() {resizeSuggestionBox()});

