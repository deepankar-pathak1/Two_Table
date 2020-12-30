
<!DOCTYPE html>
<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>

<form>
  Name:
  <select>
    <option >-- Select Name --</option>
    <?php
        include 'stu_ser.php';
       
        $id = $_GET['id'];
        $records = "SELECT * FROM student INNER JOIN new_student ON student.id = new_student.student_id ";
        $query = mysqli_query($conn, $records);

      
        
       while ($row = mysqli_fetch_array($query)) {
echo '<option>'.$row['name'].'</option>';
}

echo '</select>';

?>  
 
</form>

<?php mysqli_close($conn);  ?>

</body>
</html>
