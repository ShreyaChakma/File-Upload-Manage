
    <style>
        .profile-image{
            width: 100px;
            margin-top: 50px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid black;
        }

       .el {
            display: block;
            margin-top: 10px;
       }
       .wrapper{
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 5px;
        font-size: 18px;
        background-color: beige;
        height: 100%;;
       }
    </style>

<?php

/**
 * managing uploaded files
 * checking file types
 * checking file size
 * secure from accesing php files
 */
 $name = $_POST['name'];
 $career = $_POST['career'];
 $user_name = $_POST['user_name'];
 $description = $_POST['details'];
 //taking file types in a array//
 $allowed_file_types = array(
     'image/jpeg',
     'image/jpg',
     'image/png'
 );

 //uploaded server file assigning a variable//
 $my_file = $_FILES['my_image']['tmp_name'];
 //defining a destination for move file from server//
 $destination = 'images/'.$_FILES['my_image']['name'];
 //check file types & file size using multiple conditions//

 if($_FILES['my_image']){
     if(in_array($_FILES['my_image']['type'],$allowed_file_types) !== false && $_FILES['my_image']['size']<5*1024*1024){
        //moving uploaded file in defined desnitaion// 
        move_uploaded_file($my_file,$destination);
        echo '<div class="wrapper">';
        echo '<img class ="profile-image" src="'.$destination.'">';
        echo '<div class="el">'.$name."</div>";
        echo '<div class="el">'.$career."</div>";
        echo '<div class="el">'.$user_name."</div>";
        echo '<div class="el">'.$description . "</div>";
        echo '</div>';
     }
 }




