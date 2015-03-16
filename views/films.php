<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Список фильмов</title>
        
        <style>
            
            
            
            .content-wrapper{
                display:flex; 
                flex-direction: row;
                justify-content:center;
            }
            
            .content{
                text-align: center;
            }
            
            table{
                border:solid 1px #555; 
                border-collapse: collapse;
            }
            
            table td, table th{
                border:solid 1px #555;
                padding: 5px 10px;
            }
            
            .btn-back{
                display:inline-block;
                margin-top:10px;
            }
            
        </style>    
        
    </head>
    <body>
        
        <div class="content-wrapper">
            <div class="content">
            <h1><?=$currentFilm?></h1>

            <?php if(!empty($actors)) : ?>
            <table>
                <thead>
                    <th>Актёр</th>
                    <th>Кол-во фильмов</th>
                </thead>
            <?php foreach ($actors as $key => $value) : ?>
                <tr>
                    <td><?=$value['fio']?></td>
                    <td><?=$value['count']?></td>
                </tr>

            <?php endforeach;?>
            <?php endif;?>
            </table>
            
                <a href="#" class="btn-back" onclick="history.back()">
                    Назад
                </a>
            
            </div>
        </div>
    </body>
</html>    