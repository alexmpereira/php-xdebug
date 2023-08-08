<?php 
class StringUtils {
    public static function concatenate($str1, $str2) {
        return $str1 . $str2;
    }
}

$account = new StringUtils();
echo $account->concatenate('Hello, ','Lucas');

?>