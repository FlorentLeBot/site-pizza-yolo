let modal = null;
const focusableSelector = "button, input, a";
let focusables = [];
let previouslyFocusedElement = null;
// creation d'une fonction pour ouvrir ma boite modale

const openModal = function (e) {
	e.preventDefault();
	modal = document.querySelector(e.target.getAttribute("href"));
	focusables = Array.from(modal.querySelectorAll(focusableSelector));
    previouslyFocusedElement = document.querySelector(":focus");
	modal.style.display = null;
	focusables[0].focus();
	modal.removeAttribute("aria-hidden");
	modal.setAttribute("aria-modal", "true");
	modal.addEventListener("click", closeModal);
	modal
		.querySelector(".js-modal-close")
		.addEventListener("click", closeModal);
	modal
		.querySelector(".js-modal-stop")
		.addEventListener("click", stopPropagation);
};

// creation d'une fonction pour fermer ma boite modale

const closeModal = function (e) {
	if (modal === null) return;
    if(previouslyFocusedElement !== null){
        previouslyFocusedElement.focus();
    }
	e.preventDefault();
	modal.style.display = "none";
	modal.setAttribute("aria-hidden", "true");
	modal.removeAttribute("aria-modal");
	modal.removeEventListener("click", closeModal);
	modal
		.querySelector(".js-modal-close")
		.removeEventListener("click", closeModal);
	modal
		.querySelector(".js-modal-stop")
		.removeEventListener("click", stopPropagation);
	modal = null;
};

const stopPropagation = function (e) {
	e.stopPropagation();
};

// on court-circuite le comportement normal de la tabulation pour rester focus sur la boite modale
const focusInModal = function (e) {
	e.preventDefault();
	//console.log(focusables);
	let index = focusables.findIndex(
		(f) => f === modal.querySelector(":focus")
	);
	//console.log(index)
	if (e.shiftKey == true) {
		index--;
	} else {
		index++;
	}
	//debugger
	if (index >= focusables.length) {
		index = 0;
	}
	if (index < 0) {
		focusables.length - 1;
	}
	focusables[index].focus();
};

document.querySelectorAll(".js-modal").forEach((a) => {
	a.addEventListener("click", openModal);
});

// Utilisation du clavier

window.addEventListener("keydown", function (e) {
	if (e.key === "Escape" || e.key === "Esc") {
		closeModal(e);
	}
	if (e.key === "Tab" && modal !== null) {
		focusInModal(e);
	}
});