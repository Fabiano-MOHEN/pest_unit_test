<?php
include "./src/functions/strings/reverseString.php";

describe("reverseString", function() {

    it(" Input: 'abcd' → Expected output: 'dcba'", function() {
        $name = "abcd";

        $result = reverseString($name);

        expect($result)->toBe("dcba");

    });

});