<?php
function loadView($viewName, $data = []) {
    extract($data);
    require_once $viewName . '.php';
}
?>