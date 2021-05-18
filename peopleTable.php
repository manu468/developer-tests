
<?php
$people = [
   ['id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'],
   ['id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'],
   ['id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'],
   ['id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'],
   ['id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com'],
];


  foreach ($people as $row) 
      {
       $id = $row['first_name'];
       $email = $row['email'];
     echo '<table>';
     echo '<tr>';
     echo '<td> ' .$row['id'].' </td>';
     echo '<td> ' .$row['first_name']. ' </td>';
     echo '<td> '.$row['last_name']. ' </td>';
   //   echo '<td><input type="button" value="Say Hi!" onclick="alert(\'Name:'.$row['first_name'].'\',\''.$row['email'].'\')" /></td>';
   echo '<td><input type="button" value="Submit!" onclick="alert(\'Name:'.$id.'\'+ \'  \' + \'Email:'.$email.'\')" /></td>';
     echo '</tr>';
     echo '<br>';
    
     echo '</table>';
      }
 ?>
