<?php
//var_dump($_POST);
$var1=$_POST["first_name"];
$var2=$_POST["last_name"];
$var3=$_POST["email"];
$var4=$_POST["phone_number"];
$var5=$_POST["__address"];
$var6=$_POST["__city_state"];
$var7=$_POST["__zip_code"];
$var8=$_POST["you_like_contacted"];
$var9=$_POST["consultation_session"];
$var10=$_POST["student_name"];
$var11=$_POST["entry_single"];
$var12=$_POST["student_current_school"];
$var13=$_POST["student_overall_gpa"];
$var14=$_POST["standardid_tests"]; 
$var15=$_POST["student_scores"];
$var16=$_POST["student_struggles"];
$var17=$_POST["fes_service"];
$var18=$_POST["about_us"];


    $tabla="<table style='text-align:center;margin-top:10px;' border='1'>
        <tr>
            <td>DATOS GENERALES</td>
            <td>SEGUNDO DATOS GENERALES</td>
        </tr> ";
        $tabla.="<tr> <td>$var1</td> <td>$var2</td> </tr>";
        $tabla.="<tr> <td>$var3</td> <td>$var4</td> </tr>";
        $tabla.="<tr> <td>$var5</td> <td>$var6</td> </tr>";
        $tabla.="<tr> <td>$var7</td> <td>$var8</td> </tr>";
        $tabla.="<tr> <td>$var9</td> <td>$var10</td> </tr>";
        $tabla.="<tr> <td>$var11</td> <td>$var12</td> </tr>";
        $tabla.="<tr> <td>$var13</td> <td>$var14</td> </tr>";
        $tabla.="<tr> <td>$var15</td> <td>$var16</td></tr>";
        $tabla.="<tr> <td>$var17</td> <td>$var18</td></tr>";
    $tabla.='</table>';
    echo $tabla;
?>