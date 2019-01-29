<?php 

class Form{
    private  $data;
    public $suround = 'p';

    public function __construct($data = array()){

        $this->data = $data;

    }

    public function getValue($index){
        return $this->data[$index];
    }

    public function create($method){
        
       return '<form action="index.php" method="'.$this->getValue($method).'">';
    }

    public function text($value, $name){
        
        $this->name = $name;
        return '<input type="text" name="'.$this->getValue($value).'" value="'.$name.'">';
    }
    public function select($option){
        echo '<select name="select">';
        foreach ($this->getValue($option) as $key => $value) {
            echo '<option name="'.$value.'" value="'.$value.'">'.$value.'</option>';
        }
        echo '</select>';
    }
    public function textArea($coment){
        return '<textarea name="'.$this->getValue($coment).'"></textarea>';
    }
    public function radio($label){
        echo '<div class="contentRadio">';
        foreach ($this->getValue($label) as $key => $value) {
            echo '<input type="radio" name="'.$key.'" value="'.$value.'">
            <label>'.$value.'</label>';
        }
        echo '</div>';
    }
    public function checkbox($label){
        echo '<div class="contentcheckbox">';
        foreach ($this->getValue($label) as $key => $value) {
            echo '<input type="checkbox" name="'.$key.'" value="'.$value.'">
            <label>'.$value.'</label>';
        }
        echo '</div>';
    }
    public function submit($name){
        $this->name = $name;

        return '<input type="submit" name="'.$name.'">';

    }

    public function end(){
        return '</form>';
    }
}

class Validator{

    public function __construct($data = array()){

        $this->data = $data;

    }

    public function getValue($index){
        return $this->data[$index];
    }
    
    function getName($name){

        $this->name = $name;


    }

}

?>