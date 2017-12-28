<?php
class View
{
	//public $template_view = null; // здесь можно указать общий вид по умолчанию.
	
function generate($content_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
                include 'application/views/'.$content_view; 
        
	}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

