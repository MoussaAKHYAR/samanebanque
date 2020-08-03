let b_nomUtilisateur=false; let b_password=false;
function envoyer()
{
  if (b_nomUtilisateur === true && b_password === true ) {
    // window.alert("Envoi serveur!");
    document.getElementById("connexion").submit();
  }else{
    window.alert("le nom d'utilisateur ou le mot de passe est incorrect ");
  }
}
function saisie(txt_defaut,nom_controle)
{
  if(document.getElementById(nom_controle).value == txt_defaut)
    document.getElementById(nom_controle).value='';

}

function retablir(txt_defaut,nom_controle)
{
  if(document.getElementById(nom_controle).value == '')
    document.getElementById(nom_controle).value = txt_defaut;
}

function mev(txt_defaut,nom_controle)
{
  var longueur = document.getElementById(nom_controle).value.length;

  if(longueur<4 || document.getElementById(nom_controle).value == txt_defaut)
  {
    //document.getElementById(nom_controle).style.border='#fb2525 2px solid';

    switch(nom_controle)
    {
      case 'nomUtilisateur':
        b_nomUtilisateur=false;
        break;
      case 'password':
        b_password=false;
        break;
    }
  }
  else
  {
    //document.getElementById(nom_controle).style.border='#333 1px solid';

    switch(nom_controle)
    {
      case 'nomUtilisateur':
        b_nomUtilisateur=true;
        break;
      case 'password':
        b_password=true;
        break;
    }
  }
}
