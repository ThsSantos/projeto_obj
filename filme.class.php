<?php

class Filme
{
  private $id;
  private $titulo;
  private $sinopse;
  private $trailer;

  public function __construct($id, $titulo, $sinopse, $trailer)
  {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->sinopse = $sinopse;
    $this->trailer = $trailer;
  }

  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId($id)
  {
    $this->id = $id;
  }
  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }
  public function getTitulo($titulo)
  {
    $this->titulo = $titulo;
  }
  public function setSinopse($sinopse)
  {
    $this->sinopse = $sinopse;
  }
  public function getSinopse($sinopse)
  {
    $this->sinopse = $sinopse;
  }
  public function setTrailer($trailer)
  {
    $this->trailer = $trailer;
  }
  public function getTrailer($trailer)
  {
    $this->trailer = $trailer;
  }
}
