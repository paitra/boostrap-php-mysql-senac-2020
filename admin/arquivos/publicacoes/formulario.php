<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de publicação";
    $botao = 'Atualizar';
    $publicacao = mysqli_query($link,"SELECT * FROM publicacao WHERE id=$id");
    if(mysqli_num_rows($publicacao)<1){
        echo 'Publicação não encontrada';
        exit();
    }
    $buscaPublicacao = mysqli_fetch_object($publicacao);
}else{
    $titulo = "Formulário de cadastro de publicação";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<form method="POST" action="index.php?pagina=publicacoes/acoes&id=<?=$id?>" class="form-horizontal">
    <h2 class="display-5" id="titleform"><?=$titulo?></h2>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPublicacao->aluno?>" class="form-control" name="aluno" placeholder="Digite o nome aluno">
    </div>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPublicacao->curso?>" class="form-control" name="curso" placeholder="Digite o nome do curso">
    </div>
    <div class="input-group mb-3">
        <input type="date" value="<?=$buscaPublicacao->data?>" class="form-control" name="data" placeholder="Selecione a data">
    </div>
    <div class="input-group">
        <textarea class="form-control" name="conteudo" placeholder="Digite o conteúdo da publicação"><?=trim($buscaPublicacao->conteudo)?></textarea>
    </div>
    <div class="mt-4 pb-4">
        <button type="submit" class="btn btn-success"><?=$botao?> publicação</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </div>
</form>