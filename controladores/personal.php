<?php

class personal extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Personal';
        $this->vista->url = 'personal/inicio';
        $this->vista->render($this->vista->url);
    }
}
