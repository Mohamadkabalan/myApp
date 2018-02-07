<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host="localhost";
$user="root";
$pass="";
$name="gvc";
	$con= mysql_connect($host,$user,$pass);
	mysql_select_db($name,$con);
	
		$query="SELECT * FROM `id_case3`";
		$res = mysql_query($query);
		while($row = mysql_fetch_array($res)) {
            $ident_date = $row['ident_date'];
            $incident_date = $row['incident_date'];
            $ref_date = $row['ref_date'];
            $ref_receival_date = $row['ref_receival_date'];
            $notice_date = $row['notice_date'];
            $eviction_deadline = $row['eviction_deadline'];
            $evic_date = $row['evic_date'];
            $case_closure_date = $row['case_closure_date'];
            $leb_entrance = $row['leb_entrance'];
            $id = $row['id'];
            $evic_before= $row['evic_before'];

            $new_ident_date=change_format($ident_date);
            $new_incident_date=change_format($incident_date);
            $new_ref_date=change_format($ref_date);
            $new_ref_receival_date=change_format($ref_receival_date);
            $new_notice_date=change_format($notice_date);
            $new_eviction_deadline=change_format($eviction_deadline);
            $new_evic_date=change_format($evic_date);
            $new_case_closure_date=change_format($case_closure_date);
            $new_leb_entrance=change_format($leb_entrance);
            $new_evic_before=change_format($evic_before);
if($evic_before){
    $sql1 = "update id_case3 set `evic_before`='$new_evic_before' where id='$id'";
    $result1 = mysql_query($sql1);
    if ($result1) {
        echo "<br>evic_before  with id: " . $id . " updated successfully";
    } else {
        echo "<br>evic_before with id: " . $id . "does not updated ";
    }
}
            if ($ident_date) {
                $sql1 = "update id_case3 set `ident_date`='$new_ident_date' where id='$id'";
                $result1 = mysql_query($sql1);
                if ($result1) {
                    echo "<br>ident_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>ident_date with id: " . $id . "does not updated ";
                }
            }

            if ($incident_date) {
                $sql2 = "update id_case3 set `incident_date`='$new_incident_date' where id='$id'";
                $result2 = mysql_query($sql2);
                if ($result2) {
                    echo "<br>incident_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>incident_date with id: " . $id . "does not updated ";
                }
            }
            if ($ref_date) {
                $sql3 = "update id_case3 set `ref_date`='$new_ref_date' where id='$id'";
                $result3 = mysql_query($sql3);
                if ($result3) {
                    echo "<br>ref_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>ref_date with id: " . $id . "does not updated ";
                }
            }
            if ($ref_receival_date) {
                $sql4 = "update id_case3 set `ref_receival_date`='$new_ref_receival_date' where id='$id'";
                $result4 = mysql_query($sql4);
                if ($result4) {
                    echo "<br>ref_receival_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>ref_receival_date with id: " . $id . "does not updated ";
                }
            }
            if ($notice_date) {
                $sql5 = "update id_case3 set `notice_date`='$new_notice_date' where id='$id'";
                $result5 = mysql_query($sql5);
                if ($result5) {
                    echo "<br>notice_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>notice_date with id: " . $id . "does not updated ";
                }
            }
            if ($eviction_deadline) {
                $sql6 = "update id_case3 set `eviction_deadline`='$new_eviction_deadline' where id='$id'";
                $result6 = mysql_query($sql6);
                if ($result6) {
                    echo "<br>eviction_deadline  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>eviction_deadline with id: " . $id . "does not updated ";
                }
            }
            if ($evic_date) {
                $sql7 = "update id_case3 set `evic_date`='$new_evic_date' where id='$id'";
                $result7 = mysql_query($sql7);
                if ($result7) {
                    echo "<br>evic_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>evic_date with id: " . $id . "does not updated ";
                }
            }
            if ($case_closure_date) {
                $sql8 = "update id_case3 set  `case_closure_date`='$new_case_closure_date' where id='$id'";
                $result8 = mysql_query($sql8);
                if ($result8) {
                    echo "<br>case_closure_date  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>case_closure_date with id: " . $id . "does not updated ";
                }
            }

            if ($leb_entrance) {
                $sql9 = "update id_case3 set `leb_entrance`='$new_leb_entrance' where id='$id'";
                $result9 = mysql_query($sql9);
                if ($result9) {
                    echo "<br>leb_entrance  with id: " . $id . " updated successfully";
                } else {
                    echo "<br>leb_entrance with id: " . $id . "does not updated ";
                }


            }

        }

