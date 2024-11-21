<?php
class phoneValidator
{
    public function validate($phone)
    {
        $pattern = "/(84|0[3|5|7|8|9])+([0-9]{8})\b/g";
        return preg_match($pattern, $phone);
    }
}

$validator = new phoneValidator();

$validator->validate("0986845301") ? "valid" : "invalid";
