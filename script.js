window.onload = function(){
    alert('teste')
}

var cpf = document.getElementById('inputUserCpf');
convertCpf = cpf.getAttribute('data-value');
convertCpf = convertCpf.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
cpf.value = convertCpf;

var rg = document.getElementById('inputUserRg');
convertRg = rg.getAttribute('data-value');
convertRg = convertRg.replace(/^(\d{2})(\d{3})(\d{3})(\d{1})/, "$1.$2.$3-$4");
rg.value = convertRg;

//expressão regular
var cnpj = "12345678910113";
// replace
// /^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/
// "$1.$2.$3/$4-$5"
console.log(cnpj.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5"))

var cpf = '51067792864';

// /^(\d{3})(\d{3})(\d{3})(\d{2})/
//"$1.$2.$3-$4"
// console.log(cpf.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"));

<img id='loadingGif' src="loading.gif" alt="loading" style="width:48px;height:48px;display:none;"></img>

btnSearchCep = document.getElementyById('btnSearchCep');

btnSearchCep.onclick = function(){
    
    var xhr = new XMLHttpRequest;
    var cep = document.getElementById('inputUserCep');

    xhr.open('POST', 'searchCep.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('cep='+cep);

    xhr.onreadystatechange= function(){

        while(!xhr.readyState == 4 && xhr.status == 200){
            var loadingGif = document.getElementById('loadingGif');
            loadingGif.style.display = 'block';
            // btnSearchCep.innerHTML = loadingGif;
            // document.getElementById('publication-container').innerHTML = 'Carregando';
        }

        if(xhr.readyState == 4 && xhr.status == 200){
            cep.setAttribute()
        }

    }

}

btnAceptCandidate = document.getElementById('btnAceptCandidate');
btnRejectCandidate = document.getElementById('btnRejectCandidate');

btnAceptCandidate.onclick = function(){
    consoloe.log('aceito')
}
