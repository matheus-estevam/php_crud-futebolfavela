<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    $primeiro_nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO `usuario`(`id`, `primeiro_nome`, `sobrenome`, `email`, `genero`) VALUES (NULL, '$primeiro_nome', '$sobrenome' ,'$email','$genero')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Novo registro criado com sucesso");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Adicionando Jogadores - 1 vs 1 Futebol Favela</title>
</head>

<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #87CEEB;">
        1 vs 1 Futebol Favela - ⚽🌇
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Adicionar novo jogador(a)</h3>
            <p class="text-muted">Preencha o formulário abaixo para adicionar um novo jogador(a)</p>
        </div>


        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Albert">
                    </div>

                    <div class="col">
                        <label class="form-label">Sobrenome:</label>
                        <input type="text" class="form-control" name="sobrenome" placeholder="Einstein">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>

                <div class="form-group mb-3">
                    <label>Gênero:</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="genero" id="male" value="masculino">
                    <label for="male" class="form-input-label">Masculino</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="genero" id="female" value="feminino">
                    <label for="female" class="form-input-label">Feminino</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>



    



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>