<?php

$_SESSION['errors'] = [];

function validateNotEmpty($value, string $key, string $message): void
{
    if (empty($value)) {
        $_SESSION['errors'][$key] = $message;
    }
}

function hasErrors(string $key = null): bool
{
    if(empty($key)){
        return !empty($_SESSION['errors']);
    }

    return !empty($_SESSION['errors'][$key]);
}
