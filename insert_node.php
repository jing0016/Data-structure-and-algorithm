<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/27
 * Time: 8:22 PM
 */

class SinglyLinkedListNode {
    public $data;
    public $next;

    public function __construct($node_data)
    {
        $this->data = $node_data;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertNode($node_data)
    {
        $node = new SinglyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }

        $this->tail = $node;
    }
}

function printSinglyLinkedList($node, $sep, $fptr)
{
    while (!is_null($node)) {
        fwrite($fptr, $node->data);

        $node = $node->next;

        if (!is_null($node)) {
            fwrite($fptr, $sep);
        }
    }
}

function insertNodeAtPosition($llist, $data, $position) {
    $node = new SinglyLinkedListNode($data);

    $count = 1;
    $pointer = $llist;
    while($count<$position){
        $pointer = $pointer->next;
        $count++;
    }

    $node->next = $pointer->next;
    $pointer = $node;
    return $llist;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$llist = new SinglyLinkedList();

fscanf($stdin, "%d\n", $llist_count);

for ($i = 0; $i < $llist_count; $i++) {
    fscanf($stdin, "%d\n", $llist_item);
    $llist->insertNode($llist_item);
}

fscanf($stdin, "%d\n", $data);

fscanf($stdin, "%d\n", $position);

$llist_head = insertNodeAtPosition($llist->head, $data, $position);

printSinglyLinkedList($llist_head, " ", $fptr);
fwrite($fptr, "\n");

fclose($stdin);
fclose($fptr);
