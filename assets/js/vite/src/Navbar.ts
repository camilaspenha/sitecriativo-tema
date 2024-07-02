import { header } from "./selectors";

export default class Navbar {
  navbar: HTMLElement;
  navbarlinks: HTMLAnchorElement[];
  mobileNavToggle: HTMLElement;
  navDropdowns?: HTMLAnchorElement[];

  constructor(
    navbar: HTMLElement,
    navbarlinks: HTMLAnchorElement[],
    mobileNavToggle: HTMLElement,
    navDropdowns?: HTMLAnchorElement[]
  ) {
    this.navbar = navbar;
    this.navbarlinks = navbarlinks;
    this.mobileNavToggle = mobileNavToggle;
    this.navDropdowns = navDropdowns;
  }

  /* Activate Dropdown Links */
  activateDropdowns() {
    if (this.navDropdowns) {
      this.navDropdowns.forEach((link) => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          link.nextElementSibling?.classList.toggle("dropdown-active");
        });
      });
    }
  }

  /* Activate Nav Link */
  activateNavLinks() {
    let position = window.scrollY + 200;
    this.navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = document.querySelector(navbarlink.hash) as HTMLElement;
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  }

  /* Nav Links Toggle Mobile */
  navLinksToggleMobile() {
    this.navbarlinks.forEach((navbarlink) => {
      navbarlink.addEventListener("click", (e) => {
        e.preventDefault();

        let elementTarget = document.querySelector(
          navbarlink.hash
        ) as HTMLElement;
        if (elementTarget) {
          if (this.navbar.classList.contains("navbar-mobile")) {
            this.navbar.classList.remove("navbar-mobile");
            this.mobileNavToggle.classList.toggle("bi-list");
            this.mobileNavToggle.classList.toggle("bi-x");
          }

          let offset = header.offsetHeight;
          let elementPos = elementTarget.offsetTop;
          window.scrollTo({
            top: elementPos - offset,
            behavior: "smooth",
          });
        }
      });
    });
  }

  /* Mobile Navbar */
  toggleMobileNavbar() {
    this.mobileNavToggle.addEventListener("click", () => {
      this.navbar.classList.toggle("navbar-mobile");
      this.mobileNavToggle.classList.toggle("bi-list");
      this.mobileNavToggle.classList.toggle("bi-x");
    });
  }
  init() {
    this.activateDropdowns();
    this.activateNavLinks();
    this.navLinksToggleMobile();
    this.toggleMobileNavbar();
  }
}
