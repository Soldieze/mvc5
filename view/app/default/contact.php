<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>contact</title>
</head>
<body>
    <h1>bonjour <?=$username?></h1>
    <div>
        <input type="text" id="name" placeholder="Nom">
        <input type="text" id="last_name" placeholder="Prénom">
        <input type="text" id="email" placeholder="Email">
        <input type="text" id="objet" placeholder="Objet du commentaire">
    </div>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Commentaire de <?= $username ?>"></textarea>
</body>
</html>