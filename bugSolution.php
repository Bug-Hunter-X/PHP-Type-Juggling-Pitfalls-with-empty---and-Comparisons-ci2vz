//Corrected Version using strict comparison and explicit type checking
<?php
$userInput = $_GET['input'];

if (isset($userInput) && $userInput !== "" && $userInput !== "0") {
    //Process the input, making sure it's what you expect.
    if (is_numeric($userInput)){
        $number = (int)$userInput; 
        // Handle numeric input 
    } else {
        $string = (string)$userInput;
        //handle String input
    }
} else {
    echo "Invalid input";
}
?> 