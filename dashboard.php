<?php

include "includes/header.php";

include "includes/navbar.php";

?>


<div class="container mt-5">


<h1 class="text-center">
Bank Managment System
</h1>


<div class="row mt-5">


<div class="col-md-6">


<div class="card p-4">

<h3>Customer Management</h3>

<a class="btn btn-primary"
href="customers/add_customer.php">

Add Customer

</a>


</div>

</div>




<div class="col-md-6">


<div class="card p-4">


<h3>Account Management</h3>


<a class="btn btn-success"
href="accounts/add_account.php">

Add Account

</a>


</div>


</div>



</div>


</div>


<?php

include "includes/footer.php";

?>