<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#957DAD'><b>ลำดับ</b></td>
        <td bgcolor='#4682B4'><b>จังหวัด</b></td>
        <td bgcolor='#A7BED3'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#A9D3C9'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFC89E'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#F7E6AB'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#FEB7B3'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#DAB894'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#D4C6F5'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#F4FAFB'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#ECE3FC'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#DEF4F4'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#FCEBF6'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FAF8DF'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FCF1DD'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#DEE0D4'>";
    echo $val->total_death;
    echo "</td>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>
