<?php 
  require_once './functions/pdo_connection.php';
  require_once './functions/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Phone Book</title>
</head>
<body>

    <div class="container g-4">
        <section >
            <div class="row align-items-center  justify-content-between  ">
            <div class="col-4">
                    <a class="nav-link active"  href="#"><h1>Phone Book</h1></a>
                </div>
                <div class="col-2">
                    <a href="<?=url('add.php')?>" class = " btn btn-outline-primary"> Add new </a>
                </div>
            </div>
        </section>
      <table class=" overflow-auto table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Family</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">email</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php 
              $pdo;
              $sql = "SELECT * FROM `call_numbers`";
              $statement = $pdo->prepare($sql);
              $statement->execute();
             $calls=$statement->fetchAll();
              foreach ($calls as $call)
              {
                ?>
          <tr>
           
            
            <th scope="row"><?=$call->id?></th>
            <td><?=$call->name?></td>
            <td><?=$call->family?></td>
            <td><?=$call->phone_number?></td>
            <td><?=$call->address?></td>
            <td><?=$call->email?></td>
            <td>
                <a href="<?=url('delete.php?call_id='.$call->id)?>" class = "btn btn-primary btn-sm"> Delete</a>
            </td>
            <?php 
            }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>