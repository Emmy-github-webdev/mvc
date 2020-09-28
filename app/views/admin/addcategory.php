
<h2>Add Category</h2> <hr/>



<form action="<?php echo BASE_URL; ?>/AdminController/insertCategory" method="post">
    <table>
        <tr>
             <td>Category Name</td>
             <td><input type="text" name="name" placeholder="Enter category name" required="1"/></td>
        </tr>

        <tr>
             <td>Category Title</td>
             <td><input type="text" name="title" placeholder="Enter category title"required="1"/></td>
        </tr>

        <tr>
             <td> </td>
             <td><input type="submit" name="submit" value="Save"></td>
        </tr>
    </table>
</form>





