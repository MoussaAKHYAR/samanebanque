<?php
/* Smarty version 3.1.30, created on 2020-08-04 14:45:38
  from "C:\xampp\htdocs\mesprojets\samaneBanque\src\view\responsable\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f295872ead737_11492383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e21532884cb9feb2b440b03f0d2d98e90e91470' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\samaneBanque\\src\\view\\responsable\\index.html',
      1 => 1596544723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f295872ead737_11492383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <?php echo '<?php
';?>session_start();
if ($_SESSION['nom'] == "") {
    header("location:login");
}

<?php echo '?>';?>  -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="une page d'ouverture de compte client du projet : Gestion des activités bancaires">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/banque.css" />
    <title>Banque</title>
</head>
<body>
    <header id="top" class="bg-white">
        <nav  class="flex-row">
            <div class="logo">
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo-Recupere.png" alt="logo banque du peuple" class="image"/></a>
            </div>
        <div class="texte plus-grand text-center">
            <h1 class="title-banque"> Banque du peuple </h1>
        </div>
        <div class="user-logo">
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user.jpeg" alt="logo banque du peuple" class="image"/></a>
        </div>
        </nav>
    </header>
    <main class="flex-row">
        <section id="left" class="bg-white ">
        <div class="info-user flex-row">
            <div class="img">
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user.jpeg" alt="logo banque du peuple" class="image"/></a>
            </div>
            <div class="plus-grand">
                <p><?php echo '<?php
                    ';?>echo $_SESSION['nom']." ".$_SESSION['prenom'];
                <?php echo '?>';?>
                </p>
                <p>Fonction : Responsable</p>
                <p>Agence : AZER1231</p>
            </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="site-bar">
                <div class="marge">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/compte.png" alt="ok" class="icone" />
                    <a href="#" class="bolt"> Gestion Compte </a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsable"> Ajouter Compte </a></li>
                        <li><a href="#"> Lister Compte </a></li>
                        <li><a href="#"> Fermer Compte </a></li>
                    </ul>
                </div>
                <div class="marge">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/compte.png" alt="ok" class="icone"  />
                    <a href="#" class="bolt"> Opération bancaire </a>
                    <ul>
                        <li><a href="#"> Opération de virement  </a></li>
                    </ul>
                </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
loginController?logout=yes">
                <input type="button" class="btn bg-red" value="Se déconnecter">
                </a>
            </div>
        </section>
        <section id="contain" class="plus-grand bg-white">
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientCompte/add" method="POST">
                <div id="taplap" class="flex-row flex-center">
                    <div class="item bg-red">
                        Client :
                    </div>
                    <div class="item bg-red">
                        Information Client :
                    </div>
                    <div class="item bg-red">
                        Information Compte :
                    </div>
                    <!-- <div class="item bg-red notif" id="ajoutValider">
                        <p>Compte ajouter avec success !!!</p>
                        <span class="">&times;</span>
                    </div> -->
                </div>
                <div class="flex-row">
                    <!-- <?php echo '<?php
                        ';?>if (isset($_GET['ok'])){
                            if ($_GET['ok']==1) {
                                echo"<p class = 'ok' > Données ajoutées </p>";
                            }
                        }
                    <?php echo '?>';?> -->
                </div>
                <hr class="marge"/>
                <div id="contenue">
                    <!-- <div class="alert-box hide hidden">
                        <p>Compte ajouter avec success !!!</p>
                        <span class="close-alert">&times;</span>
                    </div> -->
                    <div id="form_client" class="flex-row flex-right">
                        <div class="radio">
                            <input type="radio" name="choix_client" value="nouveau" id="nouveau" onclick="choixClient()"/>
                            <label for="ok1">Nouveau</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="choix_client" value="existant" id="existant" onclick="choixClient()"/>
                            <label for="ok2">Existant</label>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div id="form_type_client">
                            <fieldset>
                                <legend class="text-center"> Type de Client</legend>
                                <div class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" value="physique" id="physique" onclick="choixTypeClient()"/>
                                        <label for="ok1">Physique</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" value="entreprise" id="entreprise" onclick="choixTypeClient()" />
                                        <label for="ok2">Entreprise</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="form_existant">
                            <fieldset class="flex-col">
                                <legend class="text-center"> Client Existant </legend>
                                <div class="form-group flex-row-between">
                                    <label for="">Identifiant du client </label>
                                    <input type="search" name="query" id="query"/>
                                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/img/search.png" alt="" class="search" onclick="searchValid()" /></a>
                                </div>
                            </fieldset>
                        </div>
                        <div id="form_compte" >
                            <fieldset>
                                <legend class="text-center">Type de compte</legend>
                                <div  class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" value="simple" id="simple" onclick="choixTypeCompte()"/>
                                        <label for="ok1">Simple et Xeewel</label>
                                    </div>
                                    <div class="radio" id='compte_courant'>
                                        <input type="radio" name="choix_compte" value="courant" id="courant" onclick="choixTypeCompte()"/>
                                        <label for="ok2">Courant</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" value="bloque" id="bloque"  onclick="choixTypeCompte()"/>
                                        <label for="ok2">Bloqué</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div class="flex-row">
                            <div id="form_client_physique" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Nouveau Client Physique</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">CNI</label>
                                        <input type="text" name="cni" id="cni" required />
                                        <span id = "missCNI"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom</label>
                                        <input type="text" name="nom" id="nom" required />
                                        <span id = "missNom"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Prenom</label>
                                        <input type="text" name="prenom" id="prenom" required />
                                        <span id = "missPrenom"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Sexe</label>
                                        <input type="text" name="sexe" id="sexe" required/>
                                        <span id = "missSexe"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Date de naissance</label>
                                        <input type="date" name="dateNaiss" id="dateNaiss" required/>
                                        <span id = "missDateNaissance"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Telephone</label>
                                        <input type="text" name="telephoneP" id="telephoneP"  required />
                                        <span id = "missTelephone"></span>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Adresse</label>
                                        <input type="text" name="adrPersonne" id="adrPersonne" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Email (optionnel)</label>
                                        <input type="emailP" name="emailP" id="emailP"  />
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_client_moral" class="flex-row">
                                <fieldset class="flex-col ">
                                    <legend class="text-center"> Nouveau Client Entreprise</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom Entreprise <span class="white"></span></label>
                                        <input type="text" name="nomE" id="nomE" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Telephone</label>
                                        <input type="text" name="telephone" id="telephone"   />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Email (optionnel)</label>
                                        <input type="email" name="email" id="email"  />
                                    </div>
                                    <!-- <div class="form-group flex-row-between">
                                        <label for="">Budget</label>
                                        <input type="number" name="budget_entreprise" id="budget_entreprise" />
                                    </div> -->
                                    <div class="form-group flex-row-between">
                                        <label for="">Localité </label>
                                        <input type="text" name="adrEntreprise" id="adrEntreprise" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="flex-row">
                            <div id="form_compte_simple" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Simple et Xeewel</legend>
                                    <div class="form-group">
                                        <label for="">frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label for="">Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_courant" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Courant</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">Raison social </label>
                                        <input type="text" name="raisonSocial" id="raisonSocial" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Salaire</label>
                                        <input type="number" name="salaire" id="salaire" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom Employeur</label>
                                        <input type="text" name="nomEmpl" id="nomEmpl" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Téléphone Employeur</label>
                                        <input type="text" name="telEmpl" id="telEmpl" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Numero d'identification</label>
                                        <input type="text" name="numeroIdentification" id="numeroIdentification" />
                                    </div>
                                    <!-- <div class="form-group flex-row-between">
                                        <label for="">Adresse</label>
                                        <input type="text" name="adr_employeur" id="adr_employeur" />
                                    </div> -->
                                    <div class="form-group flex-row-between">
                                        <label for="">agios  : à retirer tous les trois mois.</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_bloque" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Bloqué</legend>
                                    <div class="form-group">
                                        <label for="">frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label for="">Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Date Debut</label>
                                        <input type="date" name="dateDebut" id="dateDebut" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Date Fin</label>
                                        <input type="date" name="dateFin" id="dateFin" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <input type="submit" name="valider" value="Valider" id="valider" class="bg-red"  />
                </div>
            </form>
        </section>
    </main>
    <footer>
        <section class="text-center bg-white footer">
            &copy Copyright @Groupe 5
        </section>
    </footer>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/banque.js"><?php echo '</script'; ?>
>

<!-- <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('#query').keyup(function(){
            var client = $(this).val();
            if (client != ""){
                $.ajax({
                    type:'GET',
                    url:'controller/clientController.php',
                    data:'client = ' + encodeURIComponent(client),
                    success: function(data){
                        if (data != "") {
                            console.log(client);
                        }else{

                        }
                    }

                });
            }
        });
    });
<?php echo '</script'; ?>
> -->
</body>
</html><?php }
}
