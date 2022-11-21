<?php
 $sql= "SELECT id,name,email,age, 
 case
 when salary>10 and salary<20 then employee
 when salary>20 and salary<30 then hr
 when salary>30 and salary<40 then manager
 else poune  
 end as employer_type from table 
 ";

?>