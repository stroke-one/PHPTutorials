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
                $con = mysql_connect('localhost', 'ben', '...')
                        or die('Unable to connect: ' . mysql_error());
                mysql_select_db('phptest') or die ('unable to select db');
                $sql_insert = 'insert into names (name) VALUES (' . $_POST['name'] . ')';
                if (($con->query($sql) === TRUE){
                    $sql = 'select name from names';
                    $result = $con->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc())){
                            echo("<p>" . $row["name"]) . "</p>"
                        }
                    }
                    
                     
                }
                
            }
        ?>
    </center>        
    </body>
