<?php
class Welcome extends Controller {
    public function index() {
     $this->view('welcome_message', ['title' => 'Bienvenido al Framework, pagina de Valentina Gonzalez']);
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('welcome_message');
        $this->view('components/footer');
    }
}
