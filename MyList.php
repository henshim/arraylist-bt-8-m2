<?php


class MyList
{
    public $size;
    public $element;

    public function __construct()
    {
        $this->element = array();
    }

    public function insert($index, $obj)
    {
        if (!$this->isEmpty() && $index < $this->size())
            array_splice($this->element, $index, 0, $obj);
        else
            die('không tìm được giá trị index trong mảng');

    }

    public function add($obj)
    {
        array_push($this->element, $obj);
    }

    public function remove($index)
    {
        if (!$this->isEmpty() && $index < $this->size())
            array_splice($this->element, $index, 1);
    }

    public function get($index)
    {
        if ($index < $this->size())
            return $this->element[$index];
        else
            die('không tồn tại index trong mảng ');
    }

    public function clear()
    {
        $this->element = array();
    }

    public function addAll($arr)
    {
        $this->element = array_merge($this->element, $arr);
    }

    public function indexOf($obj)
    {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($obj === $this->element[$i])
                    $arr[] = $i;
            }
        }
        return $arr;
    }

    public function isEmpty()
    {
        if (count($this->element) == 0)
            return true;
        else
            return false;
    }

    public function sort()
    {
        if (!$this->isEmpty()) {
            sort($this->element);
        }
    }

    public function size()
    {
        return count($this->element);
    }
}

$list=new MyList();
//echo $list->isEmpty();
$list->add('start');
$list->add(1);
$list->add(2);
$list->add(3);
$list->add(-5);
$list->add('end');
echo '<pre>';

print_r($list->element);
print_r($list->get(3));
echo '<pre>';

$list->insert(2,-4);
print_r($list->element);

$list->remove(1);
print_r($list->element);
print_r($list->indexOf(-5));

$list->addAll([7,8,9]);
print_r($list->element);

$list->sort();
print_r($list->element);

echo $list->size();