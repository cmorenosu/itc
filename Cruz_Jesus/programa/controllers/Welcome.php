<?php
class Welcome extends controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('welcome_message', ['title' => 'Bienvenido al Framework']);
        $this->view('components/footer');
    }
}
