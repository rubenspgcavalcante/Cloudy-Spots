<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta title="Cloudy Spots">
</head>

<body>
    <h1>Cloudy Spots</h1>
    <?php if(!empty($msg))echo $msg; ?>
    <div>
        <form name="login" method="POST" action="#">
            <input type="text" name="email" value="" />
            <input type="password" name="password" value="" />
            <input type="submit" value="ok" />
            <input type="reset" value="cancel" />
        </form>
    </div>

</body>
</html>
