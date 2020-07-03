<?php

Class Rotas{
    public static $pag;
    static function get_Pagina(){
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);
            
            $pagina ='controller/'. self::$pag[0] . '.php';
            /* $pagina ='controller/'. $_GET['pag'] . '.php'; */
           
            if (file_exists($pagina)) {
                include $pagina;    
            }else{
                include 'erro.php';
            }
        }
    }
}