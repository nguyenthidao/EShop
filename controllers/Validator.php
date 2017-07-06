<?php
class Validator
{
    public function text($value, $required = true)
    {
        if($required & empty($value)){
            return 'Required!';
        }

        return '';
    }

    public function number($value, $required = true)
    {
        if(is_float(floatval($value))){
            return 'Must is a float';
        }

        return '';
    }

    public function validate($value, $pattern, $message)
    {
        $match = preg_match($pattern, $value);

        if($match === FALSE){
            return 'Error regex';
        }else if($match != 1){
            return $message;
        }else{
            return '';
        }
    }

    public function phone($value, $required = true)
    {
        $pattern = '/^([\+84]+)|(0+)\d{9,10} $/';

        $message = 'Invalid phone number';
        $this->validate($value, $pattern, $message);
    }

    public function email($value, $required = true)
    {
        $pattern = '/^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/';

        $message = 'Invalid email!';
        $this->validate($value, $pattern, $message);
    }
}