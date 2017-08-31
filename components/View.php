<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author Technocom
 */
class View {
    //put your code here
    
    function render($template, $data = null)
    {       
            
        $content = $data;    
	include ROOT.'/views/'.$template.'/index.php';
                
    }
    
}
