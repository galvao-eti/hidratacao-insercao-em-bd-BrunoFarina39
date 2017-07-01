<?php 
	namespace Traits;
	trait Hidratar{
		function hidratar($data){
			$attrClass = get_class_vars(__CLASS__);
			foreach ($attrClass as $key => $value) {
				if(isset($data[$key]))
					$this->{$key}=$data[$key];				
			}
		}
	}
?>