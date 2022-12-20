
(function($){
    $('#sharifcat').mouseover(function(e){
        e.preventDefault();
        $('.sharif').fadeToggle();
        $('.rita').css('background-color' , '#336699');
        $('.rita').css('color' , 'white');

    });

    $('.sharif').mouseleave(function(){
            $('.sharif').hide();
            $('.rita').css('color' , '');
            $('.rita').css('background-color' , '');
        });
    
})(jQuery)
