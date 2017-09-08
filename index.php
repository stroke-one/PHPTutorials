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
        <input type="submit">
        </form>
        <?php
            if isset($_POST['name']){
            echo $_POST['name'];
            }
        ?>
    </center>        
    </body>
