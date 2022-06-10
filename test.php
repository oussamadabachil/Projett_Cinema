<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <main>



    <section>
        <h1>The best offer<br>
        <span>for your business</span></h1>

        
    </section>
        <fieldset>
            <form action="#" method="post">
                <div>
                    <input type="name" id="firstname" name="nom" placeholder="Firstname">
                    <input type="name" id="lastname" name="prenom" placeholder="Lastane">

                </div>
                    <input type="mail" id="mail" name="email" placeholder="Email adress">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <!-- <input type="radio" id="newsletter" name="newsletter" value="newsletter"
                    checked>
                    <label for="huey">Subscribe to newsletter</label> -->
                    <input type="submit" name="inscrire"value="SIGN UP">
                    <p>or sign up with:</p>
                     <ul>
                         <li><a href=""><img src="img/facebook.png" alt="facebook"></a></li>
                         <li><a href=""><img src="img/facebook.png" alt="facebook"></a></li>
                         <li><a href=""><img src="img/facebook.png" alt="facebook"></a></li>
                     </ul>
               

            </form>
        </fieldset>
    </main>
  
    
</body>
</html>



<style>
    body{
        background-color: black;
    }
    *{
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin: 0 auto;
    }
    fieldset{
        border: none;
        padding: 1rem;
    }
    fieldset form p{
        text-align: center;
    }

    fieldset form ul{
        display: flex;
        justify-content: space-around;
        list-style: none;
    }
    fieldset form{
        display: block;
        border-radius: .5rem;
        margin: 0 auto;
        background-color: white;

    }

    fieldset form div{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin: 0 auto;
        gap: 1rem;
        width: 90%;
        
    }

    fieldset form div input{
        width: 100%;
        height: 2rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 0.5rem;
        font-size: 1rem;
        margin: 2rem auto;
    }
    fieldset form input{
        width: 90%;
        display: block;
        height: 2rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
        margin: 1rem auto;

    }

    fieldset form input[type="submit"]{
        width: 20rem;
        display: block;
        height: 2rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
        margin: 1rem auto;
        /* background-color: rgb(1, 1, 1); */
        color: #000;
    }
</style>

<?php
   
session_start();
try {

    // On se connecte à MySQL
        $_host = "localhost";
        $_dbname = "PPE-slk";
        $_user = "root";
        $_password = "root";
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    if(isset($_POST["inscrire"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $newsletter = $_POST["newsletter"];
        $inscrire = $_POST["inscrire"];

        $req = $bdd->prepare("INSERT INTO table(nom, prenom, email, 'password') VALUES(:nom, :prenom, :email, :'password')");
        $req->execute(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "password" => $password,
            // "newsletter" => $newsletter
        ));

        header("location: connexion.php");
    }

?>