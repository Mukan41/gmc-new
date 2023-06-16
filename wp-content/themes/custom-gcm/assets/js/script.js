// Swiper Slider
var swiper = new Swiper(".mySwiperslide", {
    spaceBetween: 30,
    effect: "fade",
    speed: 1000,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
    },
});
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
    },
});
var swiper = new Swiper(".projectswiper", {
    // direction: "horizontal",
    slidesPerView: 5,
    spaceBetween: 50,
    speed: 1000,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        250: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        576: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});



// GSAP

gsap.to(".hero-scroll-images-wrapper", {
    xPercent: 700,
    x: () => innerWidth,
    ease: "none",
    scrollTrigger: {
        trigger: ".hero-scroll-images-wrapper",
        start: "top bottom",
        end: () => innerWidth * 18,
        scrub: true,
        // pin: true,
        invalidateOnRefresh: true,
        anticipatePin: 1,
        // markers: true,
    },

});
gsap.to(".hero-section", {
    scrollTrigger: {
        trigger: ".hero-section",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        // markers: true
    },
    backgroundPosition: "100",
    ease: "none"
});
gsap.to(".about-section", {
    scrollTrigger: {
        trigger: ".about-section",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        // markers: true
    },
    backgroundPosition: "100",
    ease: "none"
});
gsap.to(".fresh-ideas-section", {
    scrollTrigger: {
        trigger: ".fresh-ideas-section",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        // markers: true
    },
    backgroundPosition: "100",
    ease: "none"
});
gsap.to(".testimonial-section", {
    scrollTrigger: {
        trigger: ".testimonial-section",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        // markers: true
    },
    backgroundPosition: "100",
    ease: "none"
});






ScrollTrigger.matchMedia({
    '(min-width:768px)': function () {

        gsap.to(".rotation-one-img", {
            ease: "none",
            rotation: 360,
            scrollTrigger: {
                trigger: ".hero-scroll-images-wrapper",
                start: "top bottom",
                end: () => innerWidth * 7,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1,
                // markers: true,
            },

        });
        gsap.to(".rotation-two-img", {
            ease: "none",
            rotation: -360,
            scrollTrigger: {
                trigger: ".hero-scroll-images-wrapper",
                start: "top bottom",
                end: () => innerWidth * 12,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1,
                // markers: true,
            },

        });
        gsap.to(".rotation-three-img", {
            ease: "none",
            rotation: 360,
            scrollTrigger: {
                trigger: ".hero-scroll-images-wrapper",
                start: "top bottom",
                end: () => innerWidth * 10,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1,
                // markers: true,
            },

        });
        gsap.to(".scroll-para", {
            xPercent: 100,
            x: () => innerWidth,
            ease: "none",
            scrollTrigger: {
                trigger: ".scroll-para",
                start: "top bottom",
                end: () => innerWidth * 10,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1
            }
        });
        gsap.to(".scroll-para-last", {
            xPercent: -100,
            x: () => innerWidth,
            ease: "none",
            scrollTrigger: {
                trigger: ".scroll-para-last",
                start: "top bottom",
                end: () => innerWidth * 10,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1
            }
        });

    },
    '(max-width:767px)': function () {

        gsap.to(".hero-scroll-image", {
            ease: "none",
            rotation: 360,
            scrollTrigger: {
                trigger: ".hero-scroll-images-wrapper",
                start: "top center",
                end: () => innerWidth * 15,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1,
                // markers: true,
            },

        });
        gsap.to(".scroll-para", {
            xPercent: 100,
            x: () => innerWidth,
            ease: "none",
            scrollTrigger: {
                trigger: ".scroll-para",
                start: "top bottom",
                end: () => innerWidth * 15,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1
            }
        });
        gsap.to(".scroll-para-last", {
            xPercent: -100,
            x: () => innerWidth,
            ease: "none",
            scrollTrigger: {
                trigger: ".scroll-para-last",
                start: "top bottom",
                end: () => innerWidth * 15,
                scrub: true,
                // pin: true,
                invalidateOnRefresh: true,
                anticipatePin: 1
            }
        });

    }
})




particlesJS("particles-js", {"particles":{"number":{"value":140,"density":{"enable":true,"value_area":600}},"color":{"value":"#39d29a"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#39d29a","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;






