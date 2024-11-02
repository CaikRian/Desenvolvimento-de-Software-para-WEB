<?php

    // Definir os parâmetros de conexão
    $host = 'localhost';
    $port = '3306';
    $dbname = 'projetodevweb'; //'meu_banco';
    $user = 'root';
    $senha = ''; // Sem senha no XAMPP, por padrão

   
    // Criar o objeto Cliente e testar
    /* try {
        $cliente = new Cliente($host, $port, $dbname, $user, $senha);

        // Testar se a busca de mensagens funciona
        $mensagens = $cliente->buscarMensagens();
        echo "<pre>";
        print_r($mensagens);
        echo "</pre>";
    } catch (Exception $e) {
        echo "Erro ao conectar ou executar: " . $e->getMessage();
    } */

    // Criar o objeto Cliente
    //$cliente = new Cliente($host, $port, $dbname, $user, $senha);

    // Testar a conexão diretamente
    /*  if ($cliente) {
        echo "Conexão com sucesso!";
    } else {
        echo "Falha na conexão!";
    } */
    Class Cliente{
        private $pdo;

        // CONEXAO COM O BANCO DE DADOS
        public function __construct($host, $port, $dbname, $user, $senha)
        {
            try
            {
                $this->pdo = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname .';', $user, $senha);       
                //echo "Conexão estabelecida com sucesso!";
            }
            catch(PDOException $e)
            {
                echo "Erro com banco de dados: ".$e->getMessage();
            }
            catch(Exception $e)
            {
                echo "Erro generico: ".$e->getMessage();
            }
        }

        public function buscarMensagens()
        {   $res = array();
            $cmd = $this->pdo->query("SELECT * FROM mensagens_clientes ORDER BY id desc");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        public function cadastrarMensagem($nome, $email, $assunto, $telefone, $mensagem)
        {
            $cmd = $this->pdo->prepare("INSERT INTO mensagens_clientes (nome, email, assunto, telefone, mensagem) VALUES (:n, :e, :a, :t, :m)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":a", $assunto);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":m", $mensagem);
            $cmd->execute();
        }

        public function excluirMensagem($id)
        {
            $cmd = $this->pdo->prepare("DELETE FROM mensagens_clientes WHERE id = :id");
            $cmd->bindValue(":id", $id);
            $cmd->execute();
        }

        // EDITAR (UPDATE)
        public function buscarDadosCliente($id) 
        {
            $res = array();
            $cmd = $this->pdo->prepare("SELECT * FROM mensagens_clientes WHERE id = :id");
            $cmd->bindValue(":id",$id);
            $cmd->execute();
            $res = $cmd-> fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        public function atualizarDados($id, $nome, $email, $assunto, $telefone, $mensagem)
        {
            $cmd = $this->pdo->prepare("UPDATE mensagens_clientes SET nome = :n, email= :e, assunto= :a, telefone = :t, mensagem= :m WHERE id = :id");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":a", $assunto);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":m", $mensagem);
            $cmd->bindValue(":id",$id);
            $cmd->execute();
        }
    }

?>