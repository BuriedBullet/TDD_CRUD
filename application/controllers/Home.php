<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model("Home_model", "m_home");
    }

    public function index()
    {
        $data["filmes"] = $this->m_home->get_filmes();
        $this->load->view("template/header", $data, false);
        $this->load->view("home/lista", $data, false);
        $this->load->view("template/footer", $data, false);
    }

    public function inserir_filme()
    {
        $data["categoria"] = $this->m_home->get_categoria();
        $data["plataforma"] = $this->m_home->get_plataforma();
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

    public function insere_filme()
    {
        $rst = $this->m_home->insere_filme();
        echo json_encode($rst, JSON_UNESCAPED_UNICODE);
    }


}