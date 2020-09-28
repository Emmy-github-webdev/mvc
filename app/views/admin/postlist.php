
<h2>Article List</h2>

<?php 
if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
 foreach ($msg as $key => $value) {
 echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
 }
 
} 
?>


<table class="display" id="mytableId" data-page-length='5'>
    <thead>
        <tr>
            <th width="5%">S/N</th>
            <th width="20%">Title</th>
            <th width="35%">Content</th>
            <th width="15%">Category</th>
            <?php
                if (Session::get('level') == 1){
 
            ?>
            <th width="25%">Action</th>
            <?php } ?>
        </tr>
    </thead>

    <tbody>

        <?php

        $i = 0;
        foreach ($listPost as $key => $value){
            $i++;


        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value['title'] ?></td>
            <td><?php 
                $text = $value['content'];
                if (strlen($text) > 40) {
                $text = substr($text, 0, 40);
                echo $text;
                } 
            ?></td>

            <td><?php
                foreach ($catlist as $key => $cat){
                    if ($cat['id'] == $value['cat']){
                        echo $cat['name'] ;
                    }
                }
                
            ?></td>

            <?php
                if (Session::get('level') == 1){
 
            ?>

            <td><a href="<?php  echo BASE_URL; ?>/AdminController/editArticle/<?php  echo $value['id'] ?>">Edit</a> ||
            <a onclick="return confirm('Are you sure to delete?;')" href="<?php  echo BASE_URL; ?>/AdminController/deleteArticle/<?php  echo $value['id'] ?>">Delete</a>
            </td>
            
            <?php } ?>
            
        </tr>

        <?php   } ?>

    </tbody>

</table>


<script>
    $(document).ready( function () {
    $('#mytableId').DataTable();
    } );
</script>