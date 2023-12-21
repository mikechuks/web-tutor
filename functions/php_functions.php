<?php
session_start();
function loginFun(){
   global $conn;
if(isset($_POST['user_sub'])){
   $user_username = $_POST['username'];
   $user_pass = $_POST['pass'];

   $sql = "SELECT user_id, username, user_password, user_image, status FROM user_table WHERE username='$user_username' AND user_password='$user_pass'";
   $result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
         if($row["status"] == 1){
		echo '<script type="text/javascript">window.open("admin-dashboard.php", "_self")</script>';
         }else{
      echo '<script type="text/javascript">window.open("dashboard.php", "_self")</script>';
         }
      $_SESSION['id'] = $row["user_id"];
      $_SESSION['img'] = $row["user_image"];

      echo "session data is saved";
      }
   }else if($user_username=="" || $user_pass==""){
		echo "<script>alert('Enter all Items')</script>";
   }else{
      echo '<script type="text/javascript">window.open("login.php", _self)</script>';
   }
}else{
   echo '<script type="text/javascript">window.open("login.php", _self)</script>';
}
}
function brandFun(){
   global $conn;
if(isset($_POST['brand-sub'])){
   $brand_name = $_POST['brand-name'];
   $brand_select = $_POST['brand-select'];

   $sql = mysqli_prepare($conn, "INSERT INTO brand_tb(brand_name,cat_id)VALUES(?, ?)");
   mysqli_stmt_bind_param($sql, "si",$brand_name,$brand_select);
   mysqli_stmt_execute($sql);
   mysqli_stmt_close($sql);
   mysqli_close($conn);

		if($sql){
			echo "<script>alert('You have succeful created a brand name')</script>";
		}else{
			echo "<script>alert('Brand name is not successfull')</script>";
		}
}else{
   echo '<script type="text/javascript">window.open("admin-brand.php", _self)</script>';
}
}
function categoryFun(){
   global $conn;
if(isset($_POST['cat-sub'])){
   $cat_name = $_POST['cat-name'];

   $sql = mysqli_prepare($conn, "INSERT INTO category_table(category_name)VALUES( ?)");
   mysqli_stmt_bind_param($sql, "s",$cat_name,);
   mysqli_stmt_execute($sql);
   mysqli_stmt_close($sql);
   mysqli_close($conn);

		if($sql){
			echo "<script>alert('You have successfully created a Category')</script>";
		}else{
			echo "<script>alert('Category name is not successfull')</script>";
		}
}else{
   echo '<script type="text/javascript">window.open("admin-cat.php", _self)</script>';
}
}
function proFun(){
   global $conn;
   if(isset($_POST['p-sub'])){
      $p_name = $_POST['p-name'];
      $p_details = $_POST['p-details'];
      $p_select = $_POST['p-select'];
      $p_img = $_FILES['p-img']['name'];
      $p_img_temp = $_FILES['p-img']['tmp_name'];
       
      move_uploaded_file($p_img_temp,"user_img/$p_img");
      $sql = mysqli_prepare($conn, "INSERT INTO product_tb(product_name, product_img, product_detail, brad_id)VALUES( ?,?,?,?)");
      mysqli_stmt_bind_param($sql, "ssss",$p_name,$p_img,$p_details,$p_select);
      mysqli_stmt_execute($sql);
      mysqli_stmt_close($sql);
      mysqli_close($conn);
   
         if($sql){
            echo "<script>alert('You have successfully created a Product')</script>";
         }else{
            echo "<script>alert('Product name is not successfull')</script>";
         }
   }else{
      echo '<script type="text/javascript">window.open("admin-product.php", _self)</script>';
   }
}
?>