<?php
class Welcome extends Controller {
    public function index() {
        $this->view('welcome_message', ['title' => 'Bienvenido al Framework']);
    }
}
