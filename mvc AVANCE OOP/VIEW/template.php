<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./RESOURCES/style.css">
    <title><?= $this->title; ?></title>
</head>
<body>

    <div id="global">
        <header>
            <h1 class="h11">Bienvenue!</h1>
        </header>
    </div>

    <div id="content">
        <?= $this->content; ?>
    </div>


</body>
</html>