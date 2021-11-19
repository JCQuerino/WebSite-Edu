$(document).ready(function(){
    function dropMenu(){
        $('.btn-drop-menu').off().on('click',function(){
            $('.menu-mobile').slideToggle()
        })
    }
    dropMenu();
    function showArrowRunTheTop(){
        $(window).scroll(function(){
            let scrollTop = $(window).scrollTop();
            if (scrollTop > 250) {
                $('.run-the-top').css('display', 'flex');
            }else{
                $('.run-the-top').fadeOut(170);
            }
        })
    }
    showArrowRunTheTop()
    function runTheTop(){
        $('.run-the-top').off().on('click',()=>{
            window.scroll({
                behavior:'smooth',
                top:0,
            })
        })
    }
    runTheTop();
    function changeTheme(){
        let icons = document.querySelectorAll('.icons-theme-wrapper i');
        let html = document.querySelector('html');
        let iconSun = document.querySelector('[theme=light]');
        let iconMoon = document.querySelector('[theme=dark]');

        for(i = 0; i < icons.length; i++){
            icons[i].addEventListener('click',(t)=>{
                let theme = t.target.getAttribute('theme');
                if(theme === 'dark'){
                    t.target.style.display = 'none';
                    iconSun.style.display = 'block';
                    html.setAttribute('data-theme','dark');
                    document.querySelector('.logo img').setAttribute('src','images/logo_cedup_dark_theme.png');
                    document.querySelector('.edu-information .logo img').setAttribute('src','images/logo_cedup_dark_theme.png');
                }else{
                    t.target.style.display = 'none';
                    iconMoon.style.display = 'block';
                    html.setAttribute('data-theme','light');
                    document.querySelector('.logo img').setAttribute('src','images/logo_cedup_light_theme.png');
                    document.querySelector('.edu-information .logo img').setAttribute('src','images/logo_cedup_light_theme.png');
                }
            })
        }
    }
    changeTheme();

    function openInputSearch(){
        let iconSearch = document.querySelector('.icon-search');
        let divSearch = document.querySelector('.menu-desktop .input-search');
        iconSearch.addEventListener('click',()=>{
            if(divSearch.style.display === 'none'){
                divSearch.style.display = 'block';
            }else{
                divSearch.style.display = 'none';
            }
        })
    }
    openInputSearch();

    function openCursos(){
        let nextMenu = document.querySelectorAll('.open-next-ul');
        for(i = 0; i < nextMenu.length;i++){
            nextMenu[i].addEventListener('click',(t)=>{
                let teste = t.target.nextElementSibling;
                if(teste.style.display === 'none'){
                    teste.style.display = 'block';
                }else{
                    teste.style.display = 'none';
                }
            })
        }
    }
    openCursos();

    $('.box-edital-wrapper').slick({
        dots: true,
        arrows:false,
        speed:1000,
        slidesToShow: 3,
        slidesToScroll: 3,
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
})