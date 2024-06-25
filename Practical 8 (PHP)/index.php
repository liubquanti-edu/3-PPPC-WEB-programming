<?php
class Person
{
    public $name, $age;
    function hello()
    {
        echo "Hello!<br>";
    }
}
$tom = new Person();
$tom->name = "Tom";
$tom->age = 36;
$personName = $tom->name;
echo "Ім'я користувача: ".$personName."<br>";
$tom->hello();
print_r($tom);
?>

<?php
class Person
{
    public $name = "Undefined";
    public $age = 18;

    function hello()
    {
        echo "Hello!<br>";
    }
}

$tom = new Person();
$tom->age = 36;

echo "Ім'я користувача: $tom->name.<br>";
echo "Вік користувача: $tom->age<br>";
?>

<?php
class Person
{
    public $name = "Undefined";
    public $age = 18;
    function displayInfo()
    {
        echo "Name: " . $this->name . "; Age: " . $this->age . "<br>";
    }
}
$tom = new Person();
$tom->name = "Tom";
$tom->displayInfo();
$bob = new Person();
$bob->name = "Bob";
$bob->age = 25;
$bob->displayInfo();
?>

<?php
class Person
{
    public $name, $age;

    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}

$tom = new Person();
$tom->name = "Tom";
$tom->age = 36;

$tomas = new Person();
$tomas->name = "Tom";
$tomas->age = 36;

if ($tom == $tomas) {
    echo "Змінні tom i tomas рівні<br>";
} else {
    echo "Змінні tom i tomas НЕ рівні<br>";
}

if ($tom === $tomas) {
    echo "Змінні tom i tomas еквівалентні<br>";
} else {
    echo "Змінні tom i tomas НЕ еквівалентні<br>";
}
?>