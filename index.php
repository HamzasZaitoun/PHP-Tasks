<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<style>
  form
  {
    text-align:start;
  }
    input
    {
        padding:.3rem;
        margin-left:3rem;
        width: 100px;
        margin:3px;
        margin-top:20px
    }
    #submit
    {
        border-radius:3px;
        background-color:white;

    }
    #welcomeMessage
    {
        margin-top:70px;
        margin-left:30px;
    }
</style>



<body>

<form action="" method="post">
 
<label for="name">Name:</label>
<input type="text" name="name"><br>
<label for="email">Email:</label> 
<input type="text" name="email"><br>
<input id="submit"type="submit">

</form>

<div id="welcomeMessage">
Welcome: <?php echo $_POST["name"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?> </span>
</div>



</body>
</html>