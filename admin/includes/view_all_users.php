
<table class="table table-bordered table-hover" >
    <thead>
        <tr>
            <th> Id</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Admin</th>
            <th>Subscriber</th>
            <th>Edit</th>
           <th>Delete</th>
        </tr>
    </thead>
    <tbody>
   
          
          <?php
    
    
            
    
$query= "SELECT *FROM users";
$select_users= mysqli_query($connection,$query);

while ($row= mysqli_fetch_assoc($select_users)) {
$user_id= $row['user_id'];
$username = $row['username'];
$user_password = $row['user_password'];
$user_firstname = $row['user_firstname'];
$user_lastname= $row['user_lastname'];
$user_email= $row['user_email'];
$user_image = $row['user_image'];
$user_role = $row['user_role'];


    
echo "<tr>";
echo "<td>$user_id</td>";
echo "<td>$username</td>";
echo "<td>$user_firstname</td>";



// $query= "SELECT *FROM categories WHERE cat_id= {$post_category_id} ";
// $select_categories_id= mysqli_query($connection,$query);
// while ($row= mysqli_fetch_assoc($select_categories_id)) {
// $cat_id= $row['cat_id'];
// $cat_title = $row['cat_title'];





// echo "<td>{$cat_title}</td>";
// }







echo "<td>$user_lastname</td>";
echo "<td>$user_email</td>";
echo "<td>$user_role</td>";





// $query="SELECT*FROM posts WHERE post_id=$comment_post_id";
// $select_post_id_query=mysqli_query($connection,$query);

// while ($row = mysqli_fetch_assoc($select_post_id_query)) {
//     $post_id=$row['post_id'];
//     $post_title=$row['post_title'];
       

// echo "<td><a href='../post.php?p_id=$post_id'>$post_title</td>";


// }




// echo "<td>$comment_date </td>";


echo"<td> <a href='users.php?admin=$user_id'>Admin</a></td>";
echo"<td> <a href='users.php?subscribe=$user_id'>Subscriber</a></td>";
echo"<td> <a href='users.php?source=edit_user&edit={$user_id}'>Edit</a></td>";
echo"<td> <a href='users.php?delete=$user_id'>Delete</a></td>";


echo "</tr>";


// admin change 

if (isset($_GET['admin'])) {
$the_user_id = $_GET['admin'];
$query ="UPDATE users SET user_role='admin' WHERE user_id= $the_user_id ";

$admin_users_query= mysqli_query($connection,$query);



header("Location:users.php");

} 


if (isset($_GET['subscribe'])) {
$the_user_id = $_GET['subscribe'];
$query ="UPDATE users SET user_role='subscribe' WHERE user_id= $the_user_id ";

$admin_users_query= mysqli_query($connection,$query);



header("Location:users.php");

} 











// unapprove comments




// if (isset($_GET['subscribe'])) {
// $the_comment_id = $_GET['subscribe'];
// $query ="UPDATE comments SET comment_status='unapproved' WHERE comment_id= $the_comment_id  ";

// $unapprove_comments_query= mysqli_query($connection,$query);



// header("Location:comments.php");

// } 










// delete posts



if (isset($_GET['delete'])) {
$the_user_id = $_GET['delete'];
$query ="DELETE FROM users WHERE user_id= {$the_user_id} ";

$delete_query= mysqli_query($connection,$query);



header("Location:users.php");

} 



// Edit posts 

}?>
   


      
    </tbody>
</table>	
