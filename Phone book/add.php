<?php 
  require_once './functions/pdo_connection.php';
  require_once './functions/helpers.php';
    
  if(
       isset($_POST['name']) and  $_POST['name'] !== ''
   &&  isset($_POST['family']) and  $_POST['family'] !== ''
   &&  isset($_POST['phone_number']) and  $_POST['phone_number'] !== ''
   &&  isset($_POST['address']) and  $_POST['address'] !== ''
   &&  isset($_POST['email']) and  $_POST['email'] !== ''
  ){
    $pdo;

    $sql = "INSERT INTO `call_numbers`(name,family,phone_number,address,email)value(?,?,?,?,?);";
    $statement =$pdo->prepare($sql);
    $statement->execute([$_POST['name'],$_POST['family'],$_POST['phone_number'],$_POST['address'],$_POST['email']]);
    redirect('index.php');
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert to phone book </title>
</head>
<body style ="background-color:#1111;">
    <div class="container-sm mt-5 align-item-center ">
        <div class="row justify-content-center">
               <h2>ADD new phonNumber</h2>
            <div  class="col-8 " style= "max-width: 700px;" >
               <form action="<?=url('add.php')?>" class = "form" method="post" enctype="multipart/form-data">

                  <label for="name" class = "form-label">name</label>
                   <input type="text"  name = "name" id = "name"class="form-control">

                    <label for="family"  class = "form-label">family</label>
                    <input type="text" name= "family" id = "family"class="form-control">

                    <label for="phonNumber" class = "form-label">phonNumber</label>
                    <input type="text" id = "phonNumber"class="form-control" name= "phone_number">

                     <label for="address" class = "form-label">address</label>
                     <input type="text" id = "address"class="form-control" name= "address">
            
                    <label for="email" class = "form-label ">email</label>
                    <input type="email" id = "email"class="form-control" name= "email">

                    <button type="submit" class="btn btn-primary mt-5">Add Numbers</button>
                 </form>
                 
            </div>
            </div>
        </div>
       
    </div>
</body>
</html>