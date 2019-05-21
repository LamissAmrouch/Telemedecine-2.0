<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form {
    protected $tag = 'div class="form-group"';
    public function input($name,$label,$att='',$placeholder = ''){
        $inp = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" placeholder="'.$placeholder.'" class="col-xs-10 col-sm-5" type="text"> </div>';
		$lab = $this->label($label);
		return $this->surond($lab.$inp);
    }
    public function text($name,$label,$content,$att='',$placeholder = ''){
        $inp = '<div class="col-sm-9"> <textarea '.$att.' name="'.$name.'" placeholder="'.$placeholder.'" class="col-xs-10 col-sm-5" type="text">'.$content.' </textarea> </div>';
        $lab = $this->label($label);
        return $this->surond($lab.$inp);
    }
    public function label($lab){
       return ' <label class="col-sm-3 control-label no-padding-right" for="form-field-1">'.$lab.' </label>';
    }
    public function time($name,$lab,$att=''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="time"> </div>';
        return $this->surond($lab.$date);
    }
    public function number($name,$lab,$att=''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="number"> </div>';
        return $this->surond($lab.$date);
    }
    public function pass($name,$lab,$att=''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="password"> </div>';
        return $this->surond($lab.$date);
    }
    public function date($name,$lab,$att=''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="date"> </div>';
        return $this->surond($lab.$date);
    }
    public function dateT($name,$lab,$att=''){
        $lab = $this->label($lab);
        $date = ' <input '.$att.' name="'.$name.'" class="col-xs-12 col-sm-12"  type="date">';
        return $date;
    }

    public function email($name,$lab,$att =''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="email"> </div>';
        return $this->surond($lab.$date);
    }

    public function tel($name,$lab,$att = ''){
        $lab = $this->label($lab);
        $date = '<div class="col-sm-9"> <input '.$att.' name="'.$name.'" class="col-xs-10 col-sm-5"  type="tel"> </div>';
        return $this->surond($lab.$date);
    }



    public function surond($html){
        return '<div class="form-group">'.$html.'</div>';
    }
    public function submit($name = 'Envoyer'){
        return $this->surond( '<button type="submit" class="btn btn-success btn-lg"class="btn btn-success btn-lg"  >'.$name.' </button>');
    }
    public function password($label,$name){

        return $this->surond('<label>'.$label.'</label> <input type="password" name="'. $name .'" placeholder = "'.parent::getvalue($name) .'" class="form-control form-control-sm">');

    }
    public function TextArea($label,$name){
        return $this->surond('<label>'.$label.'</label> <textarea name="'. $name .'" class="form-control form-control-lg">'.parent::getvalue($name) .'</textarea>');

    }
    public function Select($label,$name,$options,$attribut = '',$att='Discription'){
        $label = '<label>'.$label;
        $html ='<select class=" col-12 form form-control input-sm" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $atribut ='';/*
            if($k == parent::getvalue($name.'_id')){
                $atribut = ' selected';
            }*/
            $content = $v->{$att};
            $html.='<option value="'.$content.'"'.$atribut.'>'.$content.'</option>';

        endforeach;
        $html.='</select>'.'</label>';
        return $label.$html ;
    }
    public function SelectForm($label,$name,$options,$attribut = '',$att='Discription'){
        $label = $this->label($label);
        $html ='<div class="col-sm-9"> <select class="col-xs-10 col-sm-5" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $atribut ='';/*
            if($k == parent::getvalue($name.'_id')){
                $atribut = ' selected';
            }*/
            $content = $v->{$att};
            $html.='<option value="'.$v->id.'"'.$atribut.'>'.$content.'</option>';

        endforeach;
        $html.='</select> </div>';
        return $this->surond($label.$html) ;
    }
    public function SelectFormT($label,$name,$options,$attribut = '',$att='Discription'){
        $html =' <select class="col-xs-12 col-sm-12" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $atribut ='';/*
            if($k == parent::getvalue($name.'_id')){
                $atribut = ' selected';
            }*/
            $content = $v->{$att};
            $html.='<option value="'.$v->id.'"'.$atribut.'>'.$content.'</option>';

        endforeach;
        $html.='</select>';
        return $html ;
    }

    public function SelectedForm($label,$name,$options,$selected,$attribut = '',$att='Discription'){
        $label = $this->label($label);
        $html ='<div class="col-sm-9"> <select class="col-xs-10 col-sm-5" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $optionatt ='';
            if($v->id == $selected){
                $optionatt = ' selected';
            }
            $content = $v->{$att};
            $html.='<option  value="'.$v->id.'" '.$optionatt.'>'.$content.'</option>';

        endforeach;
        $html.='</select> </div>';
        return $this->surond($label.$html) ;
    }

    public function SelectedFormT($label,$name,$options,$selected,$attribut = '',$att='Discription'){
        $label = $this->label($label);
        $html =' <select class="col-xs-12 col-sm-12" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $optionatt ='';
            if($v->id == $selected){
                $optionatt = ' selected';
            }
            $content = $v->{$att};
            $html.='<option  value="'.$v->id.'" '.$optionatt.'>'.$content.'</option>';

        endforeach;
        $html.='</select>';
        return $html ;
    }
    public function SimpleSelectedForm($label,$name,$options,$selected,$attribut = ''){
        $label = $this->label($label);
        $html =' <select class="col-xs-12 col-sm-12" name="'.$name.'"'.$attribut.'>';
        $html.='<option value=" " selected > </option>';
        foreach($options as $v):
            $optionatt ='';
            if($v === $selected){
                $optionatt .= ' selected';
            }

            $html.='<option  value="'.$v.'" '.$optionatt.'>'.$v.'</option>';

        endforeach;
        $html.='</select>';
        return $html ;
    }
}
?>