<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 29/01/2019
 * Time: 09:58
 */

class StrUtilsCorrection
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    private function applyBold()
    {
        $this->str = "<b>" . $this->str . "</b>";
        return $this;
    }

    public function bold()
    {
        $this->applyBold();
        return $this->str;
    }

    private function applyItalic()
    {
        //En retournant $this dans une méthode, je peux chainer les méthodes !
        $this->str = "<i>" . $this->str . "</i>";
        return $this;
    }

    public function italic()
    {
        $this->applyItalic();
        return $this->str;
    }

    private function applyUnderline()
    {
        $this->str = "<u>" . $this->str . "</u>";
        return $this;
    }

    public function underline()
    {
        $this->applyUnderline();
        return $this->str;
    }

    public function capitalize()
    {
        return mb_strtoupper($this->str);
    }

    public function uglify()
    {
        //Chainage de méthodes en action
        $this->applyBold()->applyItalic()->applyUnderline();
        return $this->str;
        //   return "<strong><i><u>".mb_strtoupper($this->str)."</u></i></strong>";
    }
}