<?php
class Login extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('login_vistas');
        // $this->view('welcome_message', ['title' => 'Bienvenido al Framework, pagina de xyz']);
        $this->view('components/footer');
    }
}
