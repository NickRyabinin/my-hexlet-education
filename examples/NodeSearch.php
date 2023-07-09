<?php

namespace App;

class Node
{
    private $key;
    private $left;
    private $right;
    private static $acc;

    public function __construct($key = null, $left = null, $right = null)
    {
        $this->key = $key;
        $this->left = $left;
        $this->right = $right;
    }

    // BEGIN (write your solution here)
    public function search($key)
    {
        if ($this->key === $key) {
            return new self($this->key, $this->left, $this->right);
        }

        if ($this->key > $key && $this->left !== null) {
            return $this->left->search($key);
        }

        if ($this->key < $key && $this->right !== null) {
            return $this->right->search($key);
        }

        return null;
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

$emptyTree = new Node();

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

// print_r("Nodes counted: {$tree->getCount()}");
// print_r($tree->getSum());
// print_r($tree->toArray());
// print_r($tree->toString());
// var_dump($tree->every(fn($key) => $key <= 23));
// var_dump($tree->some(fn($key) => $key = 22));
// $node = $tree->search(7);
// print_r($tree->search(7)->getKey()); 
// var_dump($emptyTree->search(5));
// var_dump($tree->search(6)->getRight());
// var_dump($node = $tree->search(6));
// $node->getKey(); // 6
// $node->getLeft()->getKey(); // 5
var_dump($tree->search(6)->getRight()->getKey());
