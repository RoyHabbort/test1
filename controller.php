<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller
 *
 * @author Иноходец
 */
class controller {
    
    
    public function index(){
        $database = new databaseClass();
        
        $sql = "SELECT * FROM films WHERE 1";

        $result = $database->query($sql);

        $page = "views/index.php";
        
        if (is_readable($page) == false) {
            echo "Ошибка. Вьюса не найдена";
        }else{
            include $page;
        }
        
        
    }
    
    
    
    public function films($films){
        
        $params = array('films' => $films);
        $database = new databaseClass();
        $params = $database->validate($params, array(
            'films' => 'number'
        ));
        
        if(!empty($params['valid_errors'])){
            echo "Ошибка! Неверно запрошена страница.";
            exit;
        }
        
        $sql = "SELECT `title` FROM films WHERE `id` = '{$params['films']}' LIMIT 1";
        $currentFilm = $database->query($sql);
        
        
        $sql2 = "SELECT act.fio, COUNT(*) AS count FROM `actors_films` AS af
                INNER JOIN `actors` AS act ON act.id = af.id_actors
                
                WHERE af.id_actors IN
                (SELECT `id_actors`
                    FROM `actors_films` 
                    WHERE `id_films` = '{$params['films']}')
                    
                GROUP BY act.id";
        
        $actors = $database->query($sql2);
        
        $page = "views/films.php";
        
        if (is_readable($page) == false) {
            echo "Ошибка. Вьюса не найдена";
        }else{
            include $page;
        }
        
    }
    
}
