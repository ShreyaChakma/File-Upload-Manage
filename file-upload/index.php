<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
<body>
    <div class = "card">
      <form method="post" action="result.php" enctype="multipart/form-data">
        <div class = "card-header">
             <label for="my_image" >Upload image</label>
             <input type="file" name="my_image">
             <br><br>
        </div>
        <div class ="card-body">
             <label for="name">Full Name</label><br>
             <input type="text" name="name">
             <br><br>
             <label for="career">Career</label><br>
             <input type="text" name="career">
             <br><br>
             <label for="user-name">User Name</label><br>
             <input type="text" name="user_name">
             <br><br>
             <label for="details">Description</label><br>
             <textarea name="details"></textarea>
             <br><br>
        </div>
          <button type="submit">Register</button>
      </form>
    </div>
    
</body>
</html>