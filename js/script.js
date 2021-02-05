$(document).ready(function(){
    
    // pagination on index site
    pagination();

    // set .list-warpper div equal max hight
    eqMaxHeightDiv(".list-warpper");

});

function eqMaxHeightDiv(divName) {
    var maxHeight = 0;
    $(divName).each(function(){
        if ($(this).height() > maxHeight) { 
            maxHeight = $(this).height(); 
        }
    });
    $(divName).height(maxHeight);
}

function pagination() {
    var items = $('.list-warpper .list-item');
    var numberItems = items.length;
    var perPage = 4;
  
    items.slice(perPage).hide();
  
    $('.pagination').pagination({
        items:numberItems,
        itemsOnPage: perPage,
        prevText: '&laquo;',
        nextText: '&raquo;',
        displayedPages: 3,
        onPageClick: function(pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
}