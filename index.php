<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ДЗ Написать класс Printer.
Класс содержит поля: название тега, текст, цвет.
Написать в классе метод write, который выведет
на экран такой html-элемент.
Пример работы:
$printer = new Printer('p', 'test text', 'red');
$printer->write(); -->

<?php

class Printer {
    public function __construct(public $tag, public $text, public $color) {
        $this->tag = $tag;
        $this->text = $text;
        $this->color = $color;
    }
    public function write() {
        echo "<" . $this->tag . " style=\"color: " . $this->color . ";\">" . $this->text . "<" . $this->tag . ">";
    }
}

$printer = new Printer('h1', 'test text', 'red');
$printer->write();

?>

</body>
</html>