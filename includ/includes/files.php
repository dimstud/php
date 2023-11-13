<?php
    // print_r($_FILES);

    if (!empty($_FILES)) {
        move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name']);
    }
?>

<form method="POST" action="" enctype="multipart/form-data">
    <p><input type="text" name="title"></p>
    <p><input type="file" name="file"></p>
    <button>Submit</button>
</form>