var titulo;
var descricao;
var dataf;
var hora;
var local;
var categoria;
var preco;
var imagens;

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
        var actionf = 'updateevent';
        if(imgf == ""){
            imgf = "https://www.posgraduacaounincor.com.br/assets/Unincor/images/sem-imagem.jpg";
        }
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
                console.log("K");

                modal.style.display = 'block';

            }
        });
    });        
});

function insert_dados() {
    var actionf = 'edit_event';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            action: actionf
        },
        success: function(response) {
            var data = JSON.parse(response);
            titulo = data.titulo;
            descricao = data.descricao;
            hora = data.hora;
            local = data.local;
            categoria = data.categoria;
            preco = data.preco;
            imagens = data.imagens;
            dataf = data.data;

            // Faça o que você deseja com os valores recebidos
            document.getElementById('f-titulo').value = titulo;
            document.getElementById('f-desc').value = descricao;
            document.getElementById('f-data').value = dataf;
            document.getElementById('f-hora').value = hora;
            document.getElementById('f-local').value = local;
            document.getElementById('f-categoria').value = categoria;
            document.getElementById('f-preco').value = preco;
            document.getElementById('f-img').value = imagens;

        }
    });
}

function GoPrincipal() {
    window.location.href = "principal.php";
}

$(document).ready(function() {
    insert_dados();
});

