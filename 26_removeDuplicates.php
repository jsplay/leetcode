class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k=$i=0;
        do {
            if ($nums[$k] !== $nums[$i]) {
                $k++;
                $nums[$k] = $nums[$i];
            }
            $i++;
        } while ($i<=count($nums));
        return $k;
    }
}
