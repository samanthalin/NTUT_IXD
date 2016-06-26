var $main = $('#pt-main'),
       $pages = $main.children('div.pt-page'),
       $iterate = $('#Page-Transition'),
       pagesCount = $pages.length,
       current = 0,
       isAnimating = false,
       endCurrPage = false,
       endNextPage = false,
       animEndEventNames = {
           'WebkitAnimation': 'webkitAnimationEnd',
           'OAnimation': 'oAnimationEnd',
           'msAnimation': 'MSAnimationEnd',
           'animation': 'animationend'
       },
       // animation end event name
       animEndEventName = animEndEventNames[Modernizr.prefixed('animation')],
       // support css animations
       support = Modernizr.cssanimations;

$pages.each(function () {
    var $page = $(this);
    $page.data('originalClassList', $page.attr('class'));
});

$pages.eq(current).addClass('pt-page-current');


function onEndAnimation($outpage, $inpage) {
    endCurrPage = false;
    endNextPage = false;
    resetPage($outpage, $inpage);
    isAnimating = false;
}

function resetPage($outpage, $inpage) {
    $outpage.attr('class', $outpage.data('originalClassList'));
    $inpage.attr('class', $inpage.data('originalClassList') + ' pt-page-current');
}


// -------------------------------------------------------------------------------------- // 
//                          loadNextPage
// -------------------------------------------------------------------------------------- //
function loadNextPage() {

    if (isAnimating) {
        return false;
    }

    isAnimating = true;

    var $currPage = $pages.eq(current);

    if (current < pagesCount - 1) {
        ++current;
    }
    else {
        current = 0;
    }

    var $nextPage = $pages.eq(current).addClass('pt-page-current'),
        outClass = 'pt-page-moveToRight', inClass = 'pt-page-moveFromLeft';


    $currPage.addClass(outClass).on(animEndEventName, function () {
        $currPage.off(animEndEventName);
        endCurrPage = true;
        if (endNextPage) {
            onEndAnimation($currPage, $nextPage);
        }
    });

    $nextPage.addClass(inClass).on(animEndEventName, function () {
        $nextPage.off(animEndEventName);
        endNextPage = true;
        if (endCurrPage) {
            onEndAnimation($currPage, $nextPage);
        }
    });

    if (!support) {
        onEndAnimation($currPage, $nextPage);
    }

}

// -------------------------------------------------------------------------------------- // 
//                          loadPreviousPage
// -------------------------------------------------------------------------------------- // 
function loadPreviousPage() {

    if (isAnimating) {
        return false;
    }

    isAnimating = true;

    var $currPage = $pages.eq(current);


    if (current == 0) {
        current = 2; //Number of pages - 1
    }
    else if (current <= pagesCount) {
        --current;
    }
    else {
        current = 0;
    }


    var $prevPage = $pages.eq(current).addClass('pt-page-current'),
        outClass = 'pt-page-moveToRight', inClass = 'pt-page-moveFromLeft';


    $currPage.addClass(outClass).on(animEndEventName, function () {
        $currPage.off(animEndEventName);
        endCurrPage = true;
        if (endNextPage) {
            onEndAnimation($currPage, $prevPage);
        }
    });

    $prevPage.addClass(inClass).on(animEndEventName, function () {
        $prevPage.off(animEndEventName);
        endNextPage = true;
        if (endCurrPage) {
            onEndAnimation($currPage, $prevPage);
        }
    });

    if (!support) {
        onEndAnimation($currPage, $prevPage);
    }

}

// -------------------------------------------------------------------------------------- // 
//                          Go to Sub-Pages
// -------------------------------------------------------------------------------------- // 
function gotoPage2(pagenumber) {

    if (current == pagenumber) { return true; }
    else {

        if (isAnimating) {
            return false;
        }

        isAnimating = true;

        var $currPage = $pages.eq(current);

        if (current != pagenumber) {
            current = pagenumber;
        }

        var $prevPage = $pages.eq(current).addClass('pt-page-current'),
			outClass = 'pt-page-scaleDown', inClass = 'pt-page-moveFromBottom  pt-page-ontop';


        $currPage.addClass(outClass).on(animEndEventName, function () {
            $currPage.off(animEndEventName);
            endCurrPage = true;
            if (endNextPage) {
                onEndAnimation($currPage, $prevPage);
            }
        });

        $prevPage.addClass(inClass).on(animEndEventName, function () {
            $prevPage.off(animEndEventName);
            endNextPage = true;
            if (endCurrPage) {
                onEndAnimation($currPage, $prevPage);
            }
        });

        if (!support) {
            onEndAnimation($currPage, $prevPage);
        }
    }

}

// -------------------------------------------------------------------------------------- // 
//                         Go to Menu Page
// -------------------------------------------------------------------------------------- // 
function gotoPage1(pagenumber) {

    if (current == pagenumber) { return true; }
    else {

        if (isAnimating) {
            return false;
        }

        isAnimating = true;

        var $currPage = $pages.eq(current);

        if (current != pagenumber) {
            current = pagenumber;
        }

        var $prevPage = $pages.eq(current).addClass('pt-page-current'),
			outClass = 'pt-page-scaleDown', inClass = 'pt-page-moveFromTop pt-page-ontop';


        $currPage.addClass(outClass).on(animEndEventName, function () {
            $currPage.off(animEndEventName);
            endCurrPage = true;
            if (endNextPage) {
                onEndAnimation($currPage, $prevPage);
            }
        });

        $prevPage.addClass(inClass).on(animEndEventName, function () {
            $prevPage.off(animEndEventName);
            endNextPage = true;
            if (endCurrPage) {
                onEndAnimation($currPage, $prevPage);
            }
        });

        if (!support) {
            onEndAnimation($currPage, $prevPage);
        }
    }

}






