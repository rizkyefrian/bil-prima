<div align="center">
<?php 
$n = $_POST['angka'];
$hasil = "";
echo "Berikut Hasil bilangan Prima dari ". $n."<br/>";
for($i=1; $i<=$n; $i++){
    $a = 0;
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $a++;
        }
    }
    if($a == 2){
        echo $hasil =  $i.",";
    }        
}
?>
<br/>
<a href="index.html" value="">Coba Kembali</a>
</div>