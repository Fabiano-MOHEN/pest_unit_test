<?php
include "./src/functions/strings/convertToUppercase.php";

describe("convertToUppercase", function() {

    it("  Input: 'hello' → Expected output: 'HELLO'", function() {
        $name = "hello";

        $result = convertToUppercase($name);

        expect($result)->toBe("HELLO");

    });

});