<?php
echo "<h3>Folder :</h3>";
$title = "TITLE";
$cur_dir = getcwd();
  
echo("Current Directory is " . $cur_dir);
$files1 = scandir("/app");

print_r($files1);

echo getenv('SHELL');
echo "$_ENV";
foreach (getenv() as $key => $value) {
    echo $key . ' - ' . $value;
}


while (list($var,$value) = each ($_ENV)) {
    echo "$var => $value <br />";
}
echo ("done")
?>