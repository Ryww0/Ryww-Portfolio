let bgCardWork1 = document.querySelectorAll(".card-work-1");

bgCardWork1.forEach((container) => {
  container.addEventListener("mouseover", () => {
    container.classList.add("work-bg-hover");
  });
});

bgCardWork1.forEach((container) => {
  container.addEventListener("mouseout", () => {
    container.classList.remove("work-bg-hover");
  });
});

bgCardWork1.forEach((container) => {
  container.addEventListener("click", () => {
    window.location.href = "http://localhost/Portfolio%202.0/library.php";
  });
});
