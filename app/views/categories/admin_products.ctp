<h2><?php echo $category['Category']['name']; ?></h2>
<table>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Move</th>
      <th>Delete</th>
   </tr>
<?php $count = 1; ?>
<?php foreach($products as $product): ?>
   <tr<?php if($count % 2 == 0) echo ' class = "alt" '; ?>>
         <td><?php echo $product['Product']['id']; ?></td>
         <td><?php echo $url->admin_prod_link($product['Product'], '', false); ?></td>
         <td>$<?php echo number_format($product['Product']['price'], 2); ?></td>
         <td>In Stock</td>
         <td><?php echo $url->admin_prod_link($product['Product'], '', false, false); ?></td>
         <td>Move</td>
         <td>Delete</td>
   </tr>
   <?php $count++; ?>
<?php endforeach; ?>
</table>
<?php echo $html->link('New Product', '/admin/products/add/' . implode('/', $this->params['bread'])); ?>