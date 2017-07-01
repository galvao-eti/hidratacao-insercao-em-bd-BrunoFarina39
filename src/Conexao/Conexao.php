<?php 
	namespace Conexao;
	class Conexao{
		public static $conexao;
		public $dbh;
		
		public static function Singleton()
		{
			if(self::$conexao === null){
				$class = __CLASS__;
				self::$conexao = new Conexao("postgres","postgres","localhost","trabalho_pos_2017");
			}
			return self::$conexao;
		}	

		private function __construct($usuario,$senha,$host,$banco)
		{
			$dsn = "pgsql:dbname=$banco;host=$host";
			try{
				$this->dbh = new \PDO($dsn,$usuario,$senha);
			}catch(\PDOException $e){
				die($e->getMessage());
			}
		}
	}
?>
