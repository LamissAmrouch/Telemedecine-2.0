<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 15/09/2018
 * Time: 20:16
 */
 defined('BASEPATH') OR exit('No direct script access allowed');

class Month
{
    public $Days = ['Samedi','dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi'];
    private $months = ['Janvier','Fevrier','Mars','Avril','Mai','Jun','Juillet','Aout','Septemebre','Octobre','Novembre','Decembre'];
    private $Month ;
    private $Year ;
 public function __construct($params)
 {
     $month = $params['month'];
     $year = $params['year'];
     if($month === null){
         $month = intval(Date('m'));
     }
     if($year === null){
         $year = intval(Date('Y'));
     }
     if($month < 1 || $month > 12 ){
         throw new Exception("le mois n'est pas valide");
     }
      if($year < 1980){
          throw new Exception("année n'est pas valide");
      }

      $this->Month = $month;
      $this->Year = $year;

 }

 public function toString(){
     return $this->months[$this->Month - 1].'  '.$this->Year;
 }

 public function getFirstDay(){
     return new DateTime("{$this->Year}-{$this->Month}-01");
 }

 public function getWeeks(){
     $start = new DateTime("{$this->Year}-{$this->Month}-01");
     $end = clone $start;
     $end = $end->modify('+1 month -1 day');
     $weeks = intval($end->format('W')) - intval($start->format('W'))+1;
     if($weeks < 0){
         $weeks = 5;
     }
     return $weeks;
 }

 public function inMonth($date){
     return $this->getFirstDay()->format('y-m') === $date->format('y-m');
 }

 public function NextMonth(){
     $month = $this->Month+1;
     $year = $this->Year;
     if($month === 13){
         $month = 1;
         $year = $this->Year+1;
     }
     return $month.'/'.$year;
 }

    public function PreviousMonth(){
        $month = $this->Month-1;
        $year = $this->Year;
        if($month === 0 ){
            $month = 12;
            $year = $this->Year-1;
        }
        return $month.'/'.$year;
    }
}