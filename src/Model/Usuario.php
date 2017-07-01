<?php 
	namespace Model;
	use Conexao\Conexao;
	use Traits\Hidratar;
	class Usuario{
		private $id;
		private $email;
		private $senha;
		private $conexao;	
	
		public function __construct()
		{
			$this->conexao = Conexao::Singleton();
		}

		use \Traits\Hidratar;

		public function gravar()
		{
			$sql = "insert into usuario(email,senha)values(:email,:senha)";
			$stmt = $this->conexao->dbh->prepare($sql);
			$stmt->bindParam(":email",$this->email);
			$stmt->bindParam(":senha",$this->senha);
			return $stmt->execute();
		}
	}
?>