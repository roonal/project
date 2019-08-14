<!-- 
 
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<body>
   
 
    <h4>Display Records From Sell Database</h4>
    <table>
     <tr>
      <td><strong>Product Id</strong></td>
      <td><strong>Product name</strong></td>
       <td><strong>Product description</strong></td>
        <td><strong>Product price</strong></td>
         <td><strong>Product negoitable</strong></td>
          <td><strong>Product delivery</strong></td>
           <td><strong>Product delivery charge</strong></td>
            <td><strong>Product condtion</strong></td>
             <td><strong>seller name</strong></td>
              <td><strong>seller contact</strong></td>
              <td><strong>seller email</strong></td>
               <td><strong>Product image</strong></td>
    </tr>

     <?php 
     foreach($data as $post){?> dollar data is the varible name mentioned in controller index function, post is 
     <tr>
         <td><?php echo $post->product_id;?></td>
         <td><?php echo $post->product_name;?></td>
         <td><?php echo $post->product_desc;?></td>
         <td><?php echo $post->product_price;?></td>
         <td><?php echo $post->product_negotiable;?></td>
         <td><?php echo $post->product_delivery;?></td>
         <td><?php echo $post->product_delivery_charge;?></td>
         <td><?php echo $post->product_condition;?></td>
         <td><?php echo $post->product_seller_name;?></td>
         <td><?php echo $post->product_seller_contact;?></td>
         <td><?php echo $post->product_seller_email;?></td>
         <td><?php echo $post->product_image;?></td>
      </tr>     
     <?php }?>  
   </table>
 
 
  </body> -->