<?php
if ($_POST['username']=='alaa' and $_POST['password']=='776076'){
    header('location: index.html');
}
else{
    header('location: error.html');
}

?>