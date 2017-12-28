
<?php
 
include 'application/components/Db.php';
 $db = Db::getConnection();

 
switch ($_POST['action']):
 
    case "showProgramForInsert":
        echo '<table><tr><th> N</th><th> Name</th><th> Type </th></tr>';
            $sql ="SELECT * FROM programm where type='" .($_POST['name'])."'"; // mysql_real_escape_string($_POST['name']) 

        //echo '<option value="'.$sql.'">'.$sql.'</option>';
        
        //$result = $db->query($sql);
        $query  = $db->query($sql);
        $result = $query->FETCHALL(PDO::FETCH_ASSOC);
        foreach( $result  as  $arry )
        {
             echo '<table><tr><th>'.$arry['id'].'</th><th>'.$arry['name'].'</th><th>'.$arry['type'].'</th></tr>';
        }
        
        break;

        
endswitch;




