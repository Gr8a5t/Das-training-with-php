<h1>Linked List</h1>
<p>
  A linked list is a data structure where each node contains data and a
  reference (or pointer) to the next node in the sequence.
</p>
<p> Frist learning How to create a node </p>
<?php

class Node
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
$first = new Node(10);
echo $first->data;
?>