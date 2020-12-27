$(function(){


    $(window).on('scroll', function(){
       if ($(window).scrollTop()){
           $('nav').addClass('shrink');
       }else{
        $('nav').removeClass('shrink');
       }
    });



    $(window).on('scroll', function(){
        if ($(window).scrollTop()){
            $('.nav-menu').addClass('fallow');
        }else{
         $('.nav-menu').removeClass('fallow');
        }
     });


     $('.burger').on('click', function(){
         console.log('hey====>');
         $('.nav-menu').toggleClass('togg');
     });

     $('.sub-title').hover( function(){
        $('.sub-title').hover(function(){
            $('.hr').css('width', '30%');
        },function(){
            $('.hr').css('width', '10%')
        });
     });

    $('.modalBtn').on('click', function() {
        // $('.modal').css('display', 'flex');
        var modalElements = $(this).attr ('data-modals');
        $('#' + modalElements).toggle();
    });
    $('.hidden').on('click', function(){
        $('.modal').fadeOut();
    });
    //  $('.elementItems').on('click', function() {
    //     var elemId = $(this).attr('data-elemid');
    //     $('#' + elemId).toggle();
    //  });

    // $.ajax({
    //     type: 'GET',
        
    // });
});
