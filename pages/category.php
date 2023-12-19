<?php
if(isset($_GET['message'])){
    echo "<h3 style='color:orange; text-align:center;'>Category uploaded successfully</h3>";
}


?>
<form  action="data/add-category.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <p>Add Category.</p>
      <hr>
      <label for="product name">
        <b>Category Name</b>
      </label>
      <input type="text" style="" placeholder="Enter your username" name="category_name" required>
    <label for="category"><b>Category image</b></label>
    <input type="file" accept=".png, .jpg, .jpeg" name="category_image">

<center>
      	<button type="submit" class="cancelbtn" name="add-category">Add Category</button>
</center>
        
 
    </div>
  </form>