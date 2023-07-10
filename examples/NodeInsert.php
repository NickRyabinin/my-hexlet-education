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
    public function insert($key)
    {
        if ($this->key === null) {
            $this->key = $key;
            return;
        }

        if ($this->key > $key) {
            if ($this->left !== null) {
                $this->left->insert($key);
            } else {
                $this->left = new self($key);
                return;
            }
        }

        if ($this->key < $key) {
            if ($this->right !== null) {
                $this->right->insert($key);
            } else {
                $this->right = new self($key);
                return;
            }
        }
        
    }

    public function getKey()
    {
        return is_null($this->key) ? null : $this->key;
    }

    public function getLeft()
    {
        return is_null($this->left) ? null : $this->left;
    }

    public function getRight()
    {
        return is_null($this->right) ? null : $this->right;
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

// var_dump($node = $tree->search(6));
// $node->getKey(); // 6
// $node->getLeft()->getKey(); // 5
// var_dump($tree->search(6)->getRight()->getKey());
$newTree = new Node();
$newTree->insert(9);
$newTree->insert(17);
$newTree->insert(4);
$newTree->insert(3);
$newTree->insert(6);
$tree->insert(21);
var_dump($tree);
