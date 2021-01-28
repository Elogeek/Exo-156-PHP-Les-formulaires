<?php
echo "Nom :".$_POST["username"]."<br>";

$name = strip_tags(trim($_POST['username']));
if(($name === "James") || ($name === "james")) {
    echo "Bond, James Bond";
}
else {
    echo "Bonjour $name";
}
