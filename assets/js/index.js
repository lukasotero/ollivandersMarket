/*=============== NAVBAR ===============*/
$(function () {
  $(".btn-hamburguesa").on("click", function () {
    if ($(".item").hasClass("active")) {
      $(".item").removeClass("active");
    } else {
      $(".item").addClass("active");
    }
  });
});

/*=============== BOTON RESPONSIVE ===============*/
const hamburgerMenu = document.querySelector(".hamburger");
const menuIsActive = () => {
  hamburgerMenu.classList.toggle("active");
};

hamburgerMenu.addEventListener("click", menuIsActive);

/*=============== BOTON MODAL LOGIN ===============*/
const openModal = document.querySelector(".open-modal");
const closeModal = document.querySelector(".close-modal");
const modal = document.querySelector(".modal");

// PARA ABRIR EL MODAL LOGIN
openModal.addEventListener("click", (e) => {
  e.preventDefault();
  modal.classList.add("modal-active");
});

// PARA CERRAR EL MODAL LOGIN
closeModal.addEventListener("click", (e) => {
  e.preventDefault();
  modal.classList.remove("modal-active");
});

// PARA CERRAR EL MODAL LOGIN CLICKEANDO FUERA DEL MODAL
document.addEventListener("click", (e) => {
  if (e.target == document.querySelector(".modal-active")) {
    document.querySelector(".modal-active").classList.remove("modal-active");
  }
});

// PARA CERRAR EL MODAL LOGIN PRESIONANDO LA TECLA ESC
document.addEventListener("keyup", (e) => {
  if (e.key == "Escape" && document.querySelector(".modal-active")) {
    document.querySelector(".modal-active").classList.remove("modal-active");
  }
});

/*=============== HOME SLIDER ===============*/
let homeSwiper = new Swiper(".home-swiper", {
  spaceBetween: 30,
  loop: "true",

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

/*=============== SLIDER NUEVOS PRODUCTOS ===============*/
let newSwiper = new Swiper(".new-swiper", {
  centeredSlides: true,
  slidesPerView: "auto",
  loop: "true",
  spaceBetween: 16,
});

/*=============== SCROLL PARA ARRIBA ===============*/
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  if (this.scrollY >= 460) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 2500,
  delay: 400,
  // reset: true
});

sr.reveal(`.home-swiper, .new-swiper, .newsletter__container`);
sr.reveal(`.category__data, .trick__content, .footer__content`, {
  interval: 100,
});
sr.reveal(`.about__data, .discount__img`, {
  origin: "left",
});
sr.reveal(`.about__img, .discount__data`, {
  origin: "right",
});
