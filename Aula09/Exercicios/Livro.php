<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    #Construtor
    public function __construct($tit, $aut, $totPag, $lei){
        $this->setTitulo($tit);
        $this->setAutor($aut);
        $this->setTotPaginas($totPag);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($lei);

    }
    #Getters
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTotPaginas(){
        return $this->totpaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    #Setters
    public function setTitulo($tit){
        $this->titulo = $tit ;
    }
    public function setAutor($aut){
        $this->autor = $aut;
    }
    public function setTotPaginas($pag){
        $this->totpaginas = $pag;
    }
    public function setPagAtual($atu){
        $this->pagAtual = $atu;
    }
    public function setAberto($abe){
        $this->aberto = $abe;
    }
    public function setLeitor($lei){
        $this->leitor = $lei;
    }

    #Métodos

    public function abrir(){
        $this->setAberto(true);

    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folear($pag){
        if(($pag <= $this->getTotPaginas()) && ($this->getAberto())){
            $this->setPagAtual($pag);
        }else{
            echo "Não foi possivel folear!<br/>";
        }
        
    }
    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual() - 1);
    }
    public function detalhes(){
        echo "Autor: {$this->getAutor()}<br/>Titulo: {$this->getTitulo()}<br/>Nº de Páginas: 
        {$this->getTotPaginas()}<br/>Página Atual: {$this->getPagAtual()}<br/>Aberto? 
        {$this->getAberto()}<br/>Atual Leitor: {$this->leitor->getNome()}";
    }
















}










?>