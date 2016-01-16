<?php

$dirs = array_filter(glob('*'), 'is_dir');
$imgname = Array();
for($i=0; $i< count($dirs); $i++){
    $imgname[$i] = substr($dirs[$i],5);
}
echo json_encode(array_values($imgname));

?>