
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student dashboard</title>

    <?php 
     
     include 'stu_css.php';

    ?>
   
</head>
<body>
<?php  
 
 include "stusidebar.php";

?>    
 
 

  <div class="content">
 
 <!-- cant be displayed on the page bcos of where it is placed  -->

<?php  

 
    
$con = mysqli_connect('localhost', 'root', '', 'school', 3307);

    

  
   
    $stmt = $con->prepare ("SELECT * FROM user where status='student'");
   
    $stmt->execute();
    $result = $stmt->get_result();
    $row =$result->fetch_array();

    
    

    while($row = mysqli_fetch_array($result))
    {
        ?>
        
           <img src="<?php echo "uploadimage/".$row['image']; ?>"  >
         
        <?php 
    }

?>
  </div>
</body>
</html>    





