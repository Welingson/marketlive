<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $head ?>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>">
    <script src="https://kit.fontawesome.com/d7c3507a38.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav-menu">
        <div id="nav">
            <div id="logo">
                <h2 class="">MarketLive</h2>
            </div>
            <div id="menu">
                <a href="">HOME</a>
                <a href="">COMO FUNCIONA</a>
                <a id="login" href="" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fas fa-user-alt mr-2"></i>Sou cliente</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-leaf mr-2"></i>Sou feirante</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <?= $v->section("content"); ?>
    </main>
    <script src="<?= theme("/assets/scripts.js"); ?>"></script>

</body>

</html>