$query1="SELECT * FROM `service_table10`";
$res1 = mysql_query($query1);
while($row1 = mysql_fetch_array($res1)) {
    $assess_date=$row1['assess_date'];
    $response_date=$row1['response_date'];
    $ref_date_ser=$row1['ref_date_ser'];
    $ref_receival_date_ser=$row1['ref_receival_date_ser'];
$id=$row1['id'];
    $new_assess_date=change_format($assess_date);
    $new_response_date=change_format($response_date);
    $new_ref_date_ser=change_format($ref_date_ser);
    $new_ref_receival_date_ser=change_format($ref_receival_date_ser);
    if($assess_date){
        $sql1 = "update service_table10 set `assess_date`='$new_assess_date' where id='$id'";
        $result1 = mysql_query($sql1);
        if ($result1) {
            echo "<br>assess_date  with id: " . $id . " updated successfully";
        } else {
            echo "<br>assess_date with id: " . $id . "does not updated ";
        }
    }
    if($response_date){
        $sql2 = "update service_table10 set `response_date`='$new_response_date' where id='$id'";
        $result2 = mysql_query($sql2);
        if ($result2) {
            echo "<br>response_date  with id: " . $id . " updated successfully";
        } else {
            echo "<br>response_date with id: " . $id . "does not updated ";
        }
    }
    if($ref_date_ser){
        $sql3 = "update service_table10 set `ref_date_ser`='$new_ref_date_ser' where id='$id'";
        $result3 = mysql_query($sql3);
        if ($result3) {
            echo "<br>ref_date_ser  with id: " . $id . " updated successfully";
        } else {
            echo "<br>ref_date_ser with id: " . $id . "does not updated ";
        }
    }
    if($ref_receival_date_ser){
        $sql4= "update service_table10 set `ref_receival_date_ser`='new_$ref_receival_date_ser' where id='$id'";
        $result4 = mysql_query($sql4);
        if ($result4) {
            echo "<br>ref_receival_date_ser  with id: " . $id . " updated successfully";
        } else {
            echo "<br>ref_receival_date_ser with id: " . $id . "does not updated ";
        }
    }
}

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
function change_format($date){
    if(validateDate($date, $format = 'Y-m-d')) {
        return $date;
    }else{

        $y="";
        $m="";
        $d="";
        if (strpos($date, '-') !== false) {

            $t = explode('-', $date);
            if(strlen($t[0])==4 && strlen($t[1])==1 && strlen($t[2])==1){
                $y = $t[0];
                $m = $t[1];
                $m="0".$m;
                $d = $t[2];
                $d="0".$d;
            }
            if(strlen($t[0])==4 && strlen($t[1])==2 && strlen($t[2])==1){
                $y = $t[0];
                $m = $t[1];
                $d = $t[2];
                $d="0".$d;
            }
            if(strlen($t[0])==4 && strlen($t[1])==1 && strlen($t[2])==2){
                $y = $t[0];
                $m = $t[1];
                $m="0".$m;
                $d = $t[2];

            }
            if(strlen($t[0])==1 && strlen($t[1])==1 && strlen($t[2])==4){
                $d = $t[0];
                $d="0".$d;
                $m = $t[1];
                $m="0".$m;
                $y = $t[2];

            }  
            if(strlen($t[0])==1 && strlen($t[1])==2 && strlen($t[2])==4){
                $d = $t[0];
                $d="0".$d;
                $m = $t[1];
                $y = $t[2];
            }
            if(strlen($t[0])==2 && strlen($t[1])==1 && strlen($t[2])==4){
                $d = $t[0];
                $m = $t[1];
                $m="0".$m;
                $y = $t[2];
            }
            if(strlen($t[0])==2 && strlen($t[1])==2 && strlen($t[2])==4){
                $d = $t[0];
                $m = $t[1];
                $y = $t[2];
            }
            $new_date = $y . "-" . $m . "-" . $d;
        }elseif (strpos($date, '/') !== false) {
            $t = explode('/', $date);
            if(strlen($t[0])==4 && strlen($t[1])==1 && strlen($t[2])==1){
                $y = $t[0];
                $m = $t[1];
                $m="0".$m;
                $d = $t[2];
                $d="0".$d;
            }
            if(strlen($t[0])==4 && strlen($t[1])==2 && strlen($t[2])==1){
                $y = $t[0];
                $m = $t[1];
                $d = $t[2];
                $d="0".$d;
            }
            if(strlen($t[0])==4 && strlen($t[1])==1 && strlen($t[2])==2){
                $y = $t[0];
                $m = $t[1];
                $m="0".$m;
                $d = $t[2];

            }
            if(strlen($t[0])==1 && strlen($t[1])==1 && strlen($t[2])==4){
                $d = $t[0];
                $d="0".$d;
                $m = $t[1];
                $m="0".$m;
                $y = $t[2];

            }
            if(strlen($t[0])==1 && strlen($t[1])==2 && strlen($t[2])==4){
                $d = $t[0];
                $d="0".$d;
                $m = $t[1];
                $y = $t[2];
            }
            if(strlen($t[0])==2 && strlen($t[1])==1 && strlen($t[2])==4){
                $d = $t[0];
                $m = $t[1];
                $m="0".$m;
                $y = $t[2];
            }
            if(strlen($t[0])==2 && strlen($t[1])==2 && strlen($t[2])==4){
                $d = $t[0];
                $m = $t[1];
                $y = $t[2];
            }
            $new_date = $y . "-" . $m . "-" . $d;

        }elseif(strlen($date)==4){
            $new_date=$date."-01-01";
        }
        return $new_date;
    }

}