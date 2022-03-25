<?php

class Utils{
    public static function isAdmin()
    {
        if (!isset($_SESSION['admin'])) {
            header('Location: ' . base_url);
        } else {
            return true;
        }
    }
}

?>