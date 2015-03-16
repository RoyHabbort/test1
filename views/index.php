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
            
            .films{
                font-size:18px;
                line-height:1.4;
            }
            
        </style>  
        
    </head>
    
    <body>
        <div class="content-wrapper">
            <div class="content">
                <?php if(!empty($result)) : ?>
                    <h1>Выберите фильм:</h1>
                    <?php foreach ($result as $key => $value) : ?>
                        <div class="films">
                            <a href="/<?=$value['id']?>">
                                <?=$value['title']?>
                            </a>    
                        </div>
                    <?php endforeach;?>
                <?php else :?>
                    <div>
                        Список фильмов пуст.
                    </div>
                <?php endif;?>
            </div>
        </div>
    </body>
    
</html>