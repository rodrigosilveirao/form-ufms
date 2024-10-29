<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Relatório de Cadastro</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Nome Completo</th>
                    <td><?php echo htmlspecialchars($_POST['nome']); ?></td>
                </tr>
                <tr>
                    <th>CPF</th>
                    <td><?php echo htmlspecialchars($_POST['cpf']); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo htmlspecialchars($_POST['email']); ?></td>
                </tr>
                <tr>
                    <th>Endereço</th>
                    <td><?php echo htmlspecialchars($_POST['end']); ?></td>
                </tr>
                <tr>
                    <th>Bairro</th>
                    <td><?php echo htmlspecialchars($_POST['bairro']); ?></td>
                </tr>
                <tr>
                    <th>Cidade</th>
                    <td><?php echo htmlspecialchars($_POST['cidade']); ?></td>
                </tr>
                <tr>
                    <th>UF</th>
                    <td><?php echo htmlspecialchars($_POST['uf']); ?></td>
                </tr>
                <tr>
                    <th>CEP</th>
                    <td><?php echo htmlspecialchars($_POST['cep']); ?></td>
                </tr>
                <tr>
                    <th>Data de Nascimento</th>
                    <td><?php echo htmlspecialchars($_POST['dataNascimento']); ?></td>
                </tr>
                <tr>
                    <th>Celular</th>
                    <td><?php echo htmlspecialchars($_POST['celular']); ?></td>
                </tr>
                <tr>
                    <th>Login</th>
                    <td><?php echo htmlspecialchars($_POST['login']); ?></td>
                </tr>
                <tr>
                    <th>Interesses</th>
                    <td>
                        <?php 
                            if (!empty($_POST['interesses'])) {
                                echo implode(", ", array_map('htmlspecialchars', $_POST['interesses']));
                            } else {
                                echo "Nenhum interesse selecionado";
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
