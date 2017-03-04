$('.navbar .dropdown-toggle').hover(function() {
  	$(this).addClass('disabled');
});

$('.navbar .dropdown-toggle').hover(function() {
  	if (document.documentElement.clientWidth > 769) { $(this).addClass('disabled');}
  	else { $(this).removeClass('disabled'); }
});