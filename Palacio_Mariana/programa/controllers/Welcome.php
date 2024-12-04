<?php
class welcome extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('welcome_message', ['title' => 'Bienvenido al Framework de Mariana P palacio']);
        $this->view('components/footer');

    }
}
