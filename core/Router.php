<?php

namespace Core;

class Router
{
   public int $number = 24;
   public string $str = 'twenty four';
   public bool $boo = true;

   public function run (){
       foreach ($this as $key => $value){
           var_export($key);
           echo ' = ';
           var_export($value);
           echo '<br>';
       }
   }
}

