function validar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var confirSenha = document.getElementById('confirSenha').value;
    var cpf = document.getElementById('cpf').value;
    var cep = document.getElementById('cep').value;

    if(document.forms[0].email.value.indexOf('@') == -1
    || document.forms[0].email.value.indexOf('.') == -1){
        alert('Informe um email válido');
    }

    if(senha.length < 8){
        alert('Informe uma senha valida')
    }

    if(confirSenha != senha){
        alert('As senhas não correspondem')
    }

}

function mascaraCEP(){
    if(cep.value.length == 5){
        cep.value += "-"
    }
}


function mascaraCPF(){

    if(cpf.value.length == 3){
        cpf.value += "."
    } else if(cpf.value.length == 7){
        cpf.value += "."
    } else if(cpf.value.length == 11){
        cpf.value += "-"
    }

    
}