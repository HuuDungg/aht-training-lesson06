<?php
class EmailValidator
{
    public function validate($email)
    {
        $pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$/";
        return preg_match($pattern, $email);
    }
}

$validator = new EmailValidator();

$validEmails = ["a@gmail.com", "ab@yahoo.com", "abc@hotmail.com"];
$invalidEmails = ["@gmail.com", "ab@gmail.", "@#abc@gmail.com"];

echo "Valid emails:\n";
foreach ($validEmails as $email) {
    echo $email . ": " . ($validator->validate($email) ? "Valid" : "Invalid") . "\n";
}

echo "\nInvalid emails:\n";
foreach ($invalidEmails as $email) {
    echo $email . ": " . ($validator->validate($email) ? "Valid" : "Invalid") . "\n";
}
