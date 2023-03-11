<!doctype html>
<html>
    <head>
        <title>accueil page </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/connex.css">
    </head>
    <body class="body">
        <header>
            <div class="font">
            <div>
                <a href="#"><img src="image/index.png"></a>
            </div>
           <div>
               <h1 align="center"><b>INSTITUT AFRICAIN D'INFORMATIQUE CENTRE D'EXCELENCE TECHNOLOGIE PAUL BIYA</b></h1>
            
            </div>
                        <div>
                <a href="#"><img src="image/index.png"></a>
            </div>
                </div>
       </header>
        <div class="page">
            <section>
                <form method="POST" action="connexion.php">
                    <div>
                         <label for="usernames">usernames</label>
                    <input type="text" name="user" required>
                    </div><br>
                   <div>
                         <label for="password" >password</label>
                    <input type="password" name="pass" required>
                    </div><br>
                  <div>
                      <input type="reset" name="effacer">
                      <input type="submit" name="envoyer" value="envoyer">
                    
                    </div>
                </form>
            </section>
            </div>
    </body>
</html