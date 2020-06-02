    <div class="table-responsive">
        <h2 class="display-5" id="title-table">Últimas publicações</h2>
        <a href="index.php?pagina=publicacoes/formulario" class="btn btn-info">Cadastrar nova publicação</a>
        <?php
        $sqlPublicacoes = mysqli_query($link, "SELECT * FROM publicacao ORDER BY aluno ASC");
        if (mysqli_num_rows($sqlPublicacoes) > 0) {
        ?>
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Aluno</th>
                <th scope="col">Curso</th>
                <th scope="col">Data</th>
                <th scope="col">Opções</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($rowPublicacoes = mysqli_fetch_object($sqlPublicacoes)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td><?= $rowPublicacoes->aluno; ?></td>
                    <td><?= $rowPublicacoes->curso; ?></td>
                    <td><?= $rowPublicacoes->data; ?></td>
                    <td>
                        <a class="btn btn-danger" href="index.php?pagina=publicacoes/acoes&acao=apagar&id=<?= $rowPublicacoes->id; ?>">Apagar</a>
                        <a class="btn btn-info" href="index.php?pagina=publicacoes/formulario&id=<?= $rowPublicacoes->id; ?>">Alterar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php }else{
            ?>
            <div class="alert alert-warning mt-3 mb-3">Nenhum registro encontrado.</div>
            <?php
        }?>
    </div>
