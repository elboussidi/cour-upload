

<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>user</title>
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
        
 
        <?php include '../index2.php'; ?>
          
        <br>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
		<h2>User <b>Management</b></h2>
			</div>
		<div class="col-sm-7">
                    <a href="new_use.php" class="btn btn-outline-warning"> <span>Add New User</span></a>
							
		</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
			<th>Tel</th>
			<th>date inscription</th>
                        <th>role</th>
			<th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href=""vvvvf> abdelmajid</a></td>
                        <td>0677076287</td>                        
                        <td>2020/04/13</td>
		<td><span class="status text-success">&bull;</span>ADMIN </td>
			<td>
			<a href="" class="btn btn-danger" title="Settings" data-toggle="tooltip"> del  </a>
                       <a href="" > <button type="button" class="btn btn-success">add</button></a> 
                        
			</td>
                    </tr>
			</tbody>
            </table>
                    </div>    
                    </div>
        
        
        
       <br>
        <?php include '../footer.php'; ?>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>

