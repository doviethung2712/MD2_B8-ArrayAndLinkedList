<?php

class MyList
{

    public $size;
    public $elements;

    public function __construct($size)
    {
        $this->size = $size;
        $this->elements = [];
    }

    public function insert($index, $obj)
    {
        if (array_key_exists($index,$this->elements)) {
            $this->elements[$index] = $obj;
            return $this->elements;
        }
    }

    public function add($obj)
    {
           return $this->elements[]= $obj;
    }

    public function remove($index)
    {
        if (array_key_exists($index , $this->elements)) {
           unset($this->elements[$index]);
           return $this->elements;
        }

    }

    public function get($index)
    {
        if (array_key_exists($index,$this->elements)){
            return $index;
        } else{
            echo 'Vị trí này không tồn tại';
        }
    }

    public function clear()
    {
        $this->elements = [];
    }

    public function addAll($arr)
    {
        return array_merge($this->elements,$arr);
    }

    public function indexOf($obj)
    {
        if (array_key_exists($obj,$this->elements)){
            return $this->elements[$obj];
        } else{
            echo 'Không tồn tại vị trí: '. $obj;
        }

    }

    public function isEmpty()
    {
       return count($this->elements) == 0;
    }

    public function sort()
    {
        sort($this->elements);
        return $this->elements;
    }

    public function reset()
    {
        reset($this->elements);
        return $this->elements;
    }

    public function size()
    {
        return count($this->elements);
    }

}