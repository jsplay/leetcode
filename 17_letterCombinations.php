class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        if (empty($digits)) {
            return [];
        }

        $phoneMap = [
            '2' => ['a', 'b', 'c'],
            '3' => ['d', 'e', 'f'],
            '4' => ['g', 'h', 'i'],
            '5' => ['j', 'k', 'l'],
            '6' => ['m', 'n', 'o'],
            '7' => ['p', 'q', 'r', 's'],
            '8' => ['t', 'u', 'v'],
            '9' => ['w', 'x', 'y', 'z'],
        ];

        $combinations = [''];
        for ($i = 0; $i < strlen($digits); $i++) {
            $newCombinations = [];
            foreach ($combinations as $combination) {
                foreach ($phoneMap[$digits[$i]] as $item) {
                    $newCombinations[] = $combination . $item;
                }
                $combinations = $newCombinations;
            }
        }

        return $combinations;
    }
}
