<?php
include('lib/adodb/adodb.inc.php');
$db=ADONewConnection('postgres');
$db->Connect("host=localhost user=admin password=1234 port=5432");
print_r($db);
print_r($db->GetAll("select * from usuarios where pass='b706835de79a2b4e80506f582af3676a' and cveusuario='9999999999999'"));

?>