
                    
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>new_user</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="stylesheet" href="../css/semantic.min.css">
      <style type="text/css">
           @font-face{
             font-family: tdt ;
            src: url('fo.ttf');
           }
            @font-face{
             font-family: tst ;
            src: url('mp.ttf');
           }
            p{
               font-family: tst ;
           }     
           
           
/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
           
     </style>
     
    <body>
        
 
        <?php include '../index2.php'; 
 require'../conn.php';

if (isset($_SESSION['lev'])){ 

    $st=$_SESSION['lev'];   
if($st == "ADMIN"){
   
}}else{
    
    echo '  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
        
    
    
}


 ?>
      
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
                     <?php if (isset($_SESSION['name'])){  ?>
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
                                    <img src="../img/elyse.png" style="margin-left:25%;" class="img-fluid" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
                              
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php  echo   $_SESSION['name'];  ?>
					</div>
					<div class="profile-usertitle-job">
						<?php  echo   $_SESSION['lev'];  ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-light btn-sm">0<?php  echo   $_SESSION['tel'];  ?> </button>
					
                                            
                                 <?php  if( $_SESSION['status'] == "active"){
      echo '<button type="button" class="btn btn-success btn-sm"> '.$_SESSION['status'].'</button>'; 
                                 }
                                 else {
                                          echo '<button type="button" class="btn btn-danger btn-sm"> '.$_SESSION['status'].'</button>'; 
                                     } ?>
                                        
                                       
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
                                    <ul class="nav " style="margin-left: 20%;">
					
                                                     <li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
                                                        <a href="">Account Settings  </a>
					             <li>
						
					</ul>
				</div>
                               
 				<!-- END MENU -->
                                
                                
                                <?php 
                if ( $_SESSION['lev'] == "ADMIN"){
                 
                   
                    
    $stmt=$conn->prepare("SELECT * FROM `user` WHERE `status` ='desactive'");
    $stmt->execute([]);
    $data2=$stmt->fetchAll();
    $totalu=$stmt->rowCount();
                    
                  
                
                
                
                 $stmt=$conn->prepare("SELECT * FROM `cour` WHERE `type`='document' AND `status`= 'non'");
    $stmt->execute([]);
    $data=$stmt->fetchAll();
    $tot=$stmt->rowCount();
       } else {
       $tot='..'  ;  
       $totalu='..'  ; 
       }
                ?>  
                    
                                
                                
			</div>
		</div>
       
		<div class="col-md-6">
            <div class="profile-content">
                
              <ul class="list-group">
                  <li class="list-group-item justify-content-between"><a href="user.php">
    user manager </a>
    <span class="badge badge-default badge-pill">  </span>
  </li>
  <li class="list-group-item justify-content-xl-around">
   <a href="index.php?mod=cour">   cour en attend </a>  &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; &ensp; &ensp;
  
    <span class="badge badge-info badge-pill"> <?php echo $tot;  ?></span>
  </li>
  <li class="list-group-item justify-content-xl-around">
      <a href="new_cours.php">  new cour </a>  
    <span class="badge badge-info badge-pill"></span>
  </li>
   <li class="list-group-item justify-content-xl-around">
       <a href="new_use.php">  new user </a> 
    <span class="badge badge-info badge-pill"></span>
  </li>
   <li class="list-group-item justify-content-xl-around">
       <a href="index.php?user=user">  user en attend </a> &ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;
    <span class="badge badge-info badge-pill"><?php echo $totalu;  ?></span>
  </li>
  
</ul>
		 </div>
		</div>
               <?php   
               
                } else {
     echo " <div class='alert alert-danger' role='alert'> aucan information</div> ";   
                }          // and if virevication de sesstion pour afiche les information admin
                if (isset($_GET['mod']) AND $_SESSION['lev'] == "ADMIN"){
                 
                    $m="non";
                    
    $stmt=$conn->prepare("SELECT * FROM `cour` WHERE `type`='document' AND `status`= ?");
    $stmt->execute([$m]);
    $data=$stmt->fetchAll();
    
                    
                  ?>  
                    
                    
                
           
        
       
        <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>title</th>
      <th>discripton</th>
      <th>module</th>
      <th>vue </th>
      <th>action</th>
      
    </tr>
    
    </thead>
    <tbody>
    <?php  
    foreach ($data as $row){
       
    
    ?>
    
    
  
  
      
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['discription']; ?></td>
      <td><?php echo $row['module']; ?></td>
      <td><a href="<?php echo $row['lien']; ?>"> download</a></td>
      <td>	<a href="../adm/delet.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" title="Settings" data-toggle="tooltip"><i class="fas fa-trash-alt"></i> del  </a>
              <a href="activ.php?id=<?php echo $row['id']; ?>" > <button type="button" class="btn btn-success btn-sm"> <i class="far fa-check-circle"></i> aprove</button></a> </td>
    </tr>
   
    
    <?php  }  ?>
  </tbody>
</table>
    </div>
        
        
        
        <?php
         }
              
               ?>
        
        
	</div>
</div>

<!-------------------   parti 2   ---------------------------------------- -->



 <?php 
                if (isset($_GET['user']) and  $_SESSION['lev'] == "ADMIN"){
                 
                   
                    
    $stmt=$conn->prepare("SELECT * FROM `user` WHERE `status` ='desactive'");
    $stmt->execute([]);
    $data2=$stmt->fetchAll();
    
                    
                  ?>  
                    
                    
                
           
        
       
        <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>name</th>
      <th>Tel</th>
      <th>action</th>
      
    </tr>
    
    </thead>
    <tbody>
    <?php  
    foreach ($data2 as $row2){
       
    
    ?>
    
    
  
  
      
    <tr>
      <th scope="row"><?php echo $row2['id']; ?></th>
      <td><?php echo $row2['name']; ?></td>
      <td><?php echo $row2['tel']; ?></td>
      <td>	<a href="../adm/delet.php?idu=<?php echo $row2['id']; ?>" class="btn btn-danger btn-sm" title="Settings" data-toggle="tooltip"><i class="fas fa-trash-alt"></i> del  </a>
              <a href="activ.php?idu=<?php echo $row2['id']; ?>" > <button type="button" class="btn btn-success btn-sm"> <i class="far fa-check-circle"></i> aprove</button></a> </td>
    </tr>
   
    
    <?php  }  ?>
  </tbody>
</table>
    </div>
        
        
        
        <?php
         }
              
               ?>
        
        
	</div>
</div>


<br>
        <?php 
        
        include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
