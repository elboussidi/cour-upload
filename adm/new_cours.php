
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>nwe_cours</title>
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
        
     
        
     
        <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">add new cours</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                
                                
                                  <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">title</label>
                                    <div class="col-md-6">
                                      <input class="form-control" type="text" value="" id="example-text-input">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">module</label>
                                    <div class="col-md-6">
                                      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                                </div>
                                </div>

                                
                                
                                
                                
                                
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">type</label>
                                    <div class="col-md-6">
                                      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                <option selected>video</option>
                                <option value="1">document</option>
                                
                              </select>
                                </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">discription</label>
                                    <div class="col-md-6">
                                      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">lein</label>
                                    <div class="col-md-6">
                                       <input class="form-control" type="url" value="" id="example-url-input">
                                    </div>
                                </div>

                           
                            <div style="margin-left:180px ;" class="form-group row">
                   
                    
                                <br>
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-success" value="add cour" name="reg" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
        
        
        
        
        
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
