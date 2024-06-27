<?php
error_reporting(0);
$Select=$_REQUEST['make'];
$json='[{
    "Make": "Boat",
    "Models": [
      "Over 21 ft.",
      "Under 21 ft."
    ]
  }]';

   $a = json_decode($json, true);
$make="";
$html = "<select class='form-control drop_down_box_styles' name='vehiclemodel' id='vehiclemodel'>
                    <option value='Model'>Model</option>";
foreach($a as $b){
    foreach($b as $k=>$c){
        if(is_array($c)){
            if($make==$Select){
                for($x=0;$x<count($c);$x++){
                     $html.="<option value='".$c[$x]."'>".$c[$x]."</option>";
                }
                break;
            }
        } else {
            $make=$c;
        }
    }
}
 $html .= "</select>";
 echo $html;             

?>
