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

/*------------ 横スクロール ------------*/



const skillsArea = document.querySelector(".js_carry-area");
const skillsList = document.querySelector(".js_carry-list");
const skillsItems = document.querySelectorAll(".js_carry-item");
const skillsNum = skillsItems.length;
const progressBar = document.querySelector(".about_carry-progress_bar"); // 横線要素

const mm = gsap.matchMedia();

window.addEventListener("load", () => {
  // 320px〜599px
  mm.add("(min-width: 320px) and (max-width: 599px)", () => {
    gsap.set(skillsList, { width: skillsNum * 100 + "%" });
    gsap.set(skillsItems, { width: 110 / skillsNum + "%" });
    gsap.to(skillsItems, {
      xPercent: -115 * (skillsNum - 1),
      ease: "none",
      scrollTrigger: {
        trigger: skillsArea,
        start: "center center",
        end: "+=430",
        pin: true,
        scrub: 1,
        anticipatePin: 1,
        invalidateOnRefresh: true,
        // markers: true,
      },
    });
  });

  gsap.set(progressBar, { transformOrigin: "left center" }); // 左から伸びるように設定

  gsap.fromTo(
    progressBar,
    { scaleX: 0 }, // 最初は0（横線は表示されていない）
    {
      scaleX: 1, // 最後には100%（横線が最大まで伸びる）
      ease: "none",
      scrollTrigger: {
        trigger: skillsArea,
        start: "center center", // スクロール開始位置
        end: "+=430", // 終了位置
        scrub: 1, // スクロールに沿ったアニメーション
      },
    }
  );

  // 600px〜999px
  mm.add("(min-width: 600px) and (max-width: 999px)", () => {
    gsap.set(skillsList, { width: skillsNum * 100 + "%" });
    gsap.set(skillsItems, { width: 90 / skillsNum + "%" });
    gsap.to(skillsItems, {
      xPercent: -90 * (skillsNum - 1),
      ease: "none",
      scrollTrigger: {
        trigger: skillsArea,
        start: "center center",
        end: "+=430",
        pin: true,
        scrub: 1,
        anticipatePin: 1,
        invalidateOnRefresh: true,
        // markers: true,
      },
    });
  });

  // 1000px以上のメディアクエリ
  mm.add("(min-width: 1000px)", () => {
    gsap.set(skillsList, { width: skillsNum * 100 + "%" });
    gsap.set(skillsItems, { width: 70 / skillsNum + "%" });
    gsap.to(skillsItems, {
      xPercent: -70 * (skillsNum - 1),
      ease: "none",
      scrollTrigger: {
        trigger: skillsArea,
        start: "center center",
        end: "+=430",
        pin: true,
        scrub: 1,
        anticipatePin: 1,
        invalidateOnRefresh: true,
        // markers: true,
      },
    });
  });
});
/*------------ timeline ------------*/

gsap.utils.toArray(".about_will-item").forEach((item, index, items) => {
  ScrollTrigger.create({
    trigger: item,
    start: "top center", 
    onEnter: () => {
      item.classList.add("is-active"); 
    },
    onLeaveBack: () => {
      item.classList.remove("is-active"); 
    },
  });
});



