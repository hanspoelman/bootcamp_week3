<!doctype HTML>
    <html>
        <head>
            <title>Blog website week3</title>
            <link rel="stylesheet" a href="Stylesheetweek3.css">
        </head>
        <body>
         
            <div class="grid-container">
            <div class="item1">
                  <nav>
                    <ul>
                    <li> <a class="active" href="home.php">Blog plaatsen</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="item2"></div>
            <div class="item3">
    
                <a href="registreren.php"><button onclick="myfunction">registreren</button></a>
                <a href="inlog.php"><button onclick="myfunction">inloggen</button></a>
    
                </div>
            <div class="item4">
                <h1>Welkom op mijn blogsite!</h1>
                <p>Leuk dat je een blog wilt plaatsen op mijn blogsite. Voordat je een blog gaat plaatsen wil ik wel graag weten wie je bent.<br>
                    Vul je gegevens. Succes met plaatsen en bedankt voor je medewerking.</p>
                <h2> Hieronder kun je een blogplaatsen!</h2>
            <header>
    
            </header>
                <div class="blogbericht">
                
                    <form action="blogscript.php" method="post"> 
                        <label for="titel"> Titel</label><br>
                        <input type="text" id="titel" name="titel" required><br>
                    
                        <label for="auteur"> Auteur</label><br>
                        <input type="text" id="auteur" name="auteur" required><br>
                        
                        <label for="email">e-mail</label><br>
                        <input type="email" id=email name="email" required><br>    
                    
                        <label for="onderwerp"> Onderwerp</label><br>
                        <input type="text" id="onderwerp" name="onderwerp" required><br>
                        
                        <label for="blog">Blog</label><br>
                        <textarea id="blog" name="blog" required></textarea> <br>
    
                        <label for="verzenden"></label><br>
                        <input type="submit" id="verzenden" name="verzenden"><br>
                        <br>
                    </form>  
                </div>
                
            </div>
            <div class="item5"></div>
            <div class="item6"></div>
            <div class="item7">
                 <footer>
              
            
                    <br>
                <p align="center"> ©Code Gorilla 2018</p>
            </footer>
            </div>
            </div>
            
        </body>
    
</html>