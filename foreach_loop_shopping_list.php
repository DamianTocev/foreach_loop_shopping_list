<?php
$elements = ['apples', ' ', 'bananas', 'apples', 'oranges', 'bananas', 'grapes'];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}

$uniqueElement = array_unique($elements);

foreach ($uniqueElement as $element) {
    echo "<p>" . ucfirst($element) . "</p>";
}
?>