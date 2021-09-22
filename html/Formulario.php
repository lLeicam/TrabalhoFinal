<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <form  class="row g-3" method="post" action="../php/cadastrar.php">
                <p>Formulario cliente</p>
                <div class="col-md-6">
                    <label for="text">Nome completo</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite nome completo" id="name" required>
                </div>
                    <br>
                    <div class="col-md-6">
                    <label for="genero">Gênero</label>
                    <input type="text" class="form-control" name="genero" placeholder="Digite seu gênero" id="genero" required>
                    </div>
                    <br>
                <div class="col-md-6">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" name="user" placeholder="@usuario" id="usuario" required> 
                </div>
                    <br>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email" id="email" required>
                </div>
                    <br>
                <div class="col-md-6">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="senha" id="senha" required>
                </div>
                    <br>
                <div class="col-md-6">
                    <label for="password">Confirmar senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="confirma senha" id="confirSenha" required>
                </div>
                    <br>
                <div class="col-md-4">
                    <label for="date">Data de nascimento</label>
                    <input type="date" class="form-control" name="date" id="dataNasc" required>
                </div>
                    <br>
                <div class="col-md-4" name="formCPF">
                    <label for="text">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" maxlength="14" onkeyup="mascaraCPF()" required>
                </div>
                    <br>
                <div class="col-md-4">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Digite seu número de telefone" required>
                </div>
                <div class="row g-3">
                    <p style="font-size: 30px;">Endereço</p>
                <div class="col-md-6">
                    <label for="text">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP" maxlength="9" onkeyup="mascaraCEP()" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text">UF</label>
                    <input type="text" class="form-control" name="uf" id="uf" placeholder="Digite seu estado" required>            
                </div>
                <br>
                <div class="col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite sua cidade" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="rua">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="rua" placeholder="Digite sua rua" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number">Nº</label>
                    <input type="number" class="form-control" name="numero" id="numero" placeholder="Número residencial" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Casa, apart, block, etc..." required>
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" style="border-radius: 30px;" class="btn btn-primary" onclick="validar()">Enviar</button>
                </div>
                <br>
                </div>
                </div>
            </form> 
        </div>
    </div> 
    
<script src="../js/formulario.js"></script>    
</body>

</html>
