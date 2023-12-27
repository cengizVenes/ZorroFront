
window.onload = function () {
  slide1();
  slide2();
};

let slider1 = document.getElementById("slider-3");
let slider2 = document.getElementById("slider-4");
let displayVal1 = document.getElementById("range3");
let displayVal2 = document.getElementById("range4");
let minGap1 = 0;
let sliderTrack1 = document.querySelector(".slider-track2");
let sliderMaxValue1 = document.getElementById("slider-3").max;

function slide1() {
  if (parseInt(slider2.value) - parseInt(slider1.value) <= minGap1) {
    slider1.value = parseInt(slider2.value) - minGap1;
  }
  displayVal1.textContent = slider1.value;
  fillColor();
}
function slide2() {
  if (parseInt(slider2.value) - parseInt(slider1.value) <= minGap1) {
    slider2.value = parseInt(slider1.value) + minGap1;
  }
  displayVal2.textContent = slider2.value;
  fillColor();
}
function fillColor() {
  percent1 = (slider1.value / sliderMaxValue1) * 100;
  percent2 = (slider2.value / sliderMaxValue1) * 100;
  sliderTrack1.style.background = `linear-gradient(to right, #cacbcd ${percent1}% , #fa4f91 ${percent1}% , #fa4f91 ${percent2}%, #cacbcd ${percent2}%)`;
}
