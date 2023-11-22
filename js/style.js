
$('.Carousel1').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    dots: false,
    responsive: {
        0: {
            nav: false
        },
        992: {
            nav: true
        }
    }
})
$('.Carousel2').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 4
        },
        770: {

            items: 6
        },
        1200: {

            items: 7
        }
    }
})
$('.Carouselshop').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive:
    {
        0: {
            items: 1,
            nav: false,
        },
        540: {

            items: 2,
            nav: false,
            dots: false
        },
        770: {
            nav: false,
            items: 3
        },
        1024: {

            items: 4
        }
    }
});
$('.Carousel3').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        770: {

            items: 2
        },
        1200: {

            items: 2
        }
    }
})
$('.Carousel6').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive:
    {
        0: {
            items: 1,
            nav: false,
            dots: false
        },
        770: {

            items: 2
        },
        1200: {

            items: 3
        }
    }
})
$('.comment').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive:
    {
        0: {
            items: 1,
            nav: false,
            dots: false
        },
        770: {

            items: 1
        },
        1200: {

            items: 2
        }
    }
})
$('.Carousel7').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive:
    {
        0: {
            items: 1,
            nav: false,
            dots: false
        },
        770: {

            items: 4
        },
        1200: {

            items: 4
        }
    }
})
$('Carousel5').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        770: {

            items: 2
        },
        1200: {

            items: 2
        }
    }
})

$('.Carousel2_1').owlCarousel({
    loop: false,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        576: {
            nav:false,
            items: 2
        },
        768: {

            items: 3
        },
        1200: {

            items: 4
        }
    }
})
$('.Carousel2_2').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    drag:false,
    mouseDrag:false,
    responsive: {
        0: {
            items: 1
        },
        576: {
            nav:false,
            items: 1
        },
        768: {

            items: 1
        },
        1200: {

            items: 1
        }
    }
})

$('.Carousel2_3').owlCarousel({
    loop: false,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {

            items: 1
        },
        1200: {

            items: 1
        }
    }
})

const overlay = document.querySelector(".overlay");
const body = document.querySelector("body");
const menuBtn = document.querySelector(".menu-btn");
const menuItems = document.querySelector(".menu-items");
const expandBtn = document.querySelectorAll(".expand-btn");

function toggle() {
    // disable overflow body
    body.classList.toggle("overflow");
    // dark background
    overlay.classList.toggle("overlay--active");
    // add open class
    menuBtn.classList.toggle("open");
    menuItems.classList.toggle("open");
}

menuBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    toggle();
});

window.onkeydown = function (event) {
    const key = event.key; // const {key} = event; in ES6+
    const active = menuItems.classList.contains("open");
    if (key === "Escape" && active) {
        toggle();
    }
};

document.addEventListener("click", (e) => {
    let target = e.target,
        its_menu = target === menuItems || menuItems.contains(target),
        its_hamburger = target === menuBtn,
        menu_is_active = menuItems.classList.contains("open");
    if (!its_menu && !its_hamburger && menu_is_active) {
        toggle();
    }
});

// mobile menu expand
expandBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("open");
    });
});