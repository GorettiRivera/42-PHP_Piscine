<?php
  require "includes/person.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir= "ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
      // create the object
      $person1 = new Person();
      $person1->setName("Maria");
      echo $person1->name;

      $person2 = new Person();
      $person2->setName("Rivera");
      echo $person2->name;
    ?>
</body>
</html>