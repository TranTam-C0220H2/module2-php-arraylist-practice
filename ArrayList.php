<?php


class ArrayList
{
    protected $arrayList;

    public function __construct($arr = '')
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function addLast($object)
    {
        array_push($this->arrayList,$object);
        return $this->arrayList;
    }
    public function add($index, $object)
    {
       array_splice($this->arrayList,$index,0,$object);
       return $this->arrayList;
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }

    public function getArrayList(): array
    {
        return $this->arrayList;
    }

    public function remove($index)
    {
        array_splice($this->arrayList,$index,1,null);
        return $this->arrayList;
    }


}
