"use strict";

history.pushState(null, null, window.location.pathname);

/*------------ scroll ------------*/

const fadeElements = document.querySelectorAll(".js_scroll");
let lastScrollPos = 0;

window.addEventListener("scroll", function () {
  const currentScrollPos =
    window.pageYOffset || document.documentElement.scrollTop;

  if (currentScrollPos > lastScrollPos && currentScrollPos > 100) {
    //100px以上スクロールで要素を消す
    fadeElements.forEach((element) => {
      element.style.opacity = "0";
      element.style.transition = "opacity 0.5s";
    });
  } else if (currentScrollPos === 0) {
    // トップまで戻ったら要素を表示
    fadeElements.forEach((element) => {
      element.style.opacity = "1";
      element.style.transition = "opacity 0.5s";
    });
  }

  lastScrollPos = currentScrollPos;
});

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

/*------------ PC nav ------------*/

const navItems = document.querySelectorAll(".js_pcNav");
// console.log(navItems);

navItems.forEach((navItem) => {
  const sectionId = navItem.getAttribute("data-nav-target");
  // console.log(sectionId);

  const section = document.getElementById(sectionId);
  // console.log(section);

  ScrollTrigger.create({
    trigger: section,
    start: "top .js_scroll",
    // end: "top bottom",
    // markers: true,

    onEnter: () => {
      navItems.forEach((item) => item.classList.remove("is-active"));
      navItem.classList.add("is-active");
    },

    onLeaveBack: () => {
      navItems.forEach((item) => item.classList.remove("is-active"));
      navItem.classList.add("is-active");
    },
  });
});

const navLinks = document.querySelectorAll(".l_header-nav_link");

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    setTimeout(() => {
      navItems.forEach((item) => item.classList.remove("is-active"));
      e.target.parentNode.classList.add("is-active");
    }, 500);
  });
});

/*------------ スムーススクロール ------------*/

const anchorLinks = document.querySelectorAll('a[href^="#"]');
const anchorLinksArray = Array.prototype.slice.call(anchorLinks);

anchorLinksArray.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

    const targetId = link.hash;
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      const targetOffsetTop =
        window.pageYOffset + targetElement.getBoundingClientRect().top;

      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth",
      });
    }
  });
});
