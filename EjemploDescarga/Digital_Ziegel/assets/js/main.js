"use strict";

//Una página no se puede manipular de forma segura hasta que el documento esté "listo". 
//jQuery detecta este estado de preparación para usted. El código incluido en el interior

jQuery(document).ready(function ($) {
//Ejecuta una función cuando la página esté completamente cargada, incluidos los gráficos.
    $(window).load(function () {
        //load :establece el contenido HTML del elemento coincidente con los datos devueltos.
          // cambia gradualmente la opacidad
        $(".loaded").fadeOut();
        //método nos permite retrasar la ejecución de las funciones que lo siguen en la cola.
        //el slow suministrar para indicar duraciones de 200 y 600 milisegundos.
        $(".preloader").delay(1000).fadeOut("slow");
    });
    /*---------------------------------------------*
* Menú móvil


     ---------------------------------------------*/
     /*this:se refiere al objeto global.DOM 'Modelo de Objetos del Documento'.
     $(this)devuelve un objeto jQuery que lo envuelve.
     replace: busca una cadena para un valor específico, o una expresión regular , 
     y devuelve una nueva cadena donde se reemplazan los valores especificados.
     click:se puede usar para ejecutar un clic en un elemento como si el usuario hiciera clic en él manualmente.
     pathname:nombre de ruta
     slice:devuelve una copia de una parte del array dentro de un nuevo array empezando por inicio hasta fin (fin no incluido). 
     find: método nos permite buscar entre los descendientes de estos elementos en el árbol DOM y construir un nuevo objeto jQuery 
     a partir de los elementos coincidentes.
     animate:método nos permite crear efectos de animación en cualquier propiedad numérica de CSS. El único parámetro requerido 
     es un objeto simple de propiedades de CSS.*/
    $('#bs-example-navbar-collapse-1').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                     //establece o devuelve las coordenadas de desplazamiento para los elementos seleccionados, relativos al documento.
                    scrollTop: (target.offset().top - 0)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    //parents:devuelve un conjunto .
                    //trigger: permitir que la información se determine en el momento en que se desencadena el evento
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

//    $(".nav").localScroll();



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // activar animaciones en dispositivos móviles (el valor predeterminado es verdadero)
    });
    wow.init();


    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

    $('.statistic-counter').counterUp({
         //es un complemento jQuery liviano que cuenta hasta un número específico cuando el número se vuelve visible. retrasar 2s
        delay: 10,
        time: 2000
    });






    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

    $('.main_home_slider').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_comment_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_test_slid').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });



// main-menu-scroll

    jQuery(window).scroll(function () {
          //establece la posición vertical actual de la barra de desplazamiento para cada uno de los conjuntos de elementos coincidentes.
        var top = jQuery(document).scrollTop();
        var height = 300;
        //alert(batas);

        if (top > height) {
                   //Agrega la (s) clase (s) especificada (s) a cada elemento en el conjunto de elementos coincidentes.
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }
    });

// scroll Up

//vincula un controlador de eventos al evento de JavaScript "scroll" o activa ese evento en un elemento.
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });



//    $('#menu').slicknav();

    $('#mixcontent').mixItUp({
        animation: {
            animateResizeContainer: false,
            effects: 'fade rotateX(-45deg) translateY(-10%)'
        }
    });


    $('.dropdown-menu').click(function (e) {
        e.stopPropagation();
    });

    $('.main_portfolio_content').imagesLoaded(function () {
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
        });
    });

    //End
});

$(document).on("scroll", function () {
    if ($(document).scrollTop() > 120) {
        $("nav").addClass("small");
    } else {
        $("nav").removeClass("small");
    }
});