<?php

class User {
      public $name = 'Bob';
      public $age = 21;

      public function __construct()
      {
          $this->name= $name ;
          $this->age = $age ;

      }
  
      public function greet($to)
      {
          return 'こんにちは' . $to . "さん\n";
      }
  
      public function selfIntroduction()
      {
         return '私の名前は' . $this->name . "です\n";
         return '私の名前は' . $this->name . "です\n" .
                 '年齢は' . $this->age . "歳です\n";
      }
    }
