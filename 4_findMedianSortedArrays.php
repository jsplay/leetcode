class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $arr_new = array_merge($nums1, $nums2);
        sort($arr_new, SORT_NUMERIC);
        $median = count($arr_new)/2;
        if (count($arr_new)%2 == 0) {
            $result = ($arr_new[$median-1] + $arr_new[$median]) / 2;
        } else {
            $result = $arr_new[$median-0.5];
        }
        return $result;
    }
}
