<!doctype html>
    <html>
        <head>
            <title>registratieformulier</title>
            <link rel="stylesheet" a href=Stylesheetweek3.css> 
        </head>
        <body>
            <div class="grid-container">
                <div class="item1"></div>
                <div class="item2"></div>
                <div class="item3"></div>
                <div class="item4">
                    <h2> Aanmelden!</h2>
                    <p> Voer u gegevens om aan te melden.Dit is noodzakelijk om een blog te kunnen plaatsen of beheren.</p>
                    <br>
                
                    <form action="registreerscript1.php" method="post">
                        <label for="username">gebruikersnaam</label><br>
                        <input type="text" id="username" name="username" required><br>
                        
                        <label for="wachtwoord">wachtwoord</label><br>
                        <input type="password" id="password" name="password" required><br>
                        
                        <label for="email">e-mail</label><br>
                        <input type="email" id=email name="email" required><br>   
                        <br>
                        <input type="submit" id="verzenden" name="verzenden"><br>
                        <br>
                    </form>
                    </div>
                <div class="item5"></div>
                <div class="item6"></div>
                <div class="item7"></div>
            </div>
        </body>    
</html> 