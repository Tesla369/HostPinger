<?php

session_start();

if(!isset($_SESSION['username'])) {
        header("Location: ..");
        exit();
}

function is_valid_domain_name($domain_name)
{

$IpRegX = "/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";

$HostRegX ="/^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])*$/";

$IPcheck = preg_match($IpRegX, $domain_name); //valid IP check
$Hostcheck = preg_match($HostRegX, $domain_name);
if ($IPcheck == 1 || $Hostcheck == 1)
{return 1;}
else { return 0; }
}

function validport($portnum)
{
$c=0;
for ($i=1; $i<=65535; $i++)
{
if($portnum == $i)
{
$c++;
}
else { continue; }
}
if ($c == 1)
{
return 1;
}
else { return 0; }
}

//End of Validation
//User Input is recieved

$h = $_POST["h"];
$p = $_POST["p"];

$vdn = is_valid_domain_name($h);
//echo $vdn;
$vp = validport($p);
//echo $vp;
if($vdn!=1 && ($vp!=1 || !is_numeric($p)))
{
echo "Invalid Hostname & Port number";
}
elseif($vdn!=1)
{
echo "Invalid Host";
}
elseif($vp!=1 || !is_numeric($p))
{
echo "Invalid Port number";
}

else{

if($socket =@fsockopen($h, $p, $errno, $errstr, 1)) {
echo "🟢 $h:$p is online! 👍<br>";
fclose($socket);
}

else {
echo "🔴 $h:$p is offline! 👎<br>";
}

}

?>
