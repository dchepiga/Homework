<form action="31.php" method="post">
    <span>name</span>
    <input type="text" name="name"/><br>
    <span>email</span>
    <input type="email" name="email"/><br>
    <span>phone</span>
    <input type="text" name="phone"/><br>
    <input type="submit"/>
</form>
<pre>
<?php

echo serialize($_POST);

?>
</pre>
