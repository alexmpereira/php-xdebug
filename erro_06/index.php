<?php 
class StringUtils {
    public static function concatenate($str1, $str2) {
        return $str1 . $str2;
    }
}

echo StringUtils::concatenate("Hello", "world"); // Output: Warning: Missing argument 2 for StringUtils::concatenate()
// add uma "," e uma continuação "world"
?>