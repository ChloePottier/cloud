<?php include('doctype.php')?>
    <title>Cloud - Connexion</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
        <p style="text-align: center;">Merci de vous identifier pour accéder à notre site</p>
        <form action="functions.php" method="POST" style="display:flex; flex-direction: column; width:250px; margin: auto; padding-top: 150px;">
            <label for="identifiant" >Votre identifiant</label>
            <input id="user" name="user" type="text" required/>
            <label for="identifiant">Votre mot de passe</label>
            <input id="pwd" name="pwd" type="password" required/>
            <button type="submit" value="submit" style="width: 150px; height: 30px;margin-top:10px;">Se connecter</button>
                
        </form>
        </div>
    </div>
</body>
</html>