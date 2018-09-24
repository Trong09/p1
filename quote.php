

<?php
$quotes = ['"Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship." -  Buddha', '"An investment in knowledge pays the best interest." -  Benjamin Franklin', '"Life is like riding a bicycle. To keep your balance you must keep moving." -  Albert Einstein', '"Because of your smile, you make life more beautiful." -  Thich Nhat Hanh'];
echo $quote = $quotes[mt_rand(0, count($quotes) - 1)];
?>

