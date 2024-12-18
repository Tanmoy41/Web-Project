<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    form {
      background-color: #fff;
      padding: 15px;
      box-shadow: 0px 0px 10px 0px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
    <div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insertAction.php" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                           <h3>Insert Data</h3> 
                    </div>
                    <div class="mb-3">
                     Event Name : 
                      <input type="text" class="form-control" name = "name" placeholder="Aa" required>
                      
                    </div>
                    <div class="mb-3">
                    Description :
                    <textarea class="form-control" id="product-description" rows="3" name="description" placeholder="Enter ticket description"></textarea>
                    </div>
                    <div class="mb-3">
                      Cost :
                      <input type="text" class="form-control" name="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary col-12" name="login">Insert</button>
                </form>
            </div>
        </div>
    </div>
   
    <div class="container-fluid mt-3">
        <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Event Name</th>
          <th scope="col">Description</th>
          <th scope="col">Cost</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include '../Config/config.php';
        $allData = mysqli_query($conn,"SELECT * FROM `info`");
        while($row = mysqli_fetch_array($allData)){
          echo "
          <tr>
          <td>{$row['id']}</td>
          <td>{$row['Name']}</td>
          <td>{$row['Description']}</td>
          <td>{$row['Price']}</td>
          <td><a class='btn btn-warning' href='update.php? id={$row['id']}'>Update</a></td>
          <td><a class='btn btn-danger' href='delete.php? id={$row['id']}'>Delete</a></td>

          ";
        }
        ?>
        
      </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>