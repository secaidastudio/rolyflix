<?php
class FormSanitizer{


    public static function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        //$inputText = str_replace(" ","",$inputText); it does the same thing of the one below
        $inputText = trim($inputText);//remove blank spaces before an after a string
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText); //making first letter Capital
        return $inputText;
    }

    public static function sanitizeFormUserName($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        return $inputText;
    }

    public static function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    public static function sanitizeFormEmail($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        return $inputText;
    }
}


?>