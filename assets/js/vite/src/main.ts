import { preloader, inputMask, quote } from "./selectors";
import {
  headerScrolled,
  toggleBacktotop,
  scrollToHash,
  handleInput,
} from "./utils";
import Navbar from "./Navbar";

let mainNav: Navbar;

/* Main Nav */
const navbar = document.querySelector("#navbar") as HTMLElement;
const navbarlinks = document.querySelectorAll(
  "#navbar .menu-item > a"
) as NodeListOf<HTMLAnchorElement>;
const navDropdowns = document.querySelectorAll(
  ".navbar .menu-item-has-children > a"
) as NodeListOf<HTMLAnchorElement>;
const mobileNavToggle = document.querySelector(
  ".mobile-nav-toggle"
) as HTMLElement;
/* new Main Nav */
if (navbar && navbarlinks && mobileNavToggle) {
  mainNav = new Navbar(
    navbar,
    Array.from(navbarlinks),
    mobileNavToggle,
    Array.from(navDropdowns)
  );
}

window.addEventListener("load", () => {
  /* Init Main Nav */
  mainNav?.init();
  /* Toggle Fixed Header */
  headerScrolled();
  /* Back To Top */
  toggleBacktotop();
  /* Scroll To Hash */
  scrollToHash();
  /* AOS */
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
  /* Portfolio 
  new Swiper(".portfolio-details-slider", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });*/
  /* Preloader */
  preloader?.remove();
});

document.addEventListener("scroll", () => {
  /* Add class Active to Nav Links */
  mainNav?.activateNavLinks();
  /* Toggle Fixed Header */
  headerScrolled();
  /* Back To Top */
  toggleBacktotop();
});

/* Input Mask */
inputMask?.forEach((input) => {
  input.addEventListener("input", handleInput, false);
});

/* Set Quote */
let count = 1;
window.setQuote = (service: string) => {
  if (quote) {
    quote.value += `${
      count == 1 ? "Gostaria de um orçamento para " : ", "
    } ${service}`;
    count++;
  }
};
