<?php
if(isset($_POST['send'])){  
    $name = $_POST['name'];
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $contactPhone = $_POST['contactPhone'];
    $comments = $_POST['comments'];
    $info = $_POST['info'];
    $personalContact = $_POST['personalContact'];
    $casis = $_POST['case'];
    $form = new Forms($name, $contactName, $contactEmail, $contactPhone, $comments, $info, $personalContact, $casis);
    $form->sendComp();
}

