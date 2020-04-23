<?php  
require '../conn.php';

if(isset($_GET['m'])){
    
    $m= intval( $_GET['m']);
    
    if($m== 1){$m="buretique";}elseif ($m==2) {$m="sage";}elseif ($m==3) {$m="travu "; }
        
   
        
    
    
    $stmt=$conn->prepare("SELECT * FROM `cour` WHERE `type`='document' AND `module`= ? AND status='oui'");
    $stmt->execute([$m]);
    $data=$stmt->fetchAll();
    
   
    
    
    
    
}

?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>js</title>
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
           
           #tabl-cour{
               
               margin-left:    7%;
           }
     </style>
     
    <body>
        
 
        <?php include '../indexp.php'; ?>
        
       
        
        <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>title</th>
      <th>discripton</th>
      <th>module</th>
      <th>vue </th>
     
      
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
      <td><a href="<?php echo $row['lien']; ?>"><i class="fas fa-download"></i> download</a></td>
     
   
    
    <?php  }  ?>
  </tbody>
</table>
        
     </div>   
        
        
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
