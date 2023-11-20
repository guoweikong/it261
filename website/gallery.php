<?php 
include('config.php');
include('./includes/header.php');
?>



<div id="wrapper3">

    <h1 class="contact">Celebrities Who Live In Seattle</h1>
    <p>In the Pacific Northwest, there are few cities that have as much of a reputation as Seattle. Read on to discover the most famous celebrities who live in Seattle.</p>
    
<table>
<?php foreach($people as $name => $image)    :?>  
<tr>
<td><img src="images/people_gallery/<?php echo substr($image, 0, 4) ;?>.jpg" alt="<?php echo str_replace('_', ' ', $name)  ;?>"></td>
<td><b><?php echo str_replace('_', ' ', $name)  ;?></b></td>
<td><?php echo substr($image, 5)  ;?></td>
</tr>
<?php  endforeach  ; ?>
</table> 
    

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');