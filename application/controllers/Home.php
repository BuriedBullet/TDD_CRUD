<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model("Home_model", "m_home");
    }

    public function index()
    {
        $data["aa"] = $this->m_home->test_type_return_get_filmes();
        $this->load->view("template/header", $data, false);
        $this->load->view("home/lista", $data, false);
        $this->load->view("template/footer", $data, false);
    }

    public function teste_funcoes()
    {
        $data["teste"] = $this->m_home->monta_lista_teste();

        $this->load->view("template/header", $data, false);
        $this->load->view("home/lista_teste", $data, false);
        $this->load->view("template/footer", $data, false);
    }


}