// gives numbered classes to each slide and activates slide1

const colors = ["#2176FF", "#33A1FD", "#FDCA40", "#F79824", "#31393C"];
const slides = document.querySelectorAll(".slider .slide");
const nextButton = document.querySelector(".next i");
const prevButton = document.querySelector(".prev i");
let slideIndex = 1;


function slidesInit() {
    slides.forEach((slide) => {
        slide.classList.add("slide" + slideIndex);
        slide.style.backgroundColor = colors[slideIndex - 1];
        slideIndex++;
    })
    slideIndex = 1;
    document.querySelector(".slide.slide" + slideIndex).classList.add("active");
}
slidesInit();

function toNextSlide() {
    document.querySelector(".slide.slide" + slideIndex).classList.remove("active");
    if (slideIndex == slides.length) {
        slideIndex = 1;
        console.log("back to" + slideIndex)
    } else {

        slideIndex++;
        console.log("new index is" + slideIndex)
    }
    document.querySelector(".slide.slide" + slideIndex).classList.add("active");


}

function toPrevSlide() {
    document.querySelector(".slide.slide" + slideIndex).classList.remove("active");
    if (slideIndex == 1) {
        slideIndex = slides.length;
        console.log("back to" + slideIndex)
    } else {

        slideIndex--;
        console.log("new index is" + slideIndex)
    }
    document.querySelector(".slide.slide" + slideIndex).classList.add("active");


}


nextButton.addEventListener("click", () => {
    toNextSlide();
})

prevButton.addEventListener("click", () => {
    toPrevSlide();
})

function autoNext() {

    document.querySelector(".slide.slide" + slideIndex).classList.remove("active");
    if (slideIndex == slides.length) {
        slideIndex = 1;
        console.log("back to" + slideIndex)
    } else {

        slideIndex++;
        console.log("new index is" + slideIndex)
    }
    document.querySelector(".slide.slide" + slideIndex).classList.add("active");

    setTimeout(autoNext, 5000);

};
autoNext();

