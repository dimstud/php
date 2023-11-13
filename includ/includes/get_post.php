<!-- <?php 
    $success = false;
    $contact_form = $_POST['contact_form'] ?? '';

    if ($contact_form == 'submited') {
        $name = strip_tags(trim($_POST['name']));
        $phone = strip_tags(trim($_POST['phone']));
        $text = strip_tags(trim($_POST['text']));
        $yes = strip_tags(trim($_POST['yes'] ?? ''));

        $body = "{$name} \n {$phone} \n {$text} \n {$yes}";

        if ($name == '' || $phone == '' || $text == '') {
            $errors = "Заполните необходимые поля";
        } else if (mb_strlen($name, 'utf-8') > 20) {
            $errors = "Имя не может быть длинее 20 символов";
        } else if (mb_strlen($text, 'utf-8') < 5) {
            $errors = "Ваш текс меньше 5 символов";
        } else {
            mail('dimichageev@gamil.com', 'Contact message', $body);
            $success = true;
        }

    }
?>

<h1>Contact Form</h1>
<style>
    label{
            width: 150px;
            display: block;
        }
</style>
<?php
    if ($success) {
        echo "Форма отправлена";
    } else {
        if(isset($errors)) echo $errors;
?>
    <form method="POST" action="">
        <p><label for="name">Name:</label><input type="text" id="name" value="<?php if(isset($name)) echo $name; ?>" name="name"></p>
        <p><label for="phone">Phone:</label><input type="text" id="phone" value="<?php if(isset($phone)) echo $phone; ?>" name="phone"></p>
        <p><label for="text">Text:</label><textarea id="text" name="text"><?php if(isset($text)) echo $text; ?></textarea></p>
        <p><label for="yes">Yes or No</label><input type="checkbox" id="yes" <?php if(isset($yes) && $yes == 'on') echo "checked"; ?> name="yes"></p>
        <button name="contact_form" value="submited">Send Contact</button>
    </form>
<?php } ?> -->
