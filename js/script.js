$(document).ready(function(){
    
    // pagination on index site
    pagination();

    // set .list-warpper div equal max hight
    eqMaxHeightDiv(".list-warpper");

    
    $(".plus").click( function() {
        $(this).prev().val(+$(this).prev().val() + 1);  
    });

    $(".minus").click( function() {
        if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
    });

    paginationTable();

    setInterval(display, 1000);
    
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

function paginationTable() {
    var rowsShown = 4;
    var rowsTotal = $('#data tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#data tbody tr').hide();
    $('#data tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
}

function display()
{
    var today = new Date();
    var month = today.getMonth();
    var day = today.getDay();
    var year = today.getFullYear();

    var hour = today.getHours() > 12 ? today.getHours() - 12 : today.getHours();
    var minute = today.getMinutes();
    var seconds = today.getSeconds();

    var output = month + hour + ':' + minute + ':' + seconds;
    console.log(output);
    $("#example").text(output);
}