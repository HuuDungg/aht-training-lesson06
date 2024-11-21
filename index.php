<?php
class accountValidator
{
    public function validate($account)
    {
        $pattern = "^[_a-z0-9]{6,}$";
        return preg_match($pattern, $account);
    }
}

$validator = new accountValidator();



echo "Valid account:\n" . $validator->validate("validfsdfator") ? "valid" : "in valid";

echo
"\nInvalid account:\n" . $validator->validate("123456") ? "valid" : "in valid";
