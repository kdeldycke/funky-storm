<?PHP

print("<b>Referer --> $HTTP_SELF</b>");
print("");

$contient = eregi("^(http[s]?\:\/\/)(.*\.?funkystorm\.?[A-Za-z0-9_.-]*\.[A-Za-z]{2,3})(.*)$", $HTTP_REFERER, $url_param);

print("!!!$contient!!!!");

for($i=0; $i<=count($url_param); $i++)
print("$i --> $url_param[$i]<br>");

?>