$(document).ready(function(){
    function dropMenu(){
        $('.btn-drop-menu').off().on('click',function(){
            $('.menu').slideToggle()
        })
    }
    dropMenu();
    $(window).on('resize',()=>{
        if(window.innerWidth > 1070){
            $('.menu').css('display','block');
        }
    })
    function runTheTop(){
        $('.run-the-top').off().on('click',()=>{
            window.scroll({
                behavior:'smooth',
                top:0,
            })
        })
    }
    runTheTop();
    function verifyEmail(){
        $('#send-request').off().on('click',(e)=>{
            e.preventDefault();
            var input = $('#text-email');
            var email = input.val().length;
            if(email >= 10){
                setTimeout(function() {
                    document.querySelector('.emailenviado').style.display = 'block';
                    setTimeout(function() {
                        document.querySelector('.emailenviado').style.display = 'none';
                    },4000)
                },100)
            }else{
                setTimeout(function() {
                    document.querySelector('.wrong-email').style.display = 'flex';
                    setTimeout(function() {
                        document.querySelector('.wrong-email').style.display = 'none';
                    },4000)
                },100)
            }
            input.val('');
        })
    }
    verifyEmail();
    $('.box-reviews-wrapper').slick({
        dots: true,
        arrows:false,
        speed:1000,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:false,
        responsive: [
            {
              breakpoint: 850,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }],
    });
    $('.training-wrapper-2').slick({
        dots: true,
        arrows:false,
        speed:1000,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:false,
        vertical:true,
        verticalSwiping: true,
        responsive: [
            {
              breakpoint: 850,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }],
    })
})