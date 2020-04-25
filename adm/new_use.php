<?php 
require '../conn.php';
require 'fun.php';

$err=" ";
if(isset($_POST['reg']) && $_SERVER['REQUEST_METHOD'] =="POST"){

    $name= majid($_POST['name']);
    $phone= majid($_POST['phone']);
    $password= majid($_POST['password']) ;
      $password2=$_POST['password2'] ;
       // $gender=$_POST['gender'] ;
 
        
     if(empty($name) || empty($phone) || empty($password) || empty($password2)  ){
 $err='<div class="alert alert-danger" role="alert">filed empty !!</div>';
     } else {
    if($password !== $password2){
       $err='<div class="alert alert-danger" role="alert"> password not corespedant</div>'; 
    } else {
     $password_hash=  password_hash($password, PASSWORD_DEFAULT);
        
        
       $stmt=$conn->prepare("INSERT INTO `user` (`id`, `name`, `tel`, `password`, `status`, `lev`) VALUES (NULL, ?, ?, ?, 'desactive', 'member')");
       $stmt->execute([$name,$phone,$password_hash]);
       
       if($stmt){
           $err='
  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:green ;">
    تم تسجيل عضويتك بنجاح سيتم تفعيل حسابك بعد مراجعته
<i class="far fa-check-circle"></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="2; \'/ofppt/puplic/document.php?m=2\' /> " ';   
        
           
           //$err='<div class="alert alert-success" role="alert">data has been saved</div>';
       }
        
        
    }
         
         
         
     }
        
        
}
?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>new_user</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="shortcut icon" type="image/png" href="../doc2.png">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
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
     </style>
     
    <body>
        
 
        <?php include '../index2.php'; ?>
        
      
        <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php echo $err;  ?>
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name">
                                    </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="present_address" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right"> conferm password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="permanent_address" class="form-control" name="password2">
                                    </div>
                                </div>

                           
                <div style="margin-left:180px ;" class="form-group row">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="gender" > Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="gender"> Male
                                </label>
                            </div>
                        </div>
                    </div>
          
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-primary" value="regester" name="reg" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
        
                <br><br>
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>

