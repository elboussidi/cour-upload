<?php 
require '../conn.php'; 
$m=1;
if(isset($_GET['m'])){

$m= intval( $_GET['m']);

//if($m== 1){
//    $m="berutique" ;
//}elseif ($m == 2) {
//       $m="sage" ;  
//    }elseif ($m == 3 ) {
//        $m="fin exrcice";
//    }


}
?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>les video</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
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
        
 
        <?php include '../indexp.php'; ?>
        
        <div class="container col-10" >
       
                  <div class="card text-center">
  <div class="card-header">
   <?php 
if($m == 1){echo 'berutique'; }elseif ($m == 2){echo 'sage'; }elseif ($m == 3) {
          
     echo 'travux fin exrcice';  }  ?>
  </div>
                      <br>
  <div class="card-block">
    <h4 class="card-title"><i class="far fa-file-video"></i> video</h4>
    <p class="card-text">ici les video </p>
    <a href="../puplic/media.php?m=<?php echo $m;?>" class="btn btn-primary disabled"> en cour ...</a>
  </div>
                      <br>
 
            </div>
            <br><br>
            
            
                  <div class="card text-center">
  <div class="card-header">
    <?php 
    if($m == 1){echo 'berutique'; }elseif ($m == 2){echo 'sage'; }elseif ($m == 3) {
          
     echo 'travux fin exrcice';  }  ?>
  </div>
                      <br>
  <div class="card-block">
    <h4 class="card-title"><i class="far fa-file-word"></i> Documment </h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="../puplic/document.php?m=<?php echo $m;?>" class="btn btn-primary">Go to document</a>
  </div><br>
 
</div>
           
            </div>
              
        
        
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
