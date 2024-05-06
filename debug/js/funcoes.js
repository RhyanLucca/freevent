let selectEstado = document.getElementById('estado');


selectEstado.onchange = function(){
    let selectCidade = document.getElementById('cidade');
    selectCidade.innerHTML = "<option>Olá</option>";
}