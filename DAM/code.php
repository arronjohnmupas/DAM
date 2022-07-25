<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete_employee']);

    $query = "DELETE FROM tb_data WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: home.php");
        exit(0);
    }
}


if(isset($_POST['update_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $eaccount = mysqli_real_escape_string($con, $_POST['eaccount']);
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
   
  
  
    $query = "UPDATE tb_data SET  eaccount='$eaccount', uname='$uname', password='$password', position='$position' WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: home.php");
        exit(0);
    }

}


if(isset($_POST['save_employee']))
{

    $idemployee = mysqli_real_escape_string($con, $_POST['idemployee']);
    $ename = mysqli_real_escape_string($con, $_POST['ename']);
    $eaccount = mysqli_real_escape_string($con, $_POST['eaccount']);
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $uploader = mysqli_real_escape_string($con, $_POST['uploader']);
    $mapprover = mysqli_real_escape_string($con, $_POST['mapprover']);
    $wapprover = mysqli_real_escape_string($con, $_POST['wapprover']);
    $lapprover = mysqli_real_escape_string($con, $_POST['lapprover']);

    $query = "INSERT INTO tb_data (idemployee,ename,eaccount,uname,password,position,department,uploader,mapprover,wapprover,lapprover) VALUES ('$idemployee','$ename','$eaccount','$uname','$password','$position','$department','$uploader','$mapprover','$wapprover','$lapprover')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Employee Created Successfully";
        header("Location: employee-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Created";
        header("Location: employee-create.php");
        exit(0);
    }
}

?>