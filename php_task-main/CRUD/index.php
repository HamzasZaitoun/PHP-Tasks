<?php

include('./layout/header.php');
require('conn.php');
?>


<?php
if(isset($_GET['message'])){
    echo '<h6 class="container">'.$_GET['message'].'</h6>';
}
?>
<?php
if (isset($_GET['message'])) {
    $message = urldecode($_GET['message']);
    echo '<div class="toast align-items-center fade show " role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">added succefully</div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>';
}
?>
<div class="mb-5">
<div class="container mt-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New User
    </button>
</div>
<div class="container mt-5">
    <table class="table table-striped table-hover table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">User name</th>
                <th scope="col">User Email</th>
                <th colspan="2" class="text-center">Action</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>

        

            <?php
                $query="SELECT * FROM `crud`";
                $users=$dbconnection->query($query);
              

                if($users->rowCount()==0){
                echo ("empty table");
                }else{
                    foreach($users as $user)
              {  echo "  <tr>
                <td>$user[user_id] </td>
                <td>$user[user_name] </td>
                <td>$user[user_email] </td>
                 <td><a href='./feature/update_page.php?id=$user[user_id]' class='btn btn-primary'>Edit</a>
                 </td>
                 <td><a href='./feature/delete.php?id=$user[user_id]' class='btn btn-danger'>Delete</a>  </td>
               </tr> ";
}
                }
                ?>


        </tbody>
    </table>
    <form action="insert_data.php" method="post" class="mb-5">
        <div class="modal fade container" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <!-- Updated close button for Bootstrap 5 -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- name -->
                        <label for="fname">First name</label>
                        <input type="text" placeholder="inter your name" name="fname" class="form-control">
                        <!-- Email -->
                        <label for="email">User Email</label>
                        <input type="text" placeholder="inter your name" name="email" class="form-control">
                        <!-- phone number -->
                        <label for="mobile">User Mobile</label>
                        <input type="text" placeholder="inter your name" name="mobile" class="form-control">
                        <!-- password -->
                        <label for="password">User password</label>
                        <input type="text" placeholder="inter your name" name="password" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <!-- Updated buttons for Bootstrap 5 -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="add_student" value="Add">
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
</div>

<?php

include('./layout/footer.php');
?>