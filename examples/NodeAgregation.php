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
    public function getCount()
    {
        $leftSubTreeNodesCount = 0;
        $rightSubTreeNodesCount = 0;
        
        if ($this->left !== null) {
            $leftSubTreeNodesCount = $this->left->getCount();
        }

        if ($this->right !== null) {
            $rightSubTreeNodesCount = $this->right->getCount();
        }

        return 1 + $leftSubTreeNodesCount + $rightSubTreeNodesCount;
    }

    public function getSum($acc = 0)
    {
        self::$acc = self::$acc + $this->key;

        if ($this->left !== null) {
            $this->left->getSum($acc);
        }

        if ($this->right !== null) {
            $this->right->getSum($acc);
        }

        return self::$acc;
    }

    public function toArray($acc = [])
    {
        self::$acc[] = $this->key;

        if ($this->left !== null) {
            $this->left->toArray($acc);
        }

        if ($this->right !== null) {
            $this->right->toArray($acc);
        }

        return self::$acc;
    }

    public function toString()
    {
        $arrayOfKeys = self::toArray();
        $result = implode(',', $arrayOfKeys);
        return "({$result})";
    }

    public function every($fn)
    {
        $arrayOfKeys = self::toArray();
        foreach ($arrayOfKeys as $key) {
            if (!$fn($key)) {
                return false;
            };
        }
        return true;
    }

    public function some($fn)
    {
        $arrayOfKeys = self::toArray();
        foreach ($arrayOfKeys as $key) {
            if ($fn($key)) {
                return true;
            };
        }
        return false;
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

// print_r("Nodes counted: {$tree->getCount()}");
// print_r($tree->getSum());
// print_r($tree->toArray());
// print_r($tree->toString());
// var_dump($tree->every(fn($key) => $key <= 23));
// var_dump($tree->some(fn($key) => $key = 22));
