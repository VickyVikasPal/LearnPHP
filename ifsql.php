<?php
 $sql= "SELECT id,name,email,age, if(salary>20000,'normal employe','Manage') as employer_type FROM table";

?>