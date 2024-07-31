// selector
const scrollBtn = document.querySelector("#scrollBtn");
const moreBtn = document.querySelector("#moreBtn");
const menuBtn = document.querySelector("#menuBtn");
const menubar = document.querySelector("#menubar");
// Listener
if (scrollBtn !== null) {
  scrollBtn.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });
}

// scroll down to top
if (scrollBtn !== null) {
  window.addEventListener("scroll", () => {
    if (scrollY > 100) {
      scrollBtn.classList.remove("hidden");
      scrollBtn.classList.add("fixed");
    } else {
      scrollBtn.classList.remove("fixed");
      scrollBtn.classList.add("hidden");
    }
  });
}

if (moreBtn !== null) {
  // scroll next section
  moreBtn.addEventListener("click", () => {
    scrollTo(600, 600);
  });
}

// menu toggle show hide
if (menuBtn !== null) {
  $("#menuBtn").click(() => {
    $("#menuOpen").toggle();
    $("#menuClose").toggle();
    $("#menubar").slideToggle();
  });
}

//pagination next button
// if ($("#next-btn") !== null) {
//   $("#next-btn").addEventListener("click");
// }
