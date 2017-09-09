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
            if (!empty($_POST['name'])){
                echo $_POST['name'];
                $con = new PDO('mysql:host=localhost;dbname=phptest', 'ben', '...');                   
                $sql_insert = "insert into names (name) VALUES ('" . $_POST['name'] . "')";
                echo($sql_insert);
                $cur = $con->prepare($sql_insert);
                $cur->execute();
                            
                $sql = "select name from names";
                $cur = $con->prepare($sql);
                $cur->execute();
                $result = $cur->fetchAll();
                foreach($result as $row){
                    echo("<p>" . $row['name'] "</p>");
                }

                }
        ?>
    </center>        
    </body>
