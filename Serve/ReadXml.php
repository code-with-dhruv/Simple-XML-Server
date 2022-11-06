<?php
$xml=new DOMDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->loadXML("company.xml");
if(!$xml)
{
    $company=$xml->createElement("company");
    $xml->appendChild($company);
}
else{
    $company=$xml->firstChild;

}
if(isset($_POST['submit']))
{
 $fname=$_POST['name'];
 $fage=$_POST['msg'];
 $frec=$_POST['rec'];
$company=$xml->createElement("company");
$xml->appendChild($company);
$emp=$xml->createElement("employee");
$company->appendChild($emp);
$name=$xml->createElement("name",$fname);
$emp->appendChild($name);
$msg=$xml->createElement("msg",$fage);
$emp->appendChild($msg);
$rec=$xml->createElement("recmsg",$frec);
$emp->appendChild($rec);

echo"<xmp>".$xml->saveXML()."</xmp>";
$xml->save("company.xml");
}
?>