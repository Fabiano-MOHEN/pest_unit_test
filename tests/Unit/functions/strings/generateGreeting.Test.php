<?php
include "./src/functions/strings/generateGreeting.php";

describe("generateGreeting", function() {

    it('   Input: ("John", "09:00") → Expected output: "Good morning, John!"', function() {
        
        $name = "John";
        $time = "09:00";

        $result = generateGreeting($name, $time);

        expect($result)->toBe("Good morning, John!");

    });

});