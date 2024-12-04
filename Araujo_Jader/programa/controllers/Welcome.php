<?php

class Welcome extends Controller {
    public function index() {

        $this->view('components/head.php');
        $this->view('components/menu.php');
        $this->view('welcome_message', ['title' => 'Bienvenido al Framework']);
        $this->view('components/contenido.php');
        $this->view('components/footer.php');
    }
}

?>