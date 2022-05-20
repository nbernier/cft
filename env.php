<?php
echo "<h3>Folder :</h3>";

 $cur_dir = getcwd();
  
echo("Current Directory is " . $cur_dir);

echo getenv('SHELL');
foreach (getenv() as $key => $value) {
    echo $key . ' - ' . $value;
}

?>