<?php
spl_autoload_register(function ($nameClass){
        //Diretórios de classe
        $directorys = array(
            'classes'.DIRECTORY_SEPARATOR,
            'classes'. DIRECTORY_SEPARATOR . 'Cliente'. DIRECTORY_SEPARATOR
        );
       
        //Para cada diretório:
        foreach($directorys as $directory)
        {
            //Se o arquivo existe
            var_dump($nameClass);
            if(file_exists($directory.$nameClass . '.php'))
            {
                require_once($directory.$nameClass . '.php');
                return;
            }           
        }
    });