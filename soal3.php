<?php 
$programmer = ["pro,", "gram,", "mer"];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>Programmer</h1>
<?php foreach($programmer as $prgt) :?>
 <ul>
 		<?php echo $prgt[0]; ?>
 		<?php echo $prgt[1]; ?>
 		<?php echo $prgt[2]; ?>
 </ul>
<?php endforeach; ?>
 </body>
 </html>