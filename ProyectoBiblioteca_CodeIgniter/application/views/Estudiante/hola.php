<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php foreach ($camLibros as $camLibro) :?>
            <li><?=$camLibro->TitLib?></li>
            <li><?=$camLibro->NombAut?></li>
            <li><?=$camLibro->AnioLib?></li>
        <?php endforeach;?>
        </ul>
    </body>
</html>
