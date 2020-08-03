// document.getElementById("inscription").addEventListener("submit", function (e) {
//   e.preventDefault();
// })
// console.log(document.forms["inscription"]);

// document.forms["inscription"].addEventListener("submit", function (e) {
//   let erreur
//   let inputs = this

//   for (let i = 0; i < inputs.length; i++) {
//     if (!inputs[i].value) {
//       erreur = "Veuillez renseigner tous les champs";
//     }
//   }
//   if (erreur) {
//     e.preventDefault()
//     document.getElementById("erreur").innerHTML = erreur
//     return false;
//   }else
//     alert("Formulaire envoyé ! ")

// })

document.getElementById("inscription").addEventListener("submit", function (e) {
  alert("Formulaire envoyé ! ")
  e.preventDefault();
})
const typeCompte = document.getElementById('typeCompte')
const fieldsetCompteCourant = document.getElementById('compteCourant')
typeCompte.addEventListener("change", function(e){
  if (e.target.value == 'compteCourant') {
    fieldsetCompteCourant.style.display = "block"
  }else{
    fieldsetCompteCourant.style.display = "none"
    document.getElementById("numeroIdentification").value = "null";
    document.getElementById("raisonSocial").value = "null";
    document.getElementById("nomEmployeur").value = "null";
    document.getElementById("adresseEmployeur").value = "null";
  }
})