<div class="navigation">
    <!-- Barra de navegação -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Página Inicial</a></li>
            <li class="breadcrumb-item" aria-current="page">Cursos</li>
        </ol>
    </nav>
</div>
<div class="row">
    <?php
    $sqlCurso = mysqli_query($link, "SELECT * FROM curso GROUP BY titulo ASC");
    if (mysqli_num_rows($sqlCurso) < 1) {
        echo '<div class="col"><div class="alert alert-info col">Nenhum curso cadastrado.</div></div>';
    } else {
        while ($rowCursos = mysqli_fetch_object($sqlCurso)) {
            ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" height="200" src="public/uploads/<?= $rowCursos->arquivo ?>"
                         alt="<?= $rowCursos->titulo ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $rowCursos->titulo ?></h5>
                        <p class="card-text"><?= $rowCursos->manchete ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="index.php?pagina=curso&id=<?=$rowCursos->id?>" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } ?>
</div>