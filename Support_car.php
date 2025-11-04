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
        <h1 class="title">24/7 Support</h1>
        <div class="content">
            <div class="text">
                    <h2>Une assistance disponible à tout moment</h2>
                    <p>Votre tranquillité d’esprit ne s’arrête pas à la location. Chez Auto Rush, notre service client est disponible 24 heures sur 24 et 7 jours sur 7 pour répondre à toutes vos questions, vous assister en cas d’urgence ou vous guider pendant votre location.

Que ce soit une panne, une demande d’information, un changement de réservation ou un besoin d’assistance routière, nous sommes toujours joignables par téléphone, e-mail ou via notre chat en ligne. Notre priorité : être là pour vous, peu importe l’heure ou la situation.

Avec Auto Rush, vous n’êtes jamais seul sur la route.

</p>
                        <button ><a href="service.php" style="color: aliceblue;text-decoration: none;">Retour</a></button>
            
                
            </div>
            <div class="image">
                <img src="img1.jpg" alt="Chef cuisinier">
            </div>
        </div>
    </div>
</body>
</html>