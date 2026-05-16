<h1>Doubly Linked List</h1>
<p>
  A doubly linked list is a data structure where each node contains data and
  two references (or pointers): one to the next node and one to the previous node in the sequence.</P>

  <?php
class Node
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}
  $first = new Node(10);
  $second = new Node(20);
  $third = new Node(30);

  // FORWARD LINKS
  $first->next = $second;
  $second->next = $third;

  // BACKWARD LINKS
  $second->prev = $first;
  $third->prev = $second;

  echo $first->next->data.'<br>';
  echo $third->prev->data;
  ?>