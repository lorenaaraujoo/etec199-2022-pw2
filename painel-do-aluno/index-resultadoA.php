<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Resultado</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="assets/img/img_index.svg" alt="">
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Resultado</h1>
                        </div>
                        <div class="login-button">
                            <button type="submit">Voltar</button>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                        <?php
                                //Model
                                require_once 'model/Aluno.php';
                                require_once 'model/Turma.php';
                                $aluno = new Aluno();
                                $turma = new Turma();

                                //DAO
                                require_once 'dao/AlunoDao.php';
                                require_once 'dao/TurmaDao.php';
                                $turmaDao = new TurmaDao();
                                $alunoDao = new AlunoDao();

                                //Controller
                                require_once 'Controller/AlunoController.php';
                                $alunoController = new AlunoController();

                                //pegando cpf do form  
                                $aluno->setCpfAluno($_POST['cpfAluno']);

                                //Verificando se foi digitado o nome ou o id de uma turma existente
                                if($_POST['nomeTurma'] != null){
                                    $turma->setNomeTurma($_POST['nomeTurma']);
                                        if($turmaDao->procurarNome($turma) == false){
                                            echo '<h2>Turma não encontrada</h2><br><h5>Verifique se o nome está correto ou se a turma já foi cadastrada<br></h5>';
                                        }
                                        else{
                                            $turma->setCodTurma($turmaDao->pegarCodigo($turma));
                                        }
                                }
                                else if($_POST['codTurma'] != null){
                                    $turma->setCodTurma($_POST['codTurma']);
                                        if($turmaDao->procurarCodigo($turma) == false){
                                            echo '<h2>Turma não encontrada!</h2><br><h5>Verifique se o código está correto ou se a turma já foi cadastrada<br></h5>';
                                        } 
                                        else{
                                            $turma->setNomeTurma($turmaDao->pegarNome($turma));
                                        }
                                }
                                else{
                                    echo '<h2>Erro ao cadastrar aluno!</h2><br><h5>Nenhum codigo ou nome de Turma foi digitado<br></h5>';
                                }
                                    //Verificando se está tudo correto para cadastrar o aluno
                                    if($alunoController->validarCPF($aluno) == true and $turma->getCodTurma() != null and $turma->getNomeTurma() != null){
                                        //verificando se o aluno já foi cadastrado
                                        if($alunoDao->procurarCPF($aluno)== true){
                                            echo "<h2>Erro ao cadastrar Aluno!</h2> <br><h5> CPF já cadastrado<br></h5>";
                                        }
                                        //Cadastrando o Aluno
                                        else if($alunoDao->procurarCPF($aluno) == false){
                                            $aluno->setNomeAluno($_POST['nomeAluno']);
                                            $aluno->setGeneroAluno($_POST['generoAluno']);
                                            $aluno->setCodTurma($turma->getCodTurma());

                                            $alunoDao->cadastrar($aluno);
                                            echo "<h2>Aluno cadastrado com sucesso!<br></h2>";
                                        }
                                    }
                                    else{
                                        echo("<h2>Erro ao cadastrar aluno!</h2> <br> Verifique se o CPF digitado é válido ou se a Turma digitada é existente!"); 
                                    }
                                ?>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>