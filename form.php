<?php
require 'form1.php';
require 'text.php';
$form = new Form($_POST);

var_dump(Text::withZero(10));

?>
<form action="#" method="post">

    <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    ?>
</form>

<?php
$form = new Form();
?>
<form action="#" method="post">

    <?php
    echo $form->input('aze');
    echo $form->input('aze');
    echo $form->submit();
    ?>
</form>