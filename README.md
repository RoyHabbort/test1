База данных расположена в папке db/
Её конфигурация прямо в файле index.php

Сам запрос: "SELECT act.fio, COUNT(*) AS count FROM `actors_films` AS af
                INNER JOIN `actors` AS act ON act.id = af.id_actors
                
                WHERE af.id_actors IN
                (SELECT `id_actors`
                    FROM `actors_films` 
                    WHERE `id_films` = '{$params['films']}')
                    
                GROUP BY act.id"
                
где $params['films'] - id выбранного фильма
