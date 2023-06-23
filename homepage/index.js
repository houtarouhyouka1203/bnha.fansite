function responsiveAnimePoster() {
	if (isMobile()==0) {
		$('.animePosterImage').addClass('-mobileDevice-animePosterImage')
	}
}

$(window).load(function() {
	responsiveAnimePoster()
	$(window).load(activateMenuOption())
})