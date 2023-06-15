<?php 

    class Database {

        private $user = "root";
        private $password = "";
        private $database_name = "db_start";
        private $host = "localhost";

        public function conecta_my_sql() {
            //cria a conexão
            $conexao = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
            //ajusta o charset de comunicacao entre a aplicação e o banco de dados
            mysqli_set_charset($conexao, 'utf8');
            
            //verifica possivel erro de conexao
            if(mysqli_connect_errno()){
                echo "Error de conexao ".mysqli_connect_error($conexao);
            }
    
            return $conexao;
        }

    }




?>