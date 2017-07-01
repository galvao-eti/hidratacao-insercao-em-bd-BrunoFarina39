<?php 
	namespace Model;
	use Conexao\Conexao;
	use Traits\Hidratar;
	class Produto{
		private $idProduto;
		private $nome;
		private $valor;
		private $conexao;

		function __construct()
		{
			$this->conexao = Conexao::Singleton();
		}

		use \Traits\Hidratar;	

		public function gravar()
		{
			$sql = "insert into produto(nome,valor)values(:nome,:valor)";
			$stmt = $this->conexao->dbh->prepare($sql);
			$stmt->bindParam(":nome",$this->nome);
			$stmt->bindParam(":valor",$this->valor);
			return $stmt->execute();
		}
	}
?>