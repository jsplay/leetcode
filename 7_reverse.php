class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x<0) {
            $y = strval(strrev($x)) * (-1);
        } elseif ($x>=0) {
            $y = strval(strrev($x));
        }
        if (abs($y) > 2147483647) {
            $y = 0;
        }
        return intval($y);
    }
}
