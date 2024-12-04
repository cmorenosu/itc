<?php
class Welcome extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('welcome_message', ['title' => 'Bienvenido al Framework: página de Mariangel']);
        $this->view('components/footer');
    }
}