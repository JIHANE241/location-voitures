<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
         padding: 50px 20px;
        background-color:rgb(255, 254, 254);
    }
    .title{
        background-color:rgb(248, 246, 246);}
       
    
    .container h1 {
        font-size: 30px;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #0c0c0c;
        margin-bottom: 20px;
        text-align: center;
        padding: 20px 40px;
        border: 5px solid rgb(161, 19, 19);
        border-radius: 50px;
    }
    
    .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .text {
        
        flex: 1;
        padding: 20px;
    }
    
    .text h2 {
        color:rgb(109, 10, 10);
    }
    
    .text p {
        font-size: 20px;
        line-height: 1.6;
        border: solid 1px #ccc;
        padding: 10px;
        border-radius: 10px;
        background-color: rgb(109, 10, 10);
        color: white;
    }
    
    .image {
        width: 35%;
    }
    
    .image img {
        max-width: 100%;
        border-radius: 10px;
    }
    button {

        background-color:rgb(109, 10, 10);
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        margin-left: 530px;
        margin-top: 120px;
        border: none;
    }
    </style>
</head>
<body>
     <div class="container">
        <h1 class="title">Parts Repair</h1>
        <div class="content">
            <div class="text">
                    <h2>Des réparations fiables pour repartir en sécurité
</h2>
                    <p>Votre voiture montre des signes de faiblesse ? Freins moins efficaces, climatisation défaillante, bruits suspects ? Chez Auto Rush,
                       nous vous proposons un service complet de réparation de pièces automobiles. Nos techniciens expérimentés prennent 
                       en charge tous types de réparations mécaniques et électroniques : moteur, freins, transmission, amortisseurs,
                       climatisation, éclairage, etc.
                       Auto Rush, c’est l’assurance d’un service honnête, rapide et efficace pour remettre votre véhicule en parfait état.</p>
                        <button ><a href="service.php" style="color: aliceblue;text-decoration: none;">Retour</a></button>
            
                
            </div>
            <div class="image">
                <img src="images/img1.jpg" alt="Chef cuisinier">
            </div>
        </div>
    </div>
</body>
</html>