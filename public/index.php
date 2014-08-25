<?php
 
try { 
    require __DIR__ . '/load/BootLoader.php';
    $bootloader = new BootLoader();
    $bootloader->default_load();
} catch (Phalcon\Exception $e) {
     echo $e->getMessage();
} catch (PDOException $e){
     echo $e->getMessage();
}





?>
