<?php
class Login extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('welcome_meassage',['title'=>'bienvenido al framework']);
        $this->view('components/footer');
    }
}
