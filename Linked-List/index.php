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

<p> Now to Create with Multiple Nodes </p>
<?php

class Nod
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$first = new Nod(10);
$first->next = new Nod(20);
$first->next->next = new Nod(30);
echo $first->data.'<br>';
echo $first->next->data.'<br>';
echo $first->next->next->data.'<br>';
?>