
<h3 class="text-center text-success">All Products</h3>
<table class="table table-bordered mt-5 bg-info">
<thead>
    <tr>
        <th class="bg-info">Product ID</th>
        <th class="bg-info">Product Title</th>
        <th class="bg-info">Product Image</th>
        <th class="bg-info">Product Price</th>
        <th class="bg-info">Total Sold</th>
        <th class="bg-info">Status</th>
        <th class="bg-info">Edit</th>
        <th class="bg-info">Delete</th>
    </tr>
</thead>
<tbody class="text-light">
    <?php
$get_products="Select * from `products`";
$result=mysqli_query($con,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $status=$row['status'];
    $number++;
    ?>
     <tr class='text-center'>
        <td class='bg-secondary'><?php echo $number;?></td>
         <td class='bg-secondary'><?php echo $product_title;?></td>
          <td class='bg-secondary'><img src='./product_images/<?php echo $product_image1;?>' class='product_img'></td>
           <td class='bg-secondary'><?php echo $product_price;?>/-</td>
            <td class='bg-secondary'>0</td>
             <td class='bg-secondary'><?php echo $status;?></td>
              <td class='bg-secondary'><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
               <td class='bg-secondary'><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
    </tr>
    <?php
}


?>
    <!-- <tr class="text-center">
        <td class="bg-secondary">1</td>
         <td class="bg-secondary">mango</td>
          <td class="bg-secondary">image</td>
           <td class="bg-secondary">444</td>
            <td class="bg-secondary">1</td>
             <td class="bg-secondary">true</td>
              <td class="bg-secondary"><a href="" class="text-light"><i class="fa-solid fa-pen-to-square"></i></a></td>
               <td class="bg-secondary"><a href="" class="text-light"><i class="fa-solid fa-trash"></i></a></td>
    </tr> -->
</tbody>
</table>