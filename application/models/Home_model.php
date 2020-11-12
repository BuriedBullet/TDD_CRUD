<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model{

    function __construct() {
        $this->db = $this->load->database("default");
    }

    public function get_filmes()
    {
        return (object)array("aa" => "aaa");
    }

    public function test_type_return_get_filmes()
    {
        return $this->unit->run(gettype ($this->get_filmes()), object, "Retorna get_filmes", "Verificação de retorno da função");
    }


}