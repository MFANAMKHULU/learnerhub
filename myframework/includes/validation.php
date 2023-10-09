<?php
class DataValidator {
    public static function validateName($name) {
        if (empty($name)) {
            return 'Name is required';
        }
        return null;
    }

    public static function validateEmail($email) {
        if (empty($email)) {
            return 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Invalid email format';
        }
        return null;
    }
}
?>