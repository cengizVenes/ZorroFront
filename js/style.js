$(".Carousel1").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  items: 1,
  dots: false,
  responsive: {
    0: {
      nav: false,
    },
    992: {
      nav: true,
    },
  },
});
$(".Carousel2").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 4,
    },
    770: {
      items: 6,
    },
    1200: {
      items: 7,
    },
  },
});
$(".Carouselshop").owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    540: {
      items: 2,
      nav: false,
      dots: false,
    },
    770: {
      nav: false,
      items: 3,
    },
    1024: {
      items: 4,
    },
  },
});
$(".Carousel3").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    770: {
      items: 2,
    },
    1200: {
      items: 2,
    },
  },
});
$(".Carousel6").owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: false,
    },
    770: {
      items: 2,
    },
    1200: {
      items: 3,
    },
  },
});
$(".comment").owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: false,
    },
    770: {
      items: 1,
    },
    1200: {
      items: 2,
    },
  },
});
$(".Carousel7").owlCarousel({
  loop: true,
  margin: 20,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: false,
    },
    770: {
      items: 4,
    },
    1200: {
      items: 4,
    },
  },
});
$("Carousel5").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    770: {
      items: 2,
    },
    1200: {
      items: 2,
    },
  },
});

$(".Carousel2_1").owlCarousel({
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      nav: false,
      items: 2,
    },
    768: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
$(".Carousel2_2").owlCarousel({
  loop: false,
  nav: true,
  dots: false,
  drag: false,
  mouseDrag: false,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      nav: false,
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
$(".CarouselDteal").owlCarousel({
  loop: false,
  nav: false,
  dots: true,
  drag: false,
  mouseDrag: false,
  animateOut: "fadeOut",
  responsive: {
    0: {
      items: 1,
    },
    576: {
      nav: false,
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
$(".Carousel2_3").owlCarousel({
  loop: false,
  nav: false,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
//mega menu
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

// menuBtn.addEventListener("click", (e) => {
//     e.stopPropagation();
//     toggle();
// });

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

function picturechange() {
  // ortadaki resim değiştirme
  var pidture1 = document.getElementById("image1");
  var pidture2 = document.getElementById("image2");
  var pidture3 = document.getElementById("image3");
  var pidture4 = document.getElementById("image4");
  var viewImg = document.getElementById("viewImg");
  var viewImgTarget = document.getElementById("viewImgTarget");

  var img1 = "images/productImg/product1.webp";
  var img2 = "images/productImg/product2.webp";
  var img3 = "images/productImg/product3.webp";
  var img4 = "images/productImg/product4.webp";
  viewImg.src = img1;
  pidture1.addEventListener("click", function () {
    viewImg.src = img1;
  });
  pidture2.addEventListener("click", function () {
    viewImg.src = img2;
  });
  pidture3.addEventListener("click", function () {
    viewImg.src = img3;
  });
  pidture4.addEventListener("click", function () {
    viewImg.src = img4;
  });
}

function sizeguide() {
  // size guide
  var butonlar = document.getElementsByClassName("starting");

  for (var i = 0; i < butonlar.length; i++) {
    butonlar[i].addEventListener("click", function () {
      var picture = this.querySelector(".sizeguide"); // İlgili butona ait resim
      var acikMi = this.getAttribute("data-open") === "true";

      if (acikMi) {
        picture.src = "images/L0001 copy.png";
      } else {
        picture.src = "images/Şekil 1.png";
      }
      // data-open özelliğini tersine çevirin
      this.setAttribute("data-open", acikMi ? "false" : "true");
    });
  }
}
function coppy() {
  // copy
  var butonlar = document.getElementsByClassName("starting");

  for (var i = 0; i < butonlar.length; i++) {
    butonlar[i].addEventListener("click", function () {
      var picture = this.querySelector(".copy"); // İlgili butona ait resim
      var acikMi = this.getAttribute("data-open") === "true";

      if (acikMi) {
        picture.src = "images/Icon CompareDark.png";
      } else {
        picture.src = "images/Icon Comparep.png";
      }
      // data-open özelliğini tersine çevirin
      this.setAttribute("data-open", acikMi ? "false" : "true");
    });
  }
}
function heart() {
  // heart
  var butonlar = document.getElementsByClassName("starting");

  for (var i = 0; i < butonlar.length; i++) {
    butonlar[i].addEventListener("click", function () {
      var picture = this.querySelector(".picture"); // İlgili butona ait resim
      var acikMi = this.getAttribute("data-open") === "true";

      if (acikMi) {
        picture.src = "images/Katman 1.png";
      } else {
        picture.src = "images/Icon HeartP.png";
      }

      // data-open özelliğini tersine çevirin
      this.setAttribute("data-open", acikMi ? "false" : "true");
    });
  }
}
// product hover events
function productStar() {
  document.addEventListener("DOMContentLoaded", function () {
    const product1Stars = document.querySelectorAll("#product1 .star");
    const product2Stars = document.querySelectorAll("#product2 .star");

    product1Stars.forEach((star) => {
      star.addEventListener("mouseover", function () {
        const rating = this.getAttribute("data-rating");
        highlightStars(product1Stars, rating);
      });

      star.addEventListener("mouseout", function () {
        unhighlightStars(product1Stars);
      });

      star.addEventListener("click", function () {
        const rating = this.getAttribute("data-rating");
        // Ürün 1 için seçilen yıldız değeriyle işlem yapabilirsiniz.
        alert("Ürün 1 Değerlendirme: " + rating);
      });
    });

    product2Stars.forEach((star) => {
      star.addEventListener("mouseover", function () {
        const rating = this.getAttribute("data-rating");
        highlightStars(product2Stars, rating);
      });

      star.addEventListener("mouseout", function () {
        unhighlightStars(product2Stars);
      });

      star.addEventListener("click", function () {
        const rating = this.getAttribute("data-rating");
        // Ürün 2 için seçilen yıldız değeriyle işlem yapabilirsiniz.
        alert("Ürün 2 Değerlendirme: " + rating);
      });
    });

    function highlightStars(stars, rating) {
      stars.forEach((star) => {
        const starRating = star.getAttribute("data-rating");
        if (starRating <= rating) {
          star.classList.add("active");
        } else {
          star.classList.remove("active");
        }
      });
    }

    function unhighlightStars(stars) {
      stars.forEach((star) => {
        star.classList.remove("active");
      });
    }
  });
}
function fancybox() {
  Fancybox.bind('[data-fancybox="gallery"]', {});
}

function checkboxclr() {
  var butonlar = document.getElementsByClassName("clrJs");
  var checkboxlar = document.getElementsByClassName("checkboxClr");

  for (var i = 0; i < butonlar.length; i++) {
    butonlar[i].addEventListener("click", function () {
      // checkboxlar, HTMLCollection, bir dizi benzeri bir nesnedir
      // doğrudan .checked özelliğini kullanamazsınız
      var checkboxlarDizi = Array.from(checkboxlar);

      // Her bir checkbox'ı kontrol et
      checkboxlarDizi.forEach(function (checkbox) {
        if (checkbox.checked) {
          checkbox.checked = false; // Checkbox işaretlerini kaldır
        }
      });
    });
  }
}
function buttonOpenClose() {
  var butonlar = document.getElementsByClassName("brdashed");

  for (var i = 0; i < butonlar.length; i++) {
    butonlar[i].addEventListener("click", function () {
      var acikmi = this.getAttribute("data-acik") === "true";

      if (acikmi) {
        this.style.backgroundColor = "#19c144";
        this.style.color = "#fff";
        this.style.border = "1px solid #19c144";
      } else {
        this.style.backgroundColor = "#fff";
        this.style.color = "#d7d8da";
        this.style.border = "1px dashed #d7d8da";
      }

      // data-acik özelliğini tersine çevir
      this.setAttribute("data-acik", acikmi ? "false" : "true");
    });
  }
}
function pagination() {
  document.addEventListener("DOMContentLoaded", function () {
    const pageButtons = document.querySelectorAll(".page-button");
    const items = document.querySelectorAll(".itemsPage");
    const itemsPerPage = 8;
    let currentPage = 1;

    function displayPage(pageNumber) {
      items.forEach((item, index) => {
        if (
          index >= (pageNumber - 1) * itemsPerPage &&
          index < pageNumber * itemsPerPage
        ) {
          item.style.display = "flex";
        } else {
          item.style.display = "none";
        }
      });
    }

    function setActiveButton(index) {
      pageButtons.forEach((button, i) => {
        if (i === index) {
          displayPage(i + 1);
          button.style.backgroundColor = "#fa4f91";
          button.style.color = "#fff";
          button.style.borderRadius = "0.25rem";
        } else {
          button.style.backgroundColor = "#fff";
          button.style.color = "#cacbcd";
        }
      });
    }

    // "Next" linkine tıklanınca bir sonraki sayfaya geç
    document.getElementById("sonraki").addEventListener("click", function () {
      if (currentPage < pageButtons.length) {
        currentPage++;
        setActiveButton(currentPage - 1);
      }
    });

    // "Prev" linkine tıklanınca bir önceki sayfaya geç
    document.getElementById("onceki").addEventListener("click", function () {
      if (currentPage > 1) {
        currentPage--;
        setActiveButton(currentPage - 1);
      }
    });

    // Sayfa numaralarına tıklandığında sayfa numarasını güncelle
    pageButtons.forEach((button, index) => {
      button.addEventListener("click", function () {
        setActiveButton(index);
        currentPage = index + 1;
      });
    });

    setActiveButton(0);
  });
}
function moreLess() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("btnMore");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Brands more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Brands less";
    moreText.style.display = "inline";
  }
}

function imgchange() {
  var resimler = [
    "images/productImg/product1.webp",
    "images/productImg/product2.webp",
    "images/productImg/product3.webp",
    "images/productImg/product4.webp",
  ];
  var anaResim = document.getElementById("ana-resim");
  function gosterResim(index) {
    anaResim.style.backgroundImage = "url('" + resimler[index - 1] + "')";
  }
  var anaResim2 = document.getElementById("ana-resim2");
  function gosterResim2(index) {
    anaResim2.style.backgroundImage = "url('" + resimler[index - 1] + "')";
  }
  var anaResim3 = document.getElementById("ana-resim3");
  function gosterResim3(index) {
    anaResim3.style.backgroundImage = "url('" + resimler[index - 1] + "')";
  }
  var anaResim4 = document.getElementById("ana-resim4");
  function gosterResim4(index) {
    anaResim4.style.backgroundImage = "url('" + resimler[index - 1] + "')";
  }
}
function productchange() {
  // Tüm productClick düğmelerini seçin
  const productButtons = document.querySelectorAll(".productClick");

  productButtons.forEach(function (button) {
    const toggleContentDiv =
      button.nextElementSibling.querySelector(".toggleContent");
    const shortDtealDiv =
      button.nextElementSibling.querySelector(".shortDteal");
    button.addEventListener("click", function () {
      // toggleContent gizlendiyse göster, aksi takdirde gizle
      toggleContentDiv.classList.toggle("d-none");
      shortDtealDiv.classList.toggle("d-none");
    });
  });
}

function productImgHover() {
  // İlk buton için
  var productButton1 = document.getElementById("productButton1");
  var productImage1 = document.getElementById("productImage1");
  var images1 = [
    "images/productImg/product1.webp",
    "images/productImg/product2.webp",
    "images/productImg/product3.webp",
  ];
  var currentIndex1 = 0;

  productButton1.addEventListener("mousemove", function (e) {
    var width = productButton1.offsetWidth;
    var x = e.clientX - productButton1.getBoundingClientRect().left;

    currentIndex1 = Math.floor((x / width) * images1.length);
    currentIndex1 = Math.min(currentIndex1, images1.length - 1);

    productImage1.src = images1[currentIndex1];
  });

  // İkinci buton için
  var productButton2 = document.getElementById("productButton2");
  var productImage2 = document.getElementById("productImage2");
  var images2 = [
    "images/productImg/product1.webp",
    "images/productImg/product3.webp",
    "images/productImg/product2.webp",
  ];
  var currentIndex2 = 0;

  productButton2.addEventListener("mousemove", function (e) {
    var width = productButton2.offsetWidth;
    var x = e.clientX - productButton2.getBoundingClientRect().left;

    currentIndex2 = Math.floor((x / width) * images2.length);
    currentIndex2 = Math.min(currentIndex2, images2.length - 1);

    productImage2.src = images2[currentIndex2];
  });
}
function UpdatemoreLess() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("btnMore");
  var btnIcon = document.getElementById("btnicon");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Filter";
    moreText.style.display = "none";
    btnIcon.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Clear";
    moreText.style.display = "inline";
    btnIcon.style.display = "block";
  }
}
function filterMenu() {
  var Menu = document.getElementById("coMenu");
  var MenuButton1 = document.getElementById("coMenuButton1");
  var MenuButton2 = document.getElementById("coMenuButton2");
  var MenuBoady = document.getElementById("coMenuBoady");

  MenuBoady.style.marginLeft = "-500px";
  Menu.style.background = "#00000000";
  setTimeout(function () {
    Menu.style.display = "none";
  }, 300);

  MenuButton1.addEventListener("click", function () {
    filterMenuLeft();
  });
  MenuButton2.addEventListener("click", function () {
    filterMenuLeft();
  });

  function filterMenuLeft() {
    if (Menu.style.display === "none") {
      Menu.style.display = "block";
      setTimeout(function () {
        MenuBoady.style.marginLeft = "0px";
        Menu.style.background = "#00000081";
      }, 100);
    } else {
      MenuBoady.style.marginLeft = "-500px";
      Menu.style.background = "#00000000";
      setTimeout(function () {
        Menu.style.display = "none";
      }, 300);
    }
  }
}
