$(document).ready(function(){
    const showMenu = (toggleId,navId,sidebar) =>{
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            mainSidebar = document.getElementById(sidebar);

        if(toggle && nav && mainSidebar){
            toggle.addEventListener('click', () =>{
                toggle.classList.toggle("is-active");
                nav.classList.toggle('show');
                mainSidebar.classList.toggle('display-block');
            })
        }

    }

    showMenu('hamburger','main-nav','main-sidebar');

    //Esconde las opciones de usuario
    let marcador = $('.marcador');
    for(let marca of marcador){
        $(marca).removeClass('active');
    }
    $(this).addClass('active');

    $('#btn_usuario').click(function(){
        if($('.sidebar__user').hasClass('display-none')){
            $('.sidebar__user').removeClass('display-none');
            $('.sidebar__user-child').css('display','grid');

        }else{
            $('.sidebar__user:nth-child(2)').addClass('display-none');
            $('.sidebar__user:nth-child(3)').addClass('display-none');
            $('.sidebar__user:nth-child(4)').addClass('display-none');
        }
    });

    // Pagination DDD
});







