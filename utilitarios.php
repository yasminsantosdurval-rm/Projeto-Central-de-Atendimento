<?php

declare(strict_types=1);

// Exibe uma mensagem
function exibirMensagem(string $mensagem): void
{
    echo $mensagem;
}

// Formata o nome
function formatarNome(string $nome): string
{
    $nome = trim($nome);

    return ucwords(strtolower($nome));
}

// Remove os caracteres de formatação do CPF
function limparCPF(string $cpf): string
{
    $cpf = trim($cpf);

    return str_replace([".", "-"], "", $cpf);
}

// Valida o nome
function validarNome(string $nome): bool
{
    $nome = trim($nome);

    if ($nome === "") {
        return false;
    } elseif (strlen($nome) < 3) {
        return false;
    } else {
        return true;
    }
}

// Valida o CPF
function validarCPF(string $cpf): bool
{
    $cpf = limparCPF($cpf);

    if ($cpf === "") {
        return false;
    } elseif (strlen($cpf) !== 11) {
        return false;
    } else {
        return true;
    }
}

// Valida o e-mail
function validarEmail(string $email): bool
{
    $email = trim($email);

    if ($email === "") {
        return false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

// Valida o valor do contrato
function validarContrato(float $contrato): bool
{
    if ($contrato <= 0) {
        return false;
    } elseif ($contrato > 1000000) {
        return false;
    } else {
        return true;
    }
}

// Formata o valor como moeda brasileira
function formatarMoeda(float $valor): string
{
    return "R$ " . number_format($valor, 2, ",", ".");
}

// Busca um cliente pelo nome
function buscarCliente(array $clientes, string $nome): ?array
{
    $nome = formatarNome($nome);

    foreach ($clientes as $cliente) {
        if (formatarNome($cliente["nome"]) === $nome) {
            return $cliente;
        }
    }

    return null;
}

// Cadastra um novo cliente
function cadastrarCliente(
    array &$clientes,
    string $nome,
    string $email,
    string $cpf,
    float $contrato
): ?array {

    if (!validarNome($nome)) {
        return null;
    } elseif (!validarEmail($email)) {
        return null;
    } elseif (!validarCPF($cpf)) {
        return null;
    } elseif (!validarContrato($contrato)) {
        return null;
    } else {

        $cliente = [
            "nome" => formatarNome($nome),
            "cpf" => limparCPF($cpf),
            "email" => trim($email),
            "contrato" => $contrato,
            "ativo" => true
        ];

        $clientes[] = $cliente;

        return $cliente;
    }
}

// Calcula a soma dos contratos ativos
function calcularTotalContratosAtivos(array $clientes): float
{
    $total = 0.0;

    foreach ($clientes as $cliente) {
        if ($cliente["ativo"] === true) {
            $total += $cliente["contrato"];
        }
    }

    return $total;
}

// Calcula a média dos contratos
function calcularMediaContratos(array $clientes): float
{
    if (count($clientes) === 0) {
        return 0.0;
    }

    $soma = 0.0;

    foreach ($clientes as $cliente) {
        $soma += $cliente["contrato"];
    }

    return $soma / count($clientes);
}

// Aplica reajuste usando passagem por referência
function aplicarReajuste(float &$contrato, float $percentual): void
{
    $contrato += $contrato * ($percentual / 100);
}

// Conta a quantidade de clientes
function contarClientes(array $clientes): int
{
    return count($clientes);
}

// Conta a quantidade de clientes ativos
function contarClientesAtivos(array $clientes): int
{
    $quantidade = 0;

    foreach ($clientes as $cliente) {
        if ($cliente["ativo"] === true) {
            $quantidade++;
        }
    }

    return $quantidade;
}

// Encontra o maior contrato
function maiorContrato(array $clientes): float
{
    if (count($clientes) === 0) {
        return 0.0;
    }

    $maior = $clientes[0]["contrato"];

    foreach ($clientes as $cliente) {
        if ($cliente["contrato"] > $maior) {
            $maior = $cliente["contrato"];
        }
    }

    return $maior;
}
?>