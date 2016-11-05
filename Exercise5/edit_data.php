<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM userinfo WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $full_name = $_POST['full_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $cp_num = $_POST['cp_num'];
 $comment = $_POST['comment'];
 // variables for input data

 // sql query for update data into database
 $sqli_query = "UPDATE userinfo SET Name='$full_name',
 Nickname='$nickname',Email='$email',Home_Address='$address',
 Gender='$gender',Cp_Num='$cp_num',Comment='$comment' 
 WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con, $sqli_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='webpage.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: webpage.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Edit your feedback</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="full_name" placeholder="Full Name" value="<?php echo $fetched_row['Name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['Nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['Email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Address" value="<?php echo $fetched_row['Home_Address']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['Gender']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cp_num" placeholder="Cellphone number" value="<?php echo $fetched_row['Cp_Num']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comment" placeholder="Comment" value="<?php echo $fetched_row['Comment']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>