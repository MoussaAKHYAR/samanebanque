
/**let form_type_client = document.getElementById('form_type_client')**/


var form_type_client = document.getElementById('form_type_client');

var form_client_physique = document.getElementById('form_client_physique');

var form_client_moral = document.getElementById('form_client_moral');

var form_compte = document.getElementById('form_compte');

var form_compte_simple = document.getElementById('form_compte_simple');

var form_courant = document.getElementById('form_courant');

var form_bloque = document.getElementById('form_bloque');

var form_existant = document.getElementById('form_existant');

var valider = document.getElementById('valider');

var nouveau = document.getElementById('nouveau');

var physique = document.getElementById('physique');
var entreprise = document.getElementById('entreprise');
var compte_courant = document.getElementById('compte_courant');

var simple = document.getElementById('simple');
var courant = document.getElementById('courant');
var bloque = document.getElementById('bloque');

var cni = document.getElementById("cni");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var sexe = document.getElementById("sexe");
var dateNaiss = document.getElementById("dateNaiss");
var telephone = document.getElementById("telephone");

var missCni = document.getElementById("missCni");
var missNom = document.getElementById("missNom");
var missPrenom = document.getElementById("missPrenom");
var missSexe = document.getElementById("missSexe");
var missDateNaissance = document.getElementById("missDateNaissance");
var missTelephone = document.getElementById("missTelephone");

 //Variable animation
const myBtn=document.querySelector(".my-btn");
const alertBox=document.querySelector(".alert-box");
const closeBtn=document.querySelector(".close-alert");
let timer;

let ajoutValider = document.getElementById("ajoutValider");


// valider.addEventListener('click', validation);

// function validation(event) {
//     if (cni.validity.valueMissing) {
//         event.preventDefault();
//         missCni.textContent = "Cni manquant";
//         missCni.style.color = "red";
//     }
// }


//valider.addEventListener('click', validation);
// valider.addEventListener("click",function () {
//     showAlertBox();
// })


window.onload = function(){
    form_type_client.style.display = 'none';
    form_client_physique.style.display = 'none';
    form_client_moral.style.display = 'none';
    form_compte.style.display = 'none';
    form_compte_simple.style.display = 'none';
    form_courant.style.display = 'none';
    form_bloque.style.display = 'none';
    form_existant.style.display = 'none';
    valider.style.display = 'none';
    //ajoutValider.style.display ='none';
}

function choixClient() {

    if (nouveau.checked){
        form_type_client.style.display = 'block';
        form_existant.style.display = 'none';

        form_client_physique.style.display = 'none';
        form_client_moral.style.display = 'none';
        form_compte.style.display = 'none';
        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';

    } else {
        form_existant.style.display = 'block';
        form_type_client.style.display = 'none';
        /****/

        form_client_physique.style.display = 'none';
        form_client_moral.style.display = 'none';
        form_compte_simple.style.display = 'none';
        form_compte.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    }
}

function choixTypeClient() {

    form_compte.style.display = 'block';
    if (physique.checked){
        form_client_physique.style.display = 'block';
        form_client_moral.style.display = 'none';
        compte_courant.style.display = 'block';

        simple.checked = false;
        bloque.checked = false;
        courant.checked = false;

        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    } else {
        form_client_moral.style.display = 'block';
        form_client_physique.style.display = 'none';
        compte_courant.style.display = 'none';

        simple.checked = false;
        bloque.checked = false;
        courant.checked = false;

        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    }
}

function choixTypeCompte(){

    if (simple.checked){
        form_compte_simple.style.display = 'block';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
    } else {
        if (courant.checked) {
            form_compte_simple.style.display = 'none';
            form_courant.style.display = 'block';
            form_bloque.style.display = 'none';
        }else{
            form_compte_simple.style.display = 'none';
            form_courant.style.display = 'none';
            form_bloque.style.display = 'block';
        }
    }
    valider.style.display = 'block';
}

function searchValid() {
    form_compte.style.display = 'block';
}

// Afficher le message success dans l'alert


// myBtn.addEventListener("click",function () {
//     //showAlertBox();
// })
// closeBtn.addEventListener("click",function () {
//     hideAlertBox();
//     clearTimeout(timer);
// })

// function showAlertBox(){
//     alertBox.classList.remove("hide");
//     alertBox.classList.add("show");
//       // hide animation onload
//     if(alertBox.classList.contains("hidden")){
//         alertBox.classList.remove("hidden");
//     }
//     timer=setTimeout(function(){
//         hideAlertBox();
//     },4000)
// }
// function hideAlertBox(){
//     alertBox.classList.remove("show");
//     alertBox.classList.add("hide");
// }
