<?php

declare(strict_types=1);

require_once "utilitarios.php";

// Clientes iniciais
$clientes = [

    [
        "nome" => " ANA CLARA SILVA ",
        "cpf" => "123.456.789-00",
        "email" => "ana.clara@email.com",
        "contrato" => 1500.00,
        "ativo" => true
    ],

    [
        "nome" => "Carlos Souza",
        "cpf" => "987.654.321-00",
        "email" => "carlos.souza@email.com",
        "contrato" => 850.50,
        "ativo" => false
    ],

    [
        "nome" => "  MARIA OLIVEIRA ",
        "cpf" => "111.222.333-44",
        "email" => "maria@email.com",
        "contrato" => 2500.00,
        "ativo" => true
    ],

    [
        "nome" => "joao santos",
        "cpf" => "555.666.777-88",
        "email" => "joao@email.com",
        "contrato" => 3200.00,
        "ativo" => true
    ]

];

// Cadastra mais um cliente usando a função
cadastrarCliente(
    $clientes,
    "  Fernanda Lima ",
    "fernanda@email.com",
    "999.888.777-66",
    1800.00
);

// Busca um cliente
$clienteEncontrado = buscarCliente(
    $clientes,
    "Ana Clara Silva"
);

// Aplica reajuste de 10% no primeiro cliente
aplicarReajuste(
    $clientes[0]["contrato"],
    10
);

// Calcula os dados do relatório
$totalAtivos = calcularTotalContratosAtivos($clientes);
$media = calcularMediaContratos($clientes);
$totalClientes = contarClientes($clientes);
$clientesAtivos = contarClientesAtivos($clientes);
$maior = maiorContrato($clientes);

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

```
<meta charset="UTF-8">

<title>CRM Senai - Clientes</title>

<style>

    body {
        font-family: Arial;
        background: #f2f2f2;
        padding: 30px;
    }

    .container {
        background: white;
        padding: 25px;
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background: #ddd;
    }

    .resumo {
        margin-top: 25px;
        padding: 15px;
        background: #eee;
    }

</style>
```

</head>

<body>

<div class="container">

```
<h1>Relatório de Clientes - CRM Senai</h1>

<h2>Lista de Clientes</h2>

<table>

    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Contrato</th>
        <th>Situação</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>

        <tr>

            <td>
                <?php echo formatarNome($cliente["nome"]); ?>
            </td>

            <td>
                <?php echo limparCPF($cliente["cpf"]); ?>
            </td>

            <td>
                <?php echo $cliente["email"]; ?>
            </td>

            <td>
                <?php echo formatarMoeda($cliente["contrato"]); ?>
            </td>

            <td>

                <?php

                if ($cliente["ativo"] === true) {
                    echo "Ativo";
                } else {
                    echo "Inativo";
                }

                ?>

            </td>

        </tr>

    <?php endforeach; ?>

</table>


<h2>Busca por Cliente</h2>

<?php

if ($clienteEncontrado !== null) {

    echo "<p><strong>Cliente encontrado:</strong> " .
        formatarNome($clienteEncontrado["nome"]) .
        "</p>";

    echo "<p>CPF: " .
        limparCPF($clienteEncontrado["cpf"]) .
        "</p>";

    echo "<p>E-mail: " .
        $clienteEncontrado["email"] .
        "</p>";

    echo "<p>Contrato: " .
        formatarMoeda($clienteEncontrado["contrato"]) .
        "</p>";

} else {

    echo "<p>Cliente não encontrado.</p>";

}

?>


<div class="resumo">

    <h2>Resumo Financeiro</h2>

    <p>
        <strong>Total dos contratos ativos:</strong>
        <?php echo formatarMoeda($totalAtivos); ?>
    </p>

    <p>
        <strong>Média dos contratos:</strong>
        <?php echo formatarMoeda($media); ?>
    </p>

    <p>
        <strong>Quantidade total de clientes:</strong>
        <?php echo $totalClientes; ?>
    </p>

    <p>
        <strong>Quantidade de clientes ativos:</strong>
        <?php echo $clientesAtivos; ?>
    </p>

    <p>
        <strong>Maior contrato:</strong>
        <?php echo formatarMoeda($maior); ?>
    </p>

</div>
```

</div>

</body>

</html>