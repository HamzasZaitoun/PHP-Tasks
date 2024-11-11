 <?php
 include('connect.php');
session_start();


if (isset($_POST['Email'])&&isset($_POST['Password']))
{
    function validateData($data)
    {
       $data=trim($data);
       return $data;
    }
    $email=validateData($_POST["Email"]);
    $password=validateData($_POST["password"]);
}
// else
// {
//   header("location: login.php") ; 
// }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">users List</h2>
        <?php
        try {
            // SQL query to fetch all data from the table
            $sql = "SELECT id, name, email,password FROM users";

            // Execute the query
            $stmt = $conn->query($sql);

            // Fetch all the results as an associative array
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Check if there are results
            if (count($results) > 0) {
                // Start the HTML table with Bootstrap classes
                echo "<h3>Guesttt List</h3>";
                echo "<table class='table table-bordered table-striped'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>";

                // Loop through each row and display the data in the table
                foreach ($results as $row) {
                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['password'] . "</td>
                        <td>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                            <a href='update.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Update</a>
                        </td>
                      </tr>";
                }

                // End the table
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-info'>No records found.</div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger'>Error fetching data: " . $e->getMessage() . "</div>";
        }

        // Close the connection (optional)
        $conn = null;
        ?>
        <a href="regerster.php" class="btn btn-primary">Register</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
