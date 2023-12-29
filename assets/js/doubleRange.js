
window.onload = function () {
    slideOne();
    slideTwo();
    fillColors();
  };

  
  document.addEventListener("DOMContentLoaded", function() {
    fillColors();
  }); 

  let sliderOne = document.getElementById("slider-1");
  let sliderTwo = document.getElementById("slider-2");
  let displayValOne = document.getElementById("range1");
  let displayValTwo = document.getElementById("range2");
  let minGap = 0;
  let sliderTrack = document.querySelector(".slider-track");
  let sliderMaxValue = document.getElementById("slider-1").max;

  function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
      sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent = sliderOne.value;
    fillColors();
  }
  function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
      sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = sliderTwo.value;
    fillColors();
  }
  function fillColors() {
    percent1s = (sliderOne.value / sliderMaxValue) * 100;
    percent2s = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #cacbcd ${percent1s}% , #fa4f91 ${percent1s}% , #fa4f91 ${percent2s}%, #cacbcd ${percent2s}%)`;
  }
