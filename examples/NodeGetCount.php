<?php

namespace App;

class Node
{
    private $key;
    private $left;
    private $right;

    public function __construct($key = null, $left = null, $right = null)
    {
        $this->key = $key;
        $this->left = $left;
        $this->right = $right;
    }

    // BEGIN (write your solution here)
    public function getCount()
    {
        $leftSubTreeNodesCount = 0;
        $rightSubTreeNodesCount = 0;
        
        print_r(" Key: {$this->key}\n");
        if ($this->left !== null) {
            $leftSubTreeNodesCount = $this->left->getCount();
        }

        if ($this->right !== null) {
            $rightSubTreeNodesCount = $this->right->getCount();
        }

        return 1 + $leftSubTreeNodesCount + $rightSubTreeNodesCount;
    }

}
    // END

$tree = new Node(
    9,
    new Node(
        4,
        new Node(3),
        new Node(
            6,
            new Node(5),
            new Node(7)
        )
    ),
    new Node(
        17,
        null,
        new Node(
            22,
            null,
            new Node(23)
        )
    )
);

print_r("Nodes counted: {$tree->getCount()}");
