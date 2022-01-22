let btnHover = document.querySelector(".btnHover");
let btnPizzas = document.getElementById("btnPizzas");
let btnBurgers = document.getElementById("btnBurgers");
let btnPaninis = document.getElementById("btnPaninis");
let btnBoissons = document.getElementById("btnBoissons");
let pizza = document.querySelector("#pizza");
let paninis = document.getElementById("paninis");
let hamburger = document.getElementById("hamburger");
let boisson = document.getElementById("boissons");

// cacher les autres pages

btnPizzas.addEventListener("click", function affichePizzas() {
  pizza.classList = "active";
  paninis.classList = "hidden";
  hamburger.classList = "hidden";
  boisson.classList = "hidden";
//   btnHover();
});
btnPaninis.addEventListener("click", function affichePaninis() {
  pizza.classList = "hidden";
  paninis.classList = "active";
  //   btnHover.classList.add("active");
  hamburger.classList = "hidden";
  boisson.classList = "hidden";
});
btnBurgers.addEventListener("click", function afficheBurgers() {
  pizza.classList = "hidden";
  //   btnHover.classList.add("active");
  paninis.classList = "hidden";
  hamburger.classList = "active";
  boisson.classList = "hidden";
});
btnBoissons.addEventListener("click", function afficheBoissons() {
  pizza.classList = "hidden";
  //   btnHover.classList.add("active");
  paninis.classList = "hidden";
  hamburger.classList = "hidden";
  boisson.classList = "active";
});

// bouton de navigation de carte-menu en hover

// function btnHover() {
//   if (afficherPizzas === true) {
//     btnHover.classList.add("active");
//   }
// }
