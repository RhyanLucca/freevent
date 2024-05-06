// Define as variáveis globais para os elementos HTML
const ufSelect = document.getElementById('ufSelect');
const munSelect = document.getElementById('munSelect');

// Carrega os dados dos estados e municípios do arquivo JSON uma vez
fetch("brasil.json")
    .then(response => response.json())
    .then(data => {
        // Preenche o select de estados
        data.estados.forEach(estado => {
            ufSelect.innerHTML += `<option value='${estado.sigla}'>${estado.nome}</option>`;
        });
        
        // Quando o estado é alterado, preenche o select de municípios correspondente
        ufSelect.addEventListener('change', () => {
            munSelect.innerHTML = ""; // Limpa as opções anteriores
            const estadoSelecionado = data.estados.find(estado => estado.sigla === ufSelect.value);
            if (estadoSelecionado) {
                estadoSelecionado.cidades.forEach(cidade => {
                    munSelect.innerHTML += `<option value='${cidade}'>${cidade}</option>`;
                });
                munSelect.disabled = false;
            } else {
                munSelect.disabled = true;
            }
        });
    })
    .catch(error => {
        console.error('Ocorreu um erro ao carregar os dados:', error);
    });