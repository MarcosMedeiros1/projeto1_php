$(function(){
    $("#busca").keyup(function(){
        var buscar = $(this).val();

        if(buscar != ''){
            var dados = {
                palavra : buscar
            }
            $.post('model/proc_busca.php', dados, function(retorna){
                $(".resultado").html(retorna);
            });
        }
    });
});