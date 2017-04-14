
	$('.variantsMenu li').click(function() {
		$('.active').removeClass('active');
		$('.examples .item').removeClass('active');
    $(this).addClass('active');
    $('.codeContainer .codeIndiv').removeClass('active');
		var variant = $(this).data('slug');
		$('.' + variant).addClass('active');
	});
  $('.usethis').click(function() {
		$('.codeContainer .codeIndiv').removeClass('active');
    $('.codeContainer').addClass('active');
        $('.usethis').removeClass('active');
        $(this).addClass('active');
		var code = $(this).data('slug');
		$('.' + code).addClass('active');
	});
  $('.ion-ios-close-empty').click(function() {
    $('.codeContainer .codeIndiv').removeClass('active');
    $('.codeContainer').removeClass('active');
    $('.usethis').removeClass('active');
  });
