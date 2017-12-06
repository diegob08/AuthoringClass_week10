
<html>
<head>
    <title>Employee Site</title>
</head>
<body>

    <?php

        ini_set('display_errors',1);

        require_once('includes/Database.php');

        //$db->table = 'tbl_employees';
        //$qstring = 'SELECT * FROM '.$db->table;
        //$result = $db->query($qstring);
        
        $result = $db->getAllRecords('tbl_employees');

        $max = $db->numRows($result);
    ?>

    <ul>

        <?php
            for($i=0; $i<$max; $i++ ){
                $row = $db->fetchArray($result);
                echo '<a href=""><li>'.$row['emp_fname'].' '.$row['emp_lname'].'</a></li>';
            }   
         
        ?>

    </ul>


</body>
</html>
