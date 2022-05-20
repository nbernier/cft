<?php
echo "<h3>Folder :</h3>";

 $cur_dir = getcwd();
  
echo("Current Directory is " . $cur_dir);

$env_array =getenv();

echo "<h3>The list of environment variables with values are :</h3>";

//Print all environment variable names with values

foreach ($env_array as $key=>$value)

{

    echo "$key => $value <br />";

}
  
?>