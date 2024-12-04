<?php
class Login extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('login_vista');
        // $this->view('welcome_message', ['title' => 'Bienvenido al Framework: página de Mariangel']);
        $this->view('components/footer');
    }
}