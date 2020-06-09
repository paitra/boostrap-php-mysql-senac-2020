$(document).ready(function(){
    $('#form-publicacoes').validate({
        rules: {
            aluno: 'required',
            curso: 'required',
            data: 'required',
            conteudo: 'required'
        },
        messages: {
            aluno: 'Insira o nome do aluno',
            curso: 'Insira o nome do curso',
            data: 'Insira a data da publicação',
            conteudo: 'Insira o conteúdo da publicação'
        },        
        errorPlacement: function(error, element) {            
            error.insertAfter(element).addClass('text-danger');
        },
        errorClass: "is-invalid"
    });
});