function activateSearchBar(){
	if ($('.websiteNavigationBar-Search').attr("status")==1) {
		$('.websiteNavigationBar-Search').attr("status", 0) 
		$('.websiteNavigationBar-NormalDevice-Controls-SearchBox').addClass('searchActivated')
		$('.menuBar-NavTextFormat-Search-Icon').addClass('searchClicked')
	} else {
		$('.websiteNavigationBar-Search').attr("status", 1)
		$('.websiteNavigationBar-NormalDevice-Controls-SearchBox').removeClass('searchActivated')
		$('.menuBar-NavTextFormat-Search-Icon').removeClass('searchClicked')
	}
}

function activateSearchSuggestion(){
	if (checkExistSuggestion()==true) $('.searchSuggestions').addClass('searchSuggestions-Opened')
}
function deactivateSearchSuggestion(){
	$('.searchSuggestions').removeClass('searchSuggestions-Opened')
}

// search suggestion
function checkExistSuggestion() {
	// let li = ['','','','']
	// for (var i = 0; i < li.length; i++) {
	// 	li[i]
	// }
	return false;
}



