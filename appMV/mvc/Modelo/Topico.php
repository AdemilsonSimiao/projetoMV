<?php
namespace Modelo;

use \PDO;
use \Modelo\Comentario;
use \Framework\DW3BancoDeDados;

class Topico extends Modelo {
    const BUSCAR_TOPICO = 'SELECT titulo, descricao, arquivoext, atualizacao.idatualizacao, atualizacao.idusuario, nome FROM atualizacao JOIN usuarios USING (idusuario) WHERE idatualizacao = ?';
    
    private $id;
    private $titulo;
    private $descricao;
    private $extArquivo;
    private $idUsuario;
    private $nomeUsuario;

    public function __construct($titulo, $descricao, $extArquivo = null, $id = null, $idUsuario = null, $nomeUsuario = null) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->extArquivo = $extArquivo;
        $this->idUsuario = $idUsuario;
        $this->nomeUsuario = $nomeUsuario;
    }
   
    public function getId() {
        return $this->id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getExtArquivo() {
        return $this->extArquivo;
    }

    public static function buscarTopico($id) {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_TOPICO);
        $comando->bindValue(1, $id, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();

        return new Topico(
            $registro['titulo'],
            $registro['descricao'],
            $registro['arquivoext'],
            $registro['idatualizacao'],
            $registro['idusuario'],
            $registro['nome']
        );
    }
}