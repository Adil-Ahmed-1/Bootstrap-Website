<?php
class General {
    public static function site_header() {
        include 'header.php';
    }

    public static function site_navbar() {
        include 'navbar.php';
    }

    public static function site_category() {
        include 'Category.php';
    }

    public static function site_footer() {
        include 'footer.php';
    }

    public static function footer_scripts() {
        include 'footer-scripts.php';
    }
}
?>
