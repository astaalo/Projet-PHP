<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <link rel="StyleSheet" type="text/css" href="CompteAdmin.css"/>
 <title> Compte Admin </title>
   </head>
     <body> 
        <div class="blog">  
            <div id="banniere">
                <div id="logo"></div>
                <p> Le plaisir de jouer</p>
            </div>
            <div id="milieu">
            <div id=conteneur>
            <div id="log"><h4> CREER ET PARAMETREZ VOS QUIZZ </h4></div><br><br>
               <div id="blog1">
                <div id="avatar">
                <a href="#"><img src="img/img5.jpg" alt=""></a>
                    <div id="menu">
					<ul>
						<li><a href="ListeQuestions.php" target="_top">Liste Questions</a></li>
						<li><a href="CompteAdmin.php" target="_top">Creer Admin</a></li>
                        <li><a href="ListeJoueurs.php" target="_top">Liste Joueurs</a></li>
                        <li><a href="CreerQuestions.php" target="_top">Creer Questions</a></li>
                    </ul>
                    </div>
                    </div>
                <div id="forml">
                <strong><h4>S'INSCRIRE</h4></strong><br>
                    <h6>Pour proposer des quizz<h6><br><br>
                <a href="#"><img src="img/img5.jpg" alt=""></a>
            <form method="POST" action="CompteAdmin.php">
                    <label for="Prenom">Prenom</label><br><br>
                    <input type="text" placeholder="Prenom" name="Prenom"><br><br>
                    <label for="Nom">Nom</label><br><br>
                    <input type="text" placeholder="Nom" name="Nom"><br><br>
                    <label for="Login">Login</label><br><br>
                    <input type="text" placeholder="Login" name="Login"><br><br>
                    <label for="Password">Password</label><br><br>
                    <input type="text" placeholder="Password" name="Password"><br><br>
                    <label for="Confirmer_Password">Confirmer Password</label><br><br>
                    <input type="text" placeholder="Confirmer Password" name="Confirmer_Password"><br><br>
                    <h5> Avatar </h5>
                    <button type="submit" name="Choisir_un_fichier" id="bt1">Choisir un fichier</button><br><br>
                    <button type="submit" name="Creer_Compte" id="bt2"><a href="PageConnexion.php"> Creer Compte</button>
                </form>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </body>
    </html>