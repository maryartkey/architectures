
<?
include("./default.php");

$query="SELECT s FROM limit_test WHERE s LIKE '$s'";
$query.=" LIMIT $start,$len";
echo "Запрос: <font color=#00ff00>$query</font><br><br>";

for ($j=1; $j<=$len && $tmp=sqlget($res); $j++) {
   echo ($start+$j).". $tmp[s]<br>";
   $stop--;
}

echo "<br>";
for ($i=1; $i<=floor($all/$len); $i++)
   echo "<a href=$PHP_SELF?z=search&all=$all&len=$len&".
         "start=".(($i-1)*$len)."&s=".urlencode($s).">$i</a> ";
break;

?>