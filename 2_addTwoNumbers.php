/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $s = $l1->val + $l2->val;
        if($s > 9) {
            $s = $s % 10;
            $l1->next ? $l1->next->val++ : $l1->next = new ListNode($l1->next?->val + 1, $l1->next?->next);
        }
        return new ListNode($s, $l1->next == null && $l2->next == null ? null : $this->addTwoNumbers($l1->next, $l2->next));
    }
}
