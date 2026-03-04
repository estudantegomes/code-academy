<?php

$usuarios = [];

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

function cadastrarUsuario(array &$usuarios, string $nome, string $email, string $senha, bool $admin): void
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

function editarUsuario(array &$usuarios, int $indice, Chave $chave, string $valor): bool
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
function removerUsuario(array &$usuarios, int $indice): bool
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

function ordenarUsuarios(array &$usuarios): void
{
    usort($usuarios, function ($a, $b) {
        return $a['Nome'] <=> $b['Nome'];
    });
}

function i($string): void
{
    echo "\n{$string}";
}

function pausar(): void
{
    echo "\nPressione ENTER para voltar ao menu...";
    fgets(STDIN);
}

//populando array
cadastrarUsuario($usuarios, "Nickolas Gomes", "nick@email.com", "123456", true); // Admin
cadastrarUsuario($usuarios, "Maria Silva", "maria@email.com", "abc123", false);
cadastrarUsuario($usuarios, "Carlos Souza", "carlos@email.com", "senha123", false);
cadastrarUsuario($usuarios, "Fernanda Lima", "fernanda@email.com", "minhasenha", false);
cadastrarUsuario($usuarios, "Joao Pereira", "joao@email.com", "123abc", false);
cadastrarUsuario($usuarios, "Joao Henrique", "joaohenrique@email.com", "senha321", false);
cadastrarUsuario($usuarios, "Joao Victor", "joaovictor@email.com", "abc987", false);
cadastrarUsuario($usuarios, "Joao Pedro", "joaopedro@email.com", "minhasenha2", false);

$continua = true;

while ($continua) {
    system('clear');
    listarMenu();
    i("Escolha uma opção: ");

    $opcao = (int)fgets(STDIN);

    switch ($opcao) {
        //cadastrar
        case 1:
            system('clear');
            i("Você escolheu cadastrar!");

            i("Digite o nome:");
            $novoNome = trim((string)fgets(STDIN));

            i("Digite o e-mail:");
            $novoEmail = trim((string)fgets(STDIN));

            i("Digite a senha:");
            $novaSenha = trim((string)fgets(STDIN));

            i("Usuário administrador? (s/n)");
            $entrada = strtolower(trim(fgets(STDIN)));
            $adm = $entrada === "s";

            cadastrarUsuario($usuarios, $novoNome, $novoEmail, $novaSenha, $adm);

            i("Usuário cadastrado!");
            pausar();

            break;
        //Listar
        case 2:
            system('clear');
            i("Você escolheu listar!");

            listarUsuarios($usuarios);
            pausar();

            break;
        //Buscar
        case 3:
            system('clear');
            i("Você escolheu buscar!");

            i("Digite o nome para busca: ");
            $entrada = trim((string)fgets(STDIN));

            buscarUsuario($usuarios, $entrada);

            pausar();
            break;
        //Editar
        case 4:
            system('clear');
            i("Você escolheu editar!");

            listarUsuarios($usuarios);
            i("Selecione o ID do usuário: ");

            $entrada = (int)fgets(STDIN);
            $indice = buscarIndicePorId($usuarios, $entrada);

            if ($indice === null) {
                i("Usuário não encontrado.");
                pausar();
                break;
            }

            system('clear');
            i("Você selecionou o usuário: ");
            exibirUsuario($usuarios[$indice]);

            i("1 - Editar nome\n2 - Editar e-mail\n3 - Editar senha");
            i("Selecione a opção de edição: ");
            $entrada2 = (int)fgets(STDIN);

            switch ($entrada2) {
                //nome
                case 1:
                    i("Você selecionou editar o nome!");
                    i("Digite o nome: ");

                    $novoNome = trim((string)fgets(STDIN));
                    editarUsuario($usuarios, $indice, Chave::nome, $novoNome);

                    system('clear');
                    i("Nome atualizado: ");
                    exibirUsuario($usuarios[$indice]);
                    pausar();

                    break;
                //e-mail
                case 2:
                    i("Você selecionou editar o e-mail!");
                    i("Digite o e-mail: ");

                    $novoEmail = trim((string)fgets(STDIN));
                    editarUsuario($usuarios, $indice, Chave::email, $novoEmail);

                    system('clear');
                    i("E-mail atualizado: ");
                    exibirUsuario($usuarios[$indice]);
                    pausar();

                    break;
                //senha
                case 3:
                    i("Você selecionou editar a senha!");
                    i("Digite a senha: ");

                    $novaSenha = trim((string)fgets(STDIN));
                    editarUsuario($usuarios, $indice, Chave::senha, $novaSenha);

                    system('clear');
                    i("Senha atualizada: ");
                    exibirUsuario($usuarios[$indice]);
                    pausar();
                    break;
                //padrão
                default:
                    i("Opção inválida.");
                    break;
            }

            break;
        //Remover
        case 5:
            system('clear');
            i("Você escolheu remover!");

            listarUsuarios($usuarios);
            i("Selecione o ID do usuário: ");

            $entrada = (int)fgets(STDIN);
            $indice = buscarIndicePorId($usuarios, $entrada);

            if ($indice === null) {
                i("Usuário não encontrado.");
                pausar();
                break;
            }

            system('clear');
            i("Você selecionou o usuário: ");
            exibirUsuario($usuarios[$indice]);

            i("Deseja realmente excluir este usuário? (s/n)");
            $entrada2 = strtolower(trim(fgets(STDIN)));

            if ($entrada2 === "s") {
                removerUsuario($usuarios, $indice);
                i("Usuário removido!");
                listarUsuarios($usuarios);
            } else i("Remoção cancelada.");

            pausar();

            break;
        //Estatísticas
        case 6:
            system('clear');
            i("Você escolheu estatísticas!");

            estatisticas($usuarios);
            pausar();

            break;
        //sair    
        case 7:
            $continua = false;
            break;
        //padrão
        default:
            i("Opção inválida.");
            break;
    }
}

//testando
// listarUsuarios($usuarios);
// print_r(buscarUsuario($usuarios, "Joao"));
// removerUsuario($usuarios, 1);
// listarUsuarios($usuarios);
// editarUsuario($usuarios, 1, Chave::nome, "Fulano da Silva");
// listarUsuarios($usuarios);
