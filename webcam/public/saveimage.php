<?php

var_dump($_FILES);

$tempfile=$_FILES['image']['tmp_name'];

move_uploaded_file($tempfile,"../uploads/foto.png");