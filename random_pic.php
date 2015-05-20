 <?php
$bilder = array(
  'images/trauben1.jpg',
  'images/trauben2.jpg',
);
echo '<img src="'.$bilder[array_rand($bilder)].'" alt="" />';
?> 