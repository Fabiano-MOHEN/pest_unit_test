<?php
include "./src/functions/strings/getWelcomeMessage.php";

describe("getWelcomeMessage", function() {

    it(" Input: 'john' → Expected output: 'Welcome, John!'", function() {
        $name = "John";

        $result = getWelcomeMessage($name);

        expect($result)->toBe("Welcome, John!");

    });

});