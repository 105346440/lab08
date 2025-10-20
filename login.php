<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="header" />
    <meta name="keywords" content="HTML5, tags" />
    <meta name="author" content="header" />
    <title>header</title>
  </head>

    <body>
    <?php include('header.inc'); ?>
    
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="hidden" name="token" value="abcd123">
        <input type="submit" value="Login">
    </form>

    <?php include('footer.inc'); ?>
        
    </body>


</html>