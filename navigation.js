let btnPizzas = document.querySelector("#btnPizzas");
let btnBurgers = document.querySelector("#btnBurgers");
let btnPaninis = document.querySelector("#btnPaninis");
let btnBoissons = document.querySelector("#btnBoissons");

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
  btnActive();
});
btnPaninis.addEventListener("click", function affichePaninis() {
	pizza.classList = "hidden";
	paninis.classList = "active";
	hamburger.classList = "hidden";
	boisson.classList = "hidden";
  btnActive();
});
btnBurgers.addEventListener("click", function afficheBurgers() {
	pizza.classList = "hidden";
	paninis.classList = "hidden";
	hamburger.classList = "active";
	boisson.classList = "hidden";
  btnActive();
});
btnBoissons.addEventListener("click", function afficheBoissons() {
	pizza.classList = "hidden";
	paninis.classList = "hidden";
	hamburger.classList = "hidden";
	boisson.classList = "active";
  btnActive();
});

// événement au clic pour intégrer la classe active


function btnActive() {
  
  let a = document.getElementById("nav-carte");
  let btns = a.getElementsByClassName("btnHover");
  
	for (let i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function () {
			let current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
		});
	}
}
