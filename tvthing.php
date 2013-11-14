<?php

define("SET", "settings.json");

$settings = file_get_contents(SET);
$settings = (array) json_decode($settings);

if (isset($_GET['action']))
    switch ($_GET['action']) {
        case 'settings':
            file_put_contents(SET, json_encode($_POST + $settings));
            break;

        case 'show-settings':
            echo "<pre>";
            print_r($settings);

        default:

            break;
    }