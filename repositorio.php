<?php

require 'conexao.php';
include 'filme.class.php';

interface IRepositorioFilmes
{

  public function getListaFilmes();
  public function removerFilme($id);
}

class RepositorioFilmesMySQL implements IRepositorioFilmes
{
  private $conexao;

  public function __construct()
  {
    $this->conexao = new Conexao("localhost", "root", "", "locadora");

    if ($this->conexao->conectar() == false) {
      echo "Erro";
    }
  }
  public function getListaFilmes()
  {
    $sql = "SELECT * FROM filme";
    $listagem = $this->conexao->executaQuery($sql);
    $arrayFilmes = [];

    while ($linha = mysqli_fetch_array($listagem)) {
      $filme = new Filme($linha['id'], $linha['titulo'], $linha['sinopse'], $linha['trailer']);
      array_push($arrayFilmes, $filme);
    }
    return $arrayFilmes;
  }
  public function removerFilme($id)
  {
    $sql = "DELETE FROM filme WHERE id = '$id'";
    $this->conexao->executaQuery($sql);
  }
}

$repositorio = new RepositorioFilmesMySQL();
