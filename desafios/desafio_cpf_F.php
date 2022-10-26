<?php
function verifica_cpf($cpf){
$vcpf = str_split(substr($cpf,0,3).substr($cpf,4,3).substr($cpf,8,3).substr($cpf,12,2));

$n = $vcpf[0];
$nv = 0;
for($i = 0; $i < 11; $i++){
    if($n == $vcpf[$i]){$nv++;}
}
if($nv == 11){echo "o CPF difgitado é inávlido";}
$dv=0;
for($i=0; $i<9; $i++){
    $dv += $vcpf[$i] * (10 - $i);
}
$dv = 11 - ($dv % 11);
$dv > 9 ? $dv = 0: "";
echo "digito calculado: $dv";
$dv=0;

for($i=0; $i<10; $i++){
    $dv += $vcpf[$i] * (11 - $i);
}
$dv = 11 - ($dv % 11);
$dv > 9 ? $dv = 0: "";
echo "$dv";

//$vcpf = str_split($cpf);

echo "<br> <br>";
print_r($vcpf);
return false;
}   