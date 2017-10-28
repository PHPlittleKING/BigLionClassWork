<?php 
/**
*	杨嘉峰-面向对象之多态
*	2017年9月1日20:47:18
**/
header("content-type:text/html;charset=utf-8");
//工作de人
class People
{
	public function work()
	{
		echo '具体在子类中出现';
	}
}

class Php extends People
{
	public function work()
	{
		echo '改需求...';
	}
}

class Teacher extends People
{
	public function work()
	{
		echo '抓成才...';
	}
}

function ecWork($obj)
{
	if($obj instanceof People)
	{
		$obj->work();
	}
}

// ecWork(new Php);







 ?>