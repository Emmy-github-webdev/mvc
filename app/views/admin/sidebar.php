<aside class="adminLeft">
  <div class="widget">
    <h3>Site Option</h3>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>/AdminController">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>/LoginController/logout">Logout</a></li>
      </ul>
  </div>

  <?php
    if (Session::get('level') != 2 || Session::get('level') != 3){
  
  ?>
  <div class="widget">
    <h3>Manage Users</h3>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>/UserController/adduser">Add New User</a></li>
        <li><a href="<?php echo BASE_URL; ?>/UserController/listuser">Users</a></li>
      </ul>
  </div>
  <?php } ?>


  <?php
    if (Session::get('level') != 3){
  
  ?>
  <div class="widget">
    <h3>Manage Category</h3>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>/AdminController/addCategory">Add New Category</a></li>
        <li><a href="<?php echo BASE_URL; ?>/AdminController/categoryList">Categories</a></li>
      </ul>
  </div>
  <?php } ?>


  <div class="widget">
    <h3>Manage Post</h3>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>/AdminController/addArticle">Add New Article</a></li>
        <li><a href="<?php echo BASE_URL; ?>/AdminController/articleList">Articles</a></li>
      </ul>
  </div>
</aside>

<article class="adminRight">