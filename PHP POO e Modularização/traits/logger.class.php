<?php
trait Logger{
    public function log($mensagem){
        echo '<br>[LOG]: '. $mensagem . '<br>'; 
        echo 'Datetime: '. date('Y-m') . '<br>';
    } 
}