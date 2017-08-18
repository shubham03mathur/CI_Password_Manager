$('.login-input').on('focus', function() {
  $('.login').addClass('focused');
});

$('.login-btn').on('click',function(e){
    e.preventDefault();
    $('.login').removeClass('focused').addClass('loading');
    $('.login-form').submit();
});