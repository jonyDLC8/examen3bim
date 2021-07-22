<?php
	function CargadorClase($class)
    {
       if(is_file('Controler/'.$class.'.Controller.php'))
       {
            include('Contorler/'.$class.'.Controller.php');
       }
       else if(is_file('Model/'.$class.'Model.php'))
       {
            include('Model/'.$class.'.Model.php');
       }
       else if(is_file('Framework/Smarty/'.$class.'.class.php')) 
       {
            include('Framework/smarty/'.$class.'.class.php');
       }
    }
    
    spl_autoload_register('CargadorClase');
?>