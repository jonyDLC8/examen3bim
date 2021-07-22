<?php
	Class Home
    {
        public function Inicio()
        {
        	$smarty=new Smarty();
        	
        	$smarty->assiong('nombre','home');
        	$smarty->display('Home.tlp');
         
        }
    }
?>