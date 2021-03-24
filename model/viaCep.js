$( "#cep" ).blur(function(){
    var numCep = $("#cep").val();
    
    $.ajax({
        method: "GET",
        url: "https://viacep.com.br/ws/"+numCep+"/json/"
    })
    .done(function(retorno) {
        $("#rua").val(retorno.logradouro);
        $("#bairro").val(retorno.bairro);
        $("#cidade").val(retorno.localidade);
        $("#uf").val(retorno.uf);
    })
})