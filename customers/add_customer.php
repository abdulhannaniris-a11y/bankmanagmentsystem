<?php

include "../config/db.php";

include "../includes/header.php";

include "../includes/navbar.php";


if(isset($_POST['save']))
{


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];


$query=
"INSERT INTO customers
(name,email,phone,address)
VALUES
('$name','$email','$phone','$address')";


mysqli_query($conn,$query);


echo "<script>alert('Customer Added')</script>";

}


?>


<div class="container mt-5">


<h2>Add Customer</h2>


<form method="POST">


<input class="form-control mb-2"
name="name"
placeholder="Name">


<input class="form-control mb-2"
name="email"
placeholder="Email">


<input class="form-control mb-2"
name="phone"
placeholder="Phone">


<textarea class="form-control mb-2"
name="address"
placeholder="Address"></textarea>



<button class="btn btn-primary"
name="save">

Save

</button>


</form>


</div>