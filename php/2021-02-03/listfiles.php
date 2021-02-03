<?php
    $directory='files';
    if($handle = opendir($directory)){
        while($file = readdir($handle)){
            if($file != '.' && $file != '..'){
                echo $file.'<br>';
            }
        }
    }
?>