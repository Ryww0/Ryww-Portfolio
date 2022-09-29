let bgCardWork1 = document.querySelectorAll(".card-work-1");
let w1 = document.getElementById("w1");
let w2 = document.getElementById("w2");
let w3 = document.getElementById("w3");

// card work n°1 hover animation
//
// event on hover
w1.addEventListener("mouseover", () => {
  w1.classList.add("work-bg-hover");
});

// even on out
w1.addEventListener("mouseout", () => {
  w1.classList.remove("work-bg-hover");
});

// redirect on click
w1.addEventListener("click", () => {
  window.location.href = "http://localhost/Portfolio%202.0/library.php";
});

// card work n°2 hover animation
//
// event on hover
w2.addEventListener("mouseover", () => {
  w2.classList.add("work-bg-hover");
});

// even on out
w2.addEventListener("mouseout", () => {
  w2.classList.remove("work-bg-hover");
});

// redirect on click
w2.addEventListener("click", () => {
  window.location.href = "http://localhost/Portfolio%202.0/library.php";
});

// card work n°3 hover animation
//
// event on hover
w3.addEventListener("mouseover", () => {
  w3.classList.add("work-bg-hover");
});

// even on out
w3.addEventListener("mouseout", () => {
  w3.classList.remove("work-bg-hover");
});

// redirect on click
w3.addEventListener("click", () => {
  window.location.href = "http://localhost/Portfolio%202.0/library.php";
});
