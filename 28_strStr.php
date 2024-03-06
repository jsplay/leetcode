class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $pos = strpos($haystack, $needle);
        if ($pos === false) {
            $pos = -1;
        }
        return $pos;
    }
}
