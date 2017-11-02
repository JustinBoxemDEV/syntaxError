<?php
if(isset($_POST['send'])){  
    $name = $_POST['name'];
    $contactName = $_POST['contactName'];
    $contactMail = $_POST['contactMail'];
    $contactPhone = $_POST['contactPhone'];
    $comments = $_POST['comments'];
    $info = $_POST['info'];
    $personalContact = $_POST['personalContact'];
    $quantity = $_POST['quantity'];
    $alert = var_dump($_POST);
    $form = new Forms($name, $contactName, $contactMail, $comments, $info, $personalContact, $quantity);
    $form->sendSchool();
}

