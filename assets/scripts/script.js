let bgCardWork1 = document.querySelectorAll(".card-work-1");
let w1 = document.getElementById("w1");
let w2 = document.getElementById("w2");
let w3 = document.getElementById("w3");

// TO FIX
const scrollContainer = document.querySelector(".scrolling-wrapper");

// check if exist to correct a bug :: conflict between this event and workCardHoverAnimation
if (scrollContainer) {
  scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
  });
}

function workCardHoverAnimation(card) {
  // add new style on hover
  card.addEventListener("mouseover", () => {
    card.classList.add("work-bg-hover");
  });

  // remove the new style on mouse out
  card.addEventListener("mouseout", () => {
    card.classList.remove("work-bg-hover");
  });

  // TO MODIFY :: if tree that redirect to the right page on click the card
  if (card == w1) {
    card.addEventListener("click", () => {
      window.location.href = "http://www.ryww.fr/library";
    });
  } else if (card == w2) {
    card.addEventListener("click", () => {
      window.location.href = "http://www.ryww.fr/pokedex";
    });
  } else if (card == w3) {
    card.addEventListener("click", () => {
      window.location.href = "http://www.ryww.fr/ace_bakery";
    });
  }
}

// initialization for all the cards
workCardHoverAnimation(w1);
workCardHoverAnimation(w2);
workCardHoverAnimation(w3);
