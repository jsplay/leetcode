class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if (strlen($s) == 1) {
            return $s;
        }
        for ($j=strlen($s); $j>=0; $j--) {
            for ($i=0; $i<=strlen($s); $i++) {
                $check = substr($s, $i, $j);
                if ($j != strlen($check)) {
                    break;
                }
                if ($check === strrev($check)) {
                    return $check;
                }
            }
        }
    }
}
