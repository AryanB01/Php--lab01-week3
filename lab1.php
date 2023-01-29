<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatives</title>
</head>
    <style>
        table{
            border: 2px solid black;
            padding: 1em;
        }
        td{
            padding: 1em;
            
        }
    </style>
<body>
   <table>
        <tbody>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
            </tr>  
        </tbody>
        <?php
        //connecting to the server
        $db = new PDO ('mysql:host=172.31.22.43;dbname=Aryan200499425', 'Aryan200499425', 'rRYEVkRqSW');

        $sql = 'SELECT * FROM relatives';

        $cmd = $db->prepare($sql);
        $cmd->execute();
        $_relatives = $cmd->fetchALL();
            

        foreach($_relatives as $relative){
            echo '<tr>
            <td>' . $relative['name'] . '</td>
            <td>' . $relative['age'] . '</td>
            <td>' . $relative['occupation'] . '</td>
            </tr>';
        }
  
        echo '</table>';  

        $db = null;
        ?>
    
    
    </body>
</html>