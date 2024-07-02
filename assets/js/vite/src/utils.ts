import { header, backtotop } from "./selectors";

export const headerScrolled = () => {
  if (window.scrollY > 100) {
    header?.classList.add("header-scrolled");
  } else {
    header?.classList.remove("header-scrolled");
  }
};

export const toggleBacktotop = () => {
  if (window.scrollY > 100) {
    backtotop?.classList.add("active");
  } else {
    backtotop?.classList.remove("active");
  }
};

export const scrollToHash = () => {
  if (window.location.hash) {
    let hashTarget = document.querySelector(
      window.location.hash
    ) as HTMLElement;
    if (hashTarget) {
      let header = document.querySelector("#header") as HTMLElement;
      let offset = header.offsetHeight;

      let elementPos = hashTarget.offsetTop;
      window.scrollTo({
        top: elementPos - offset,
        behavior: "smooth",
      });
    }
  }
};

export const handleInput = (e: Event) => {
  if (e.target && e.target instanceof HTMLInputElement) {
    e.target.value = phoneMask(e.target.value);
  }
};

const phoneMask = (phone: string) => {
  return phone
    .replace(/\D/g, "")
    .replace(/^(\d)/, "($1")
    .replace(/^(\(\d{2})(\d)/, "$1) $2")
    .replace(/(\d{4})(\d{1,5})/, "$1-$2")
    .replace(/(-\d{5})\d+?$/, "$1");
};
