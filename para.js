
let slideInd = 0;
showSlide();

function showSlide() {
  let i;
  let slide = document.getElementsByClassName("mySlide");
  for (i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";
  }
  slideInd++;
  if (slideInd > slide.length) {slideInd = 1}
  slide[slideInd-1].style.display = "block";
  setTimeout(showSlide, 3000); 
}


let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
