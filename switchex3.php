<meta charset="utf-8">
<?php

$valor = $_POST['valor'];

$n100 = $valor / 100;
$r100 = $valor % 100;
$float2 = (int) $n100;
var_dump( $float2 );

$n50 = $r100 / 50;
$r50 = $r100 % 50;
$float4 = (int) $n50;
var_dump( $float4 );

$n20 = $r50 / 20;
$r20 = $r50 % 20;
$float6 = (int) $n20;
var_dump( $float6 );

$n10 = $r20 / 10;
$r10 = $r20 % 10;
$float8 = (int) $n10;
var_dump( $float8 );

$n5 = $r10 / 5;
$r5 = $r10 % 5;
$float10 = (int) $n5;
var_dump( $float10 );

$n1 = $r5 / 1;
$r1 = $r5 % 1;
$float12 = (int) $n1;
var_dump( $float12 );
?>

<?php

echo "Valor de saque: R$ $valor";
if ($float2 > 0){
	echo "<br>";
	echo "Cédulas de R$100: $float2";
	echo "<br>";
};

if ($float4 > 0){
	echo "Cédulas de R$50: $float4";
	echo "<br>";
};

if ($float6 > 0)
{
	echo "Cédulas de R$20: $float6";
	echo "<br>";
};

if ($float8 > 0)
{
	echo "Cédulas de R$10: $float8";
	echo "<br>";
};

if ($float10 > 0)
{
	echo "Cédulas de R$5: $float10";
	echo "<br>";
};

if ($float12 > 0)
{
	echo "Cédulas de R$1: $float12";
};

?>