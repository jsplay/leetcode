class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $area = 0;
        $new = 0;
        $head = 0;
        $tail = count($height)-1;
        do {
            if ($height[$head] < $height[$tail]) {
                $new = $height[$head] * ($tail-$head);
                $head++;
            } else {
                $new = $height[$tail] * ($tail-$head);
                $tail--;
            }
            if ($new > $area) {
                $area = $new;
            }
        } while ($head != $tail);
        return $area;
    }
}
