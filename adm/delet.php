
<?php
if (isset($_SESSION['lev'])){ 

    $st=$_SESSION['lev'];   
if($st == "ADMIN"){
    echo 'yes admin';
}else{
     echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " '; 
    die( '<div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
');
        
        
    
   } 
}

require '../conn.php';

 if (isset($_GET['id']) and !empty($_GET['id'])){
    $id=intval( $_GET['id']);
  $stmt=$conn->prepare("DELETE FROM `cour` WHERE  id =?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
     
  } else {
      echo 'error';
  }
    
header("location:index.php?mod=cour");
 
}


 if (isset($_GET['idu']) and !empty($_GET['idu'])){
    $id=intval( $_GET['idu']);
  $stmt=$conn->prepare("DELETE FROM `user` WHERE  id =?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
     
  } else {
      echo 'error';
  }
    

 header("location:index.php?user=user");
}