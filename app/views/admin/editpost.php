
<h2>Update Article</h2> <hr/>

<?php
    foreach ($Postbyid as $key => $value){

?>

<form action="<?php echo BASE_URL; ?>/AdminController/updatePost/<?php echo $value['id']; ?>" method="post">
    <table>
        <tr>
             <td>Article Title</td>
             <td><input type="text" name="title"  required="1" value="<?php echo $value['title']; ?>"/></td>
        </tr>

        <tr>
             <td>Article Content</td>
             <td>
                    
            <textarea name="content"  required="1" >value="<?php echo $value['content']; ?>"</textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( 'content' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

             </td>
        </tr>

        <tr>
             <td>Category</td>
             <td>
                <select name="cat" class="cat">
                    <option>Select Category</option>
                    <?php
                        foreach ($catlist as $key => $cat){

                    ?>
                    <option
                    <?php
                    if ($value['cat'] == $cat['id']) { ?>
                        selected = "selected"
                    <?php  } ?>
                     value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?>
                     </option>
                    <?php  } ?>
                </select>
             </td>
        </tr>

        <tr>
             <td> </td>
             <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>

<?php } ?>




