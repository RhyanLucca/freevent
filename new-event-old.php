<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Tabela de Contratação</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <h2>Contratação de Profissionais</h2>
    <form id="contratacaoForm">
        <label for="profissao">Profissão:</label>
        <select id="profissao" required>
            <option value="">Selecione a Profissão</option>
            <option value="seguranca_eventos">Segurança de Eventos</option>
            <option value="bombeiro">Bombeiro</option>
            <option value="controlador_acessos">Controlador de Acessos</option>
        </select><br><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" required>
            <option value="">Selecione o Sexo</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
        </select><br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" required><br><br>
        <label for="valor">Valor Pago por Unidade:</label>
        <input type="number" id="valor" required><br><br>
        <button type="button" onclick="adicionarContratacao()">Adicionar Contratação</button>
    </form>
    <br>
    <table id="tabelaContratacoes">
        <thead>
            <tr>
                <th>Profissão</th>
                <th>Sexo</th>
                <th>Quantidade</th>
                <th>Valor Unitário</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tbodyContratacoes">
        </tbody>
    </table>
    <p id="totalContratacoes">Total: R$ 0.00</p>

    <script>
        let contratacoes = [];
        let total = 0;

        function adicionarContratacao() {
            const profissao = document.getElementById('profissao').value;
            const sexo = document.getElementById('sexo').value;
            const quantidade = parseInt(document.getElementById('quantidade').value);
            const valor = parseFloat(document.getElementById('valor').value);
            const totalContratacao = quantidade * valor;
            total += totalContratacao;

            contratacoes.push({
                profissao: profissao,
                sexo: sexo,
                quantidade: quantidade,
                valor: valor,
                total: totalContratacao
            });

            renderizarTabela();
            atualizarTotal();
        }

        function excluirContratacao(index) {
            total -= contratacoes[index].total;
            contratacoes.splice(index, 1);
            renderizarTabela();
            atualizarTotal();
        }

        function renderizarTabela() {
            const tbody = document.getElementById('tbodyContratacoes');
            tbody.innerHTML = '';

            contratacoes.forEach((contratacao, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${contratacao.profissao}</td>
                    <td>${contratacao.sexo}</td>
                    <td>${contratacao.quantidade}</td>
                    <td>R$ ${contratacao.valor.toFixed(2)}</td>
                    <td>R$ ${contratacao.total.toFixed(2)}</td>
                    <td><button onclick="excluirContratacao(${index})">Excluir</button></td>
                `;
                tbody.appendChild(tr);
            });
        }

        function atualizarTotal() {
            const totalElement = document.getElementById('totalContratacoes');
            const taxa = total * 0.1;
            const totalComTaxa = total + taxa;
            totalElement.textContent = `Total: R$ ${totalComTaxa.toFixed(2)} (incluindo 10% de taxa)`;
        }
    </script>
</body>
</html>
