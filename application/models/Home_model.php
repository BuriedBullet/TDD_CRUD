<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model{

    function __construct() {
        $this->db = $this->load->database("default");
    }

    public function get_filmes()
    {
        return new stdClass(array("aa" => "aaa"));
    }

    public function test_type_return_get_filmes()
    {
        // echo '<pre>';
        // print_r(gettype ($this->get_filmes()));
        // echo '</pre>';
        // exit;
        return $this->unit->run(gettype ($this->get_filmes()), "object", "Retorna get_filmes", "Verificação de retorno da função");
    }

    public function monta_lista_teste()
    {
        $rst = array();

        $rst[] = $this->test_type_return_get_filmes();

        return $rst;
    }

}