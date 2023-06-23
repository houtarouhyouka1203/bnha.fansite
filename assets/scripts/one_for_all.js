function isMobile() {if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WPDesktop/i) != null) return 0; else return 1;}

function isAltMode() {if (window.innerWidth<=767) {return 0} else {return 1}}

function dragSlide(obj) {
    var slideObjectTarget = "." + obj
    // var $swiper = $(slideObjectTarget);
    // var $bottomSlide = null;
    // var $bottomSlideContent = null;
    var mySwiper = new Swiper(slideObjectTarget, {
        direction: 'vertical',
        slidesPerView: 'auto',
        slidesPerGroup: 1,
        centeredSlides: false,
        roundLengths: false,
        loop: false
    }); 
}

function isTouchDevice() {
    return (('ontouchstart' in window) ||
        (navigator.maxTouchPoints > 0) ||
        (navigator.msMaxTouchPoints > 0));
}

function sleep(miliseconds) {
    var currentTime = new Date().getTime();
    while (currentTime + miliseconds >= new Date().getTime()) {
    }
}

// "show or hide the scrollup button">
function showScrollUpButton() {
    if (window.scrollY > 100) {
        $(".websiteTopPage-topPageButton").addClass("websiteTopPage-topPageButton-showup")
    } else if (window.scrollY == 0) {
        setTimeout(function () {buttonHover(['button','border','img','caption'],'off','websiteTopPage-topPageButton');},600);
    } else {
        $(".websiteTopPage-topPageButton").removeClass("websiteTopPage-topPageButton-showup");
    }
}
function getd() {
    if (window.scrollY > 100) {
        buttonHover(['button','border','img','caption'],'on','websiteTopPage-topPageButton');
    }
}
window.onscroll = showScrollUpButton
$('.websiteTopPage-topPageButton').onmouseover = getd()

// "hover events for buttons"
function hoverEvent (type, mode, prefix) {
    switch (mode) {
        case 'on': 
            switch (type) {
                case 'button': 
                    $('.' + prefix + '-Hover1').addClass('buttonHover');
                    $('.' + prefix + '-Hover2').addClass('buttonHover');
                    break;
                case 'border': 
                    $('.' + prefix + '').addClass('buttonBorder');
                    break;
                case 'img': 
                    $('.' + prefix + '-IconBG').addClass('buttonImg');
                    break;
                case 'caption': 
                    $('.' + prefix + '-Caption').addClass('buttonCaption');
                    break;
            }
            break;
        case 'off': 
            switch (type) {
                case 'button': 
                    $('.' + prefix + '-Hover1').removeClass('buttonHover');
                    $('.' + prefix + '-Hover2').removeClass('buttonHover');
                    break;
                case 'border': 
                    $('.' + prefix + '').removeClass('buttonBorder');
                    break;
                case 'img': 
                    $('.' + prefix + '-IconBG').removeClass('buttonImg');
                    break;
                case 'caption': 
                    $('.' + prefix + '-Caption').removeClass('buttonCaption');
                    break;
            }
            break;
    }
}
function buttonHover(list, mode, prefix) {
    switch (mode) {
        case 'on' : 
            for (i=0;i<list.length;i++) {
                hoverEvent(list[i],'on',prefix);
            }
            break;
        case 'off': 
            for (i=0;i<list.length;i++) {
                hoverEvent(list[i],'off',prefix);
            }
            break;
    }        
}   


// this s.cript is used to make responsive bar. since css cant do it, ill do it using javascript
function resizeTwoAnchorOfNavigatorBar() {
    newsize = ( $('.websiteNavigationBar-NormalDevice').width() - $('.websiteNavigationBar-NormalDevice-MainSide').width()) / 2
    $('.websiteNavigationBar-NormalDevice-RightSide').css("width",newsize)
    $('.websiteNavigationBar-NormalDevice-LeftSide').css("width",newsize)
}
$(window).load(resizeTwoAnchorOfNavigatorBar)
$(window).resize(resizeTwoAnchorOfNavigatorBar)
