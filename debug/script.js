var btn = document.getElementById('button1')
var form = document.getElementById('form1');

form.onsubmit = function(e){
    e.preventDefault();
    
    var nome = document.getElementById('nome').value;
    console.log(nome);

    formSubmit();

    form.reset();

}

function formSubmit(){
    var ajax = new XMLHttpRequest();

    ajax.open('POST', 'teste.php');
    ajax.setRequestHeader('content-type')
    ajax.onreadystatechange = function(){
        // console.log(ajax.status)
        // console.log(ajax.readyState)
        // console.log(ajax.responseText)
        if(ajax.status == 200 && ajax.readyState ==4){
            console.log(ajax.responseText);
        }
    }
    
    ajax.send();

}



// document.getElementById('button1').addEventListener('click', function(){
//     console.log('teste')
// })
// var xhr = new XMLHttpRequest();

// xhr.onreadystatechange = function(){
//     console.log(xhr.readyState);
// }

// xhr.open('GET', 'return-events.php');
// xhr.send();