"use strict";

/*------------ ハンバーガーメニュー ------------*/
const ham = document.querySelector(".js_hamburger");
const nav = document.querySelector(".js_nav");
const barElements = document.querySelectorAll(".m_hamburger-bar");
const body = document.querySelector(".js_body");

ham.addEventListener("click", () => {
  ham.classList.toggle("is-active");
  nav.classList.toggle("is-active");
  body.classList.toggle("is-active");
  document.body.classList.toggle("no-scroll");

  barElements.forEach((bar) => {
    bar.classList.toggle("change-color");
  });
});

const jsNavLinks = document.querySelectorAll(".js_nav-link");
jsNavLinks.forEach((link) => {
  link.addEventListener("click", () => {
    ham.classList.remove("is-active");
    nav.classList.remove("is-active");
    body.classList.remove("is-active");
    document.body.classList.remove("no-scroll");

    barElements.forEach((bar) => {
      bar.classList.remove("change-color");
    });
  });
});
