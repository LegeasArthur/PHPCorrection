<?php
var_dump($_POST['saisie']);
var_dump(filter_var_array($_POST['saisie'], FILTER_SANITIZE_SPECIAL_CHARS));
var_dump(filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS));
