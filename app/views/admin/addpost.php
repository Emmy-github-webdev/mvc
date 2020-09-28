
<h2>Add Article</h2> <hr/>



<form action="<?php echo BASE_URL; ?>/AdminController/insertPost" method="post">
    <table>
        <tr>
             <td>Article Title</td>
             <td><input type="text" name="title"  required="1"/></td>
        </tr>

        <tr>
             <td>Article Content</td>
             <td>

             <textarea name="content"></textarea>
            <script>
                
                CKEDITOR.replace( 'content' );
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
                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                    <?php  } ?>
                </select>
             </td>
        </tr>

        <tr>
             <td> </td>
             <td><input type="submit" name="submit" value="Save"></td>
        </tr>
    </table>
</form>





