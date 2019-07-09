<?php


class Throw2 {


  public function ThrowDart(){

      return rand(0, 60);
  }
}


for ($i = 0; $i <=2; $i++){

  $throws = new Throw2();
  echo $throws->ThrowDart();
  echo '<br>';
}
