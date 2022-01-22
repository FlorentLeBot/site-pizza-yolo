let btnPizzas = document.getElementById("btnPizzas");
let btnBurgers = document.getElementById("btnBurgers");
let btnPaninis = document.getElementById("btnPaninis");
let btnBoissons = document.getElementById("btnBoissons");

let pizza = document.querySelector("#pizza");
let paninis = document.getElementById("paninis");
let hamburger = document.getElementById("hamburger");
let boisson = document.getElementById("boissons");

// affiche et cache les parties de la carte en fonction de la recherche

btnPizzas.addEventListener("click", function affichePizzas() {
  pizza.classList = "active";
  paninis.classList = "hidden";
  hamburger.classList = "hidden";
  boisson.classList = "hidden";
});
btnPaninis.addEventListener("click", function affichePaninis() {
  pizza.classList = "hidden";
  paninis.classList = "active";
  // btnHover.classList.add("active");
  hamburger.classList = "hidden";
  boisson.classList = "hidden";
});
btnBurgers.addEventListener("click", function afficheBurgers() {
  pizza.classList = "hidden";
  paninis.classList = "hidden";
  hamburger.classList = "active";
  boisson.classList = "hidden";
});
btnBoissons.addEventListener("click", function afficheBoissons() {
  pizza.classList = "hidden";
  paninis.classList = "hidden";
  hamburger.classList = "hidden";
  boisson.classList = "active";
});

// événement au clic pour intégrer la classe active 
 
let a = document.getElementById("nav-carte");
let btns = a.getElementsByClassName("btnHover");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
