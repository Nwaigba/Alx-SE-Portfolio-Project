<?php
if(isset($_GET['message'])){
    echo "<h3 style='color:orange; text-align:center;'>brand uploaded successfully</h3>";
}


?><form  action="data/add-brand.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <p>Add Brands.</p>
      <hr>
      <label for="product name"><b>Brand Name</b></label>
      <input type="text" style="" placeholder="Enter your username" name="brand_name" required>
    <label for="brand"><b>Brand image</b></label>
    <input type="file" accept=".png, .jpg, .jpeg" name="brand_image">

<center>
      	<button type="submit" class="cancelbtn" name="add-brand">Add Brands</button></center>
        
 
    </div>
  </form>