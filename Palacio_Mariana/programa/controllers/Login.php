<?php
class Login extends Controller {
    public function index() {
        $this->view('components/head');
        $this->view('components/menu');
        $this->view('login_vista');
        $this->view('components/footer');
    }
}
