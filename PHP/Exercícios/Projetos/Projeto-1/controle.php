<?php

enum Chave: string
{
    case nome = "Nome";
    case email = "E-mail";
    case senha = "Senha";
}

function listarMenu(): void
{
    echo "\n1 - Cadastrar\n2 - Listar\n3 - Buscar\n4 - Editar\n5 - Remover\n6 - Estatísticas\n7 - Sair\n";
}

function cadastrarUsuario(array $usuarios, string $nome, string $email, string $senha, bool $admin): void
{
    static $id = 1;
    array_push($usuarios, array(
        "ID" => $id++,
        "Nome" => $nome,
        "E-mail" => $email,
        "Senha" => password_hash($senha, PASSWORD_DEFAULT),
        "Admin" => $admin
    ));

    ordenarUsuarios($usuarios);
}

function listarUsuarios(array $usuarios): void
{
    if (empty($usuarios)) {
        echo "\nNenhum usuário cadastrado.\n";
        return;
    }

    foreach ($usuarios as $usuario) {
        echo "\n{$usuario["Nome"]} (ID:{$usuario["ID"]})";
    }

    echo "\n";
}

function buscarUsuario(array $usuarios, string $termo): array
{
    $resultado = [];

    foreach ($usuarios as $usuario) {
        if (stripos($usuario["Nome"], $termo) !== false) {
            array_push($resultado, $usuario);
        }
    }

    foreach ($resultado as $usuario) {
        echo "\n" . $usuario["Nome"] . " (ID:{$usuario["ID"]})";
    }

    if ($resultado == []) {
        echo "\nNão há usuários com esse nome.\n";
    }

    return $resultado;
}

function editarUsuario(array $usuarios, int $indice, Chave $chave, string $valor): bool
{
    if (!isset($usuarios[$indice])) {
        return false;
    }

    if ($chave === Chave::senha) {
        $usuarios[$indice][$chave->value] = password_hash($valor, PASSWORD_DEFAULT);
    } else {
        $usuarios[$indice][$chave->value] = $valor;
    }

    ordenarUsuarios($usuarios);
    return true;
}

//necessário decidir se arruma a exclusão ou a entrada do índice em -1
function removerUsuario(array $usuarios, int $indice): bool
{
    if (!isset($usuarios[$indice])) {
        return false;
    }

    unset($usuarios[$indice]);
    $usuarios = array_values($usuarios);

    return true;
}

function estatisticas(array $usuarios): void
{
    $total = count($usuarios);

    $admins = count(array_filter($usuarios, function ($usuario) {
        return $usuario["Admin"] === true;
    }));

    $usuariosComuns = $total - $admins;

    $percentualAdmins = $total > 0
        ? round(($admins / $total) * 100, 2)
        : 0;


    echo "\n==========================================\n";
    echo "               ESTATÍSTICAS               \n";
    echo "==========================================\n";
    printf("%-25s: %s\n", "Total de Usuarios", $total);
    printf("%-25s: %s\n", "Total de Admins", $admins);
    printf("%-25s: %s\n", "Total de Comuns", $usuariosComuns);
    printf("%-25s: %s%%\n", "Percentual de Admins", $percentualAdmins);
    echo "==========================================\n";
}

function exibirUsuario(array $usuario): void
{
    echo "\n================================\n";
    printf("%-10s: %s\n", "ID", $usuario["ID"]);
    printf("%-10s: %s\n", "Nome", $usuario["Nome"]);
    printf("%-10s: %s\n", "E-mail", $usuario["E-mail"]);
    printf("%-10s: %s\n", "Senha", $usuario["Senha"]);
    printf("%-10s: %s\n", "Admin", $usuario["Admin"] ? "Sim" : "Não");
    echo "================================\n";
}

//retorna int ou null(?int)
function buscarIndicePorId(array $usuarios, int $id): ?int
{
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["ID"] === $id) {
            return $indice;
        }
    }
    return null;
}

function ordenarUsuarios(array $usuarios): void
{
    usort($usuarios, function ($a, $b) {
        return $a['Nome'] <=> $b['Nome'];
    });
}

?>