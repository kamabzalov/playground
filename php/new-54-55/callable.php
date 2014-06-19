<?php	

function some_function(){
	echo "string";
}

class Some
{
	public static function methodStatic(){}
	public function method(){}
}

$anon = ['Some', 'methodStatic'];

//var_dump(is_callable($anon));

//var_dump($anon);

function call(Callable $param){
	//call_user_func($param);
}

call('strpos');
call('some_function');
call(function(){});
call('Some::methodStatic');
call(['Some', 'methodStatic']);
call([new Some, 'method']);
call($anon);