function enviarAvaliacao() {
    var avaliacao = document.getElementById('avaliacao').value;
    var comentario = document.getElementById('comentario').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'salvar_avaliacao.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('mensagens').innerHTML = 'Avaliação enviada com sucesso!';
        } else {
            document.getElementById('mensagens').innerHTML = 'Erro ao enviar avaliação.';
        }
    };
    xhr.send('avaliacao=' + avaliacao + '&comentario=' + comentario);
}
function carregarAvaliacoes() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'carregar_avaliacao.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('sessaoComentarios').innerHTML = xhr.responseText;
        } else {
            console.log('Erro ao carregar avaliações.');
        }
    };
    xhr.send();
}
