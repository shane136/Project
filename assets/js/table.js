$(function() {
    getpagination(10);
});
var table = '#dataTable';
$('#maxRows').on('change', function() {
    var maxrow = parseInt($(this).val());
    if (parseInt($(this).val()) == 5000) {
        maxrow = 10;
    }
    getpagination(maxrow);
});

function activePage() {
	var $el = $('[data-page].active');
  
  if($el.length) {
  	return $el.data('page');
  }

	return 0; // just needs to not exist so finder fails
}

$(function() {
  $('.prev-btn, .next-btn').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation(); // prevent the parent event from firing
    
    var page = activePage() + ($(event.target).hasClass('prev-btn') ? -1 : 1);
    
    $('[data-page="' + page + '"]').trigger('click');
  });
})

function getpagination(maxows) {
    $('table tr:eq(0)').prepend('<th>No</th>');
    var id = 0;
    $('table tr:gt(0)').each(function() {
        id++;
        $(this).prepend('<td> ' + id + '</td>');
    })
    $('.pagination').html('')
    var trnum = 0;
    var maxrows = maxows;
    var totalrows = $(table)[0].rows.length;
    $(table + ' tr:gt(0)').each(function() {
        trnum++;
        if (trnum > maxrows) {
            $(this).hide()
        }
        if (trnum <= maxrows) {
            $(this).show();
        }
    });
    //if(totalrows > maxrows){
    var pagenum = Math.ceil(totalrows / maxrows);
    $('.pagination').append('<li class="page-item"><a class="page-link prev-btn" href="#">Previous</a></li>').show();
    for (var i = 1; i <= pagenum; i++) {
        $('.pagination').append('<li class="page-item" data-page="' + i + '"><a class="page-link" href="#">' + i + '</a></li>').show();
    }
    $('.pagination').append('<li class="page-item"><a class="page-link next-btn" href="#">Next</a></li>').show();
    //}
    $('.pagination li:first-child').addClass('active');
    $('.pagination li').on('click', function() {
        var pagenum = $(this).attr('data-page');
        var trIndex = 0;
        $('.pagination li').removeClass('active');
        $(this).addClass('active');
        $('table tr:gt(0)').each(function() {
            trIndex++;
            if (trIndex > (maxrows * pagenum) || trIndex <= ((maxrows * pagenum) - maxrows)) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
};