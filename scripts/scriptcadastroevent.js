const textarea = document.getElementById('f-desc');
const charCount = document.getElementById('char-count');

textarea.addEventListener('input', function() {
  const currentLength = textarea.value.length;
  charCount.textContent = currentLength + '/255 caracteres';
});

$(document).ready(function(){
    $('#form').submit(function(e) {
        e.preventDefault();
        var iduserf = $("#f-iduser").val();
        var titulof = $("#f-titulo").val();
        var descf = $("#f-desc").val();
        var dataf = $("#f-data").val();
        var horaf = $("#f-hora").val();
        var localf = $("#f-local").val();
        var precof = $("#f-preco").val();
        var categoriaf = $("#f-categoria").val();
        var imgf = $("#f-img").val();
        var actionf = 'addevent';

        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                id: iduserf,
                titulo: titulof,
                descricao: descf,
                data: dataf,
                hora: horaf,
                local: localf,
                preco: precof,
                categoria: categoriaf,
                imagem: imgf,
                action: actionf
            },
            success: function(retorno) {              
                console.log(retorno);
            }
        });
    });        
});