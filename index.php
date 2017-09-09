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
                echo("<p>Added new name: " . $_POST['name'] . "</p>");
                echo("</center>");
                $con = new PDO('mysql:host=localhost;dbname=phptest', 'ben', '...');                   
                $sql_insert = "insert into names (name) VALUES ('" . $_POST['name'] . "')";
                $cur = $con->prepare($sql_insert);
                $cur->execute();
                            
                $sql = "select name from names";
                $cur = $con->prepare($sql);
                $cur->execute();
                $result = $cur->fetchAll();
                echo("<hr><b>Names in the database");
                foreach($result as $row){
                    echo("<p>" . $row['name'] . "</p>");
                }

                }
        ?>      
    </body>
    </html>