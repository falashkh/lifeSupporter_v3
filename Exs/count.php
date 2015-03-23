<?php
class count
{
public function calorie_count(){
        $download=!empty($_GET['age']);
        $neck=htmlspecialchars($_REQUEST['neck']);
        $waist=htmlspecialchars($_REQUEST['waist']);
        $weight=htmlspecialchars($_REQUEST['weight']);
        $height=htmlspecialchars($_REQUEST['height']);
        $age=htmlspecialchars($_REQUEST['age']);
        $activity=htmlspecialchars($_REQUEST['activity']);
        $hip=htmlspecialchars($_REQUEST['hip']);
        $op_weight=htmlspecialchars($_REQUEST['opweight']);
        if(!(is_numeric($neck)&&is_numeric($waist)&&is_numeric($weight)&&is_numeric($height)&&is_numeric($age)&&is_numeric($activity))){exit;}
        $bmi=round(($weight*10000/($height*$height)),1);
        $sexf=!empty($hip);
        if($sexf){if(!is_numeric($hip)){exit;}}
        $bstate=true;
        $fat_ow=18;
        $fat_ob=25;
        if($sexf){
        $fat_ow=25;
        $fat_ob=31;
        $bmr=round(655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age),1);
        $fatpercent = round(495/(1.29579 - 0.35004 * (log10($waist + $hip - $neck)) + 0.221 * (log10($height))) - 450,1);}
        else{
              $bmr=round(66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age),1);
              $fatpercent=round(495 / (1.0324 - 0.19077 * (log10($waist - $neck)) + 0.15456 * (log10($height))) - 450,1);}
        if ($activity == "0") {$dailyCal = $bmr * 1.2;}
        if ($activity == "1") {$dailyCal = $bmr * 1.375;}
        if ($activity == "2") {$dailyCal = $bmr * 1.55;}
        if ($activity == "3") {$dailyCal = $bmr * 1.725;}
        if ($activity == "4") {$dailyCal = $bmr * 1.9;}
        if($bmi<18){
              $w1=(18*$height*$height/10000)-$weight;
              $s1='You are underweight by ';}
        else{
              if($fatpercent<=$fat_ow){
                 $s1='Your weight is normal.';
                 $bstate=false;}
              else{
                 $w1 = $weight*($fatpercent - $fat_ow) / (100 - $fat_ow);
                 $s1=(($fatpercent >= $fat_ob)? 'Your weight state is Obes. You should reduce your weight by ' : 'You are Overweight by ');}
        }
        if($bstate){$s1.=(($op_weight==='1')? round($w1/0.4536,1).' Pound.' : round($w1,1).' Kg.');}
        $result= 'Your BMR is: '.$bmr;
        $result.='<br />';
        $result.='Your BMI is: '.$bmi;
        $result.='<br />';
        $result.='Your Body Fat is '.$fatpercent.'%';
        $result.='<br />'.$s1;
        if($download){$this->download($result);}
        else{echo $result;}
}
private function download($text)
{
        $s=str_replace("<br />","\r\n",$text);
        $f='weightloss_stat.text';
        header("Content-type: application/text");
        header("Content-Disposition: attachment; filename=$f");
        echo $s;
        exit;
}
}
$obj=new count();
$obj->calorie_count();
exit;
 ?>