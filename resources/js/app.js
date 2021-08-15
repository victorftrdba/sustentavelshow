require('./bootstrap');

// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"

  document.getElementById("dias").innerHTML ="<div class='font-2 ms-lg-4'>" + days + "</div>" + "<div class='dias ms-lg-4'>dias</div>";
  document.getElementById("horas").innerHTML = "<div class='font-2 ms-lg-4'>" + hours + "</div>" + "<div class='horas ms-lg-4'>horas</div>";
  document.getElementById("minutos").innerHTML = "<div class='font-2 ms-lg-4'>" + minutes + "</div>" + "<div class='min ms-lg-4'>min</div>";
  document.getElementById("segundos").innerHTML = "<div class='font-2 ms-lg-4'>" + seconds + "</div>" + "<div class='seg ms-lg-4'>seg</div>";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EVENTO INICIADO";
  }
}, 0);

  // core version + navigation, pagination modules:
  import SwiperCore, { Navigation, Pagination, Swiper, EffectCoverflow } from 'swiper/core';

  // configure Swiper to use modules
  SwiperCore.use([Navigation, Pagination, EffectCoverflow]);

  // init Swiper:
  const swiper = new Swiper('.one', {
    // Optional parameters
    direction: 'horizontal',
    parallax:true,
    slidesPerView: 3.5,
    spaceBetween:20,
    autoplay: true,
    simulateTouch:true,
    breakpoints: {
        300: {
            slidesPerView:1,
            spaceBetween: 20
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        1200: {
            slidesPerView:'auto',
        }
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.next',
      prevEl: '.prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  const swiper1 = new Swiper('.two', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 4,
    spaceBetween:10,
    autoplay: true,
    initialSlide: 1,
    simulateTouch:true,
    breakpoints: {
        300: {
            slidesPerView:1,
            spaceBetween:30,
        },
        768: {
            slidesPerView:2,
            spaceBetween:30,
        },
        1024: {
            slidesPerView:3,
        },
        1200: {
            slidesPerView:4,
        }
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.two-next',
      prevEl: '.two-prev',
    },
  });

    const swiper2 = new Swiper('.three', {
    // Optional parameters
    direction: 'horizontal',
    parallax:true,
    loop:true,
    slidesPerView: 1,
    spaceBetween:40,
    autoplay: true,
    simulateTouch:true,
  });
