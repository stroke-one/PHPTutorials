<html>
    <head>
        <title>
            Furthermore
        </title>
    </head>
    <body>
    <center>
        <form action="index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
        <?php
            echo $_POST['name'];
        ?>
    </center>        
    </body>
