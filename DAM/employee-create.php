<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Employee Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Add 
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">



      <label for="">Id Employee:</label>
      <input type="text" name="idemployee"  class="form-control">
      <label for="">Employee Name:</label>
      <input type="text" name="ename"  class="form-control">
      <label for="">Email Account:</label>
      <input type="text" name="eaccount"  class="form-control">
      <label for="">User Name:</label>
      <input type="text" name="uname"  class="form-control">
      <label for="">Password:</label>
      <input type="password" name="password"  class="form-control">
      <label for="">Position:</label>
      <input type="text" name="position"  class="form-control">
   <br>
      <select class="" name="department"  class="form-control">
        <option value="" selected hidden>Department:</option>
        <option value="BSSC">Business Solutions Support Center</option>
        <option value="ACCTG">Accounting</option>
        <option value="HR">Human Resource</option>
        <option value="ALO">Admin, Logistics and Operation</option>
        <option value="BDG 1">Business Development Group 1</option>
        <option value="BDG 2">Business Development Group 2</option>
        <option value="BDG 3">Business Development Group 3</option>
        <option value="BDG 4">Business Development Group 4</option>
        <option value="DSG">Dedicated Sales Group</option>
        <option value="ESG">Education Sales Group</option>
        <option value="ITSD">Information Technology and Service Department</option>
        <option value="OP">Office of the President</option>
        <option value="PMG">Product Management Group</option>
        <option value="PURCH">Purchasing</option>

      </select>

    <br>
      <label for="">Are you Uploader?</label>
      <input type="checkbox" name="uploader" value="YES"> 
    <br>

    <label for="">Are you Manager Approver?</label>
      <input type="checkbox" name="mapprover" value="YES"> 
    <br>

        

    <label for="">Are you Warehouse Approver?</label>
      <input type="checkbox" name="wapprover" value="YES"> 
    <br>

         
    <label for="">Are you Logistics Approver?</label>
      <input type="checkbox" name="lapprover" value="YES"> 
    <br>



<br>
                            <div class="mb-3">
                                <button type="submit" name="save_employee" class="btn btn-primary">Save Employee</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>