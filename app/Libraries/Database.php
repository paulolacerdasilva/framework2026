
<?php
class Database{

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'framework';
    private $porta = '3307';
    private $dbh;
    private $stmt;

    public function __construct(){
        //fonte de dados ou DNS contém as informações necessárias para conectar o banco de dados.
        $dns = 'mysql:host='.$this->host.';port='.$this->porta.'dbname='.$this->banco;
        $opcoes = [
            //armazena em cache a conexão para ser reutilizada, evita a sobrecarga de uma nova conexão, resultando em um sistema mais rápido
            PDO::ATTR_PERSISTENT => true,
            //lança uma PDOException se ocorrer um erro
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        ];
        try{
            //cria a instancia do PDO
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha, $opcoes);
        }catch(PDOException $e){
            print "Error!: ".$e->getMessage().'<br/>';
            die();
        }//fim do catch
    }//fim do construtor

    //prepare Statements com query
    public function query($sql){
        //prepare uma consulta sql
        $this->stmt = $this->dbh->prepare($sql);
    }//fim da função query
    //vincula um valor a um parâmetro
    public function bind($parametro, $valor, $tipo = null){
        if(is_null($tipo)):
            switch(true):
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                    default:
                    $tipo = PDO::PARAM_STR;
                endswitch;
            endif;
            $this->stmt->bindValue($parametro, $valor, $tipo);
    }

}//fim da classe Database