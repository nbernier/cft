<?php
echo "<h3>Folder :</h3>";

 $cur_dir = getcwd();
  
echo("Current Directory is " . $cur_dir);

var_dump(getenv());

while (list($var,$value) = each ($_ENV)) {
    echo "$var => $value <br />";
}
?>