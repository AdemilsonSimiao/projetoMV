<?php
namespace Controlador;

use \Framework\DW3Sessao;

class ListaUploadsControlador extends Controlador {
    public function index() {
        $this->verificarLogado();
        $conteudo = $this->calcularPaginacao();
        $idUsuario = DW3Sessao::get('usuario');
        $this->visao('inicial/list-page.php', [
            'uploads' => $conteudo['uploads'],
            'pagina' => $conteudo['pagina'],
            'idUsuario' => $idUsuario,
            'ultimaPagina' => $conteudo['ultimaPagina']
        ], 'navbar.php');
    }


} 