$(document).ready(function () {
    // Função para carregar a lista de produtos
    function carregarProdutos() {
        $.ajax({
            url: '/produtos',
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // Limpa a tabela
                $('#tabela-produtos tbody').empty();
            
                // Preenche a tabela com os dados retornados
                $.each(data, function (index, produto) {
                    var newRow = '<tr>';
                    newRow += '<td>' + produto.nome + '</td>';
                    // Adiciona outras colunas aqui conforme necessário
                    newRow += '<td><button class="excluir-produto" data-produto-id="' + produto.id + '">Excluir</button></td>';
                    newRow += '</tr>';
                    $('#tabela-produtos tbody').append(newRow);
                });
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    // função para carregar produtos
    carregarProdutos();

    $('#tabela-produtos').on('click', '.excluir-produto', function () {
        if (confirm('Deseja realmente excluir este produto?')) {
            var id = $(this).data('produto-id');

            $.ajax({
                url: '/produtos/' + id, 
                method: 'DELETE',
                success: function () {
                    // Atualiza a tabela após a exclusão
                    carregarProdutos();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
});