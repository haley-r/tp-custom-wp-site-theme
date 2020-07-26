// this is all from the tutorial! not my code.
// i just modified it to fit my class names and the icons I wanted

class MobileMenu {
  constructor() {
    // this.menu = document.querySelector(".site-header__menu")
    // this.menu = document.querySelector(".header-menu")
    this.header = document.querySelector("header")
    // this.openButton = document.querySelector(".site-header__menu-trigger")
    this.openButton = document.querySelector("#menu-toggle-icon")
    this.events()
  }

  events() {
    this.openButton.addEventListener("click", () => this.openMenu())
  }

  openMenu() {
    this.openButton.classList.toggle("fa-bars")
    this.openButton.classList.toggle("fa-times")
    // this.menu.classList.toggle("header-menu-active")
    this.header.classList.toggle("header-menu-active")
  }
}

export default MobileMenu
