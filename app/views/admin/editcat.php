
<h2>Edit Category</h2> <hr/>

<?php
    foreach ($catByid as $key => $value){

    
?>

<form action="<?php echo BASE_URL; ?>/AdminController/updateCat/<?php echo $value['id'] ?>" method="post">
    <table>
        <tr>
             <td>Category Name</td>
             <td><input type="text" name="name" value="<?php echo $value['name'] ?>" required="1"/></td>
        </tr>

        <tr>
             <td>Category Title</td>
             <td><input type="text" name="title" value="<?php echo $value['title'] ?>" required="1"/></td>
        </tr>

        <tr>
             <td> </td>
             <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>

<?php } ?>



