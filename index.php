<?php
include 'ArrayList.php';
$listInteger = new ArrayList();
$listInteger->addLast(5);
$listInteger->addLast(5);
$listInteger->addLast(5);
$listInteger->addLast(5);
$listInteger->add(0,1);
$listInteger->add(1,2);
$listInteger->add(2,3);

echo $listInteger->get(2).'<br>';
echo implode('-',$listInteger->getArrayList()).'<br>';
$listInteger->remove(4);
echo implode('-',$listInteger->getArrayList()).'<br>';