let search = document.getElementById("address");

document.querySelector("#address").addEventListener("input", function () {
  if (this.value.length > 0) {
    let url = `https://api-adresse.data.gouv.fr/search/?q= ${this.value}`;

    fetch(url)
      .then((response) =>
        response.json().then((data) => {
          //console.log(data.features);

          let affichage = "<ul>";
          for (let address of data.features) {
            affichage += `<li><strong>${address.properties.label}</strong></li>`;
            console.log(search.value);
          }

          affichage += "</ul>";

          document.querySelector("#mes-adresses").innerHTML = affichage;

          li.addEventListener("click", () => {
            
            search.value = address.properties.label;
          });
        })
      )
      .catch((err) => console.log("Erreur : " + err));
  }
});
