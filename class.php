<?php #endregion

class HTML{

    public function __construct($data = array()){
        $this->data = $data;
    }

    public function getValue($index){
        return $this->data[$index];
    }

    public function CSS($css){

        return '<link rel="stylesheet" href="'.$this->getValue($css).'">';
    }
    public function META(){
        return '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
    }
    public function image($image){
        return '<img src="'.$this->getValue($image).'">';
    }
    public function lien($lien){
        return '<a href="'.$this->getValue($lien).'">test</a>';
    }
    public function script($js){

        return '<script src="'.$this->getValue($js).'">';
    }
}

?>
