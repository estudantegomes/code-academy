<?php
include_once "funções/buscaIndicePorId.php";
include_once "funções/buscarUsuario.php";
include_once "funções/cadastrarUsuario.php";
include_once "funções/editarUsuario.php";
include_once "funções/estatisticas.php";
include_once "funções/exibirUsuario.php";
include_once "funções/listarUsuario.php";
include_once "funções/ordenarUsuarios.php";
include_once "funções/removerUsuario.php";

$usuarios = [];

//populando array
cadastrarUsuario($usuarios, "Nickolas Gomes", "nick@email.com", "123456", true); // Admin
cadastrarUsuario($usuarios, "Maria Silva", "maria@email.com", "abc123", false);
cadastrarUsuario($usuarios, "Carlos Souza", "carlos@email.com", "senha123", false);
cadastrarUsuario($usuarios, "Fernanda Lima", "fernanda@email.com", "minhasenha", false);
cadastrarUsuario($usuarios, "Joao Pereira", "joao@email.com", "123abc", false);
cadastrarUsuario($usuarios, "Joao Henrique", "joaohenrique@email.com", "senha321", false);
cadastrarUsuario($usuarios, "Joao Victor", "joaovictor@email.com", "abc987", false);
cadastrarUsuario($usuarios, "Joao Pedro", "joaopedro@email.com", "minhasenha2", false);

function listarMenu(): void
{
    echo "\n1 - Cadastrar\n2 - Listar\n3 - Buscar\n4 - Editar\n5 - Remover\n6 - Estatísticas\n7 - Sair\n";
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
                    $indice = buscarIndicePorId($usuarios, $entrada);
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
                    $indice = buscarIndicePorId($usuarios, $entrada);
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
                    $indice = buscarIndicePorId($usuarios, $entrada);
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
            pausar();
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
