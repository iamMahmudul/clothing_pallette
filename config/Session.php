<?php

	class Session{
			
			/*
			Using static function we will not declare any object 
			of the class.We will access the function of this class 
			by scope resulotion operator (::)
			
			*/
			public static function init(){ 
				session_start();
			}
			
			
			/*Setting value in set method*/
			
			public static function set($key, $val){
				
				$_SESSION[$key]=$val;
				
			}
			
			/*Getting the setted value in get method*/
			
			public static function get($key){
				if(isset($_SESSION[$key])){
					
					return $_SESSION[$key];
				}
				else{
					
					return false;
				}
			}
				 
			
			/*For every page in the admin panel*/
			
			public static function checkSession(){
				
			self::init();	
			if( self :: get("login")== false){
				
				self :: destroy();
				header("Location: login.php");
				
				
			}
				
			}
			
			public static function destroy(){
				
				session_destroy();
				header("Location:login.php");
			}
			
			
			
			
			
		}
	

?>