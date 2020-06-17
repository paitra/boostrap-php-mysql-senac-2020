<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Meu site com Bootstrap</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/all.min.css">
</head>
<body>
<div class="container">
    <header class="pb-3">
        <div class="row flex-nowrap justify-content-between align-items-center pt-3 pb-3">
            <div class="col-4 pt-1">
                <a href="#" class="text-muted" id="data">
                    <?=date('d/m/Y')?>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="index.php">
                    <img id="logo" class="col-md-6" src="../public/images/senac.png"> <!-- Logo Senac -->
                </a>
            </div>
            <div class="col-4 text-right">
                <strong>
                    <a href="index.php?pagina=usuario/formulario"><?=$_SESSION['nome']?>
                    </a>
                </strong><br>
                <?=$_SESSION['email']?><br>
                <a href="logout.php">Sair</a>
            </div>
        </div>
        <div id="menu">
            <div class="nav-scroller">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="index.php?pagina=publicacoes/listagem">Publicações</a>
                    <a class="p-2 text-muted" href="index.php?pagina=unidades">Unidades</a>
                    <a class="p-2 text-muted" href="index.php?pagina=cursos/listagem">Cursos</a>
                    <a class="p-2 text-muted" href="index.php?pagina=sobre/formulario">Sobre</a>
                </nav>
            </div>
        </div>
    </header>