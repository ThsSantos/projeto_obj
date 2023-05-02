<?php

class Conexao
{
  private $host;
  private $usuario;
  private $senha;
  private $banco;
  private $conexao;

  function __construct($host, $usuario, $senha, $banco)
  {
    $this->host = $host;
    $this->senha = $senha;
    $this->usuario = $usuario;
    $this->banco = $banco;
  }

  function conectar()
  {
    $this->conexao = mysqli_connect(
      $this->host,
      $this->usuario,
      $this->senha,
      $this->banco
    );

    if (mysqli_connect_errno($this->conexao)) {
      return false;
    } else {
      mysqli_query($this->conexao, "SET NAMES 'utf8';");
    }
  }

  function executaQuery($sql)
  {
    return mysqli_query($this->conexao, $sql);
  }

  function primeiroRegistroQuery($query)
  {
    $linhas = $this->executaQuery($query);

    return mysqli_fetch_array($linhas);
  }
}
