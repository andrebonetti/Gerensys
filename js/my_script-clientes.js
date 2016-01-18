var altura_total = $("#todos_clientes").outerHeight();
$("#por_atividade").hide();

$(".btnAtividade").on("click",buscarAtividade);

function buscarAtividade(){
    
    $(".btnTodos").removeClass("active");   
    $("#por_atividade").hide();
    $("#todos_clientes").hide();
    $(".cliente_atual").hide();
    
    var idAtividade = $(this).attr("id");
    
    if(idAtividade == "000")
    {
        $("#todos_clientes").show();
    }
    else{
        $("#por_atividade").show();
        $(".cliente_atual").each(function(){

            if( $(this).attr("name") == "clienteAtividade_" + idAtividade )
            {
                $(this).show();
            }

        })
    }
    
    $(".lista_clientes").css("height",altura_total);
    
};