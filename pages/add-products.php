<?php
if(isset($_GET['message'])){
    echo "<h3 style='color:orange; text-align:center;'>product uploaded successfully</h3>";
}
?>


<form  action="data/add_product.php" method ="POST" enctype="multipart/form-data">
    <div class="container">
      <p>Add products.</p>
      <hr>
      <label for="product name"><b>Product Name</b></label>
      <input type="text" style="" placeholder="Enter your username" name="product_name" required>
      <div class="col-6">
      <label for="category"><b>Product category</b></label>
     <select name="product_category">
         <option> -- select option --</option>
        <?php
        include('data/connect.php');

        $sql = "SELECT category_name,category_id FROM category";
        $t = $connect->prepare($sql);
        $t ->execute();
        $t ->bind_result($catname,$catid);
        while ($t ->fetch()):
            ?>
            <option value="<?=$catname?>"><?=$catname?></option>
            <?php
            endwhile;
        ?>
     </select>
 </div>

<div class="col-6">
 <label for="category"><b>Product Brand</b></label>
     <select name="product_brand">
         <option value="option"> -- select option --</option>
         <?php 
            $sql = "SELECT brand_name,brand_id FROM brand";
            $b = $connect->prepare($sql);
            $b->execute();
            $b->bind_result($bname,$bid);
            while($b->fetch()):
                ?>
                <option value="<?=$bname?>"><?=$bname?></option>
                <?php
                endwhile;
                ?>
     </select>
</div>

<div class="col-6">
      <label for="category"><b>Product Amount</b></label>
    <input type="number" style="" placeholder="Enter product amount" name="product_amount" required>
</div>

<div class="col-6">
<label for="category"><b>Product Discount Amount</b></label>
    <input type="number" style="" placeholder="Enter product discount amount" name="product_discount" required>
</div>

<div class="col-6">
    <label for="category"><b>Product cover image</b></label>
    <input type="file" accept=".png, .jpg, .jpeg" name="product_image">
</div>

<div class="col-6">
    <label for="category"><b>Other product images</b></label>
    <input type="file" accept=".png, .jpg, .jpeg" name="other_image" multiple>
</div>


   <label for="psw"><b>Product description</b></label>
      <textarea style="background-color:#ddd;" name="product_description" required></textarea>


 <label for="psw"><b>Product specification</b></label>
      <textarea style="background-color:#ddd;"  name="product_specification" required></textarea>


<center>
      	<button type="submit" class="cancelbtn" name="add_product">Add products</button></center>
        
 
    </div>
  </form>