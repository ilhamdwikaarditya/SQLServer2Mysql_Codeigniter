# SQLServer2Mysql_Codeigniter
Tool Syncronation / Tool Transfer Data From SQL Server to Mysql
<br><br>
database.php => config file <br>
Sync.php => Controller file <br>
Mdb.php => Model file <br>
<br>
Where is View File?? in your head. :)<br>
<br><br>
# Example:<br>
in controller you can <br>
$this->db->query("truncate table1"); <br>
access Mysql with query "truncate table1" on Mysql <br>
<br>
$this->mdb->query("table1","SELECT .... FROM .... WHERE ... dsb");<br>
access SQL Server with query "SELECT .. FROM .. (JOIN / UNION etc) WHERE .. etc" on SQL Server and automatic insert into Mysql <br>
<br>
<br>
# Note
Table 1 on Mysql<br>
Field : field_a, field_b, field_c<br>
<br>
Result query SQL Server must be<br>
field_a, field_b, field_c (you can use AS field_a, AS field_b, AS field_c)<br>
