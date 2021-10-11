<?php 
// конвертация JSON для чтения в php - способ с JSON
$_POST = json_decode( file_get_contents("php://input"), true );

// данные которые пришли с клиента, превращает в строку и показывает на клиенте - способ с FormData 
echo var_dump($_POST);