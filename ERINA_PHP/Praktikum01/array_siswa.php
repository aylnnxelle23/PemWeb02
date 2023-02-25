<?php

$ns1 = ['id'=>1,'nama'=>'Niken','nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nama'=>'Sarah','nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nama'=>'Ayeleen','nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nama'=>'Elle','nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>


<h3 text align="center">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<style>
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
</style>

<thead>
<tr bgcolor="#9c789a">
<th>No</th>
<th>Nama</th>
<th>NIM</th>
<th>UTS</th>
<th>UAS</th>
<th>Tugas</th>
<th>Nilai Akhir</th>
</tr>
</thead>

<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr bgcolor="#ffe4c4"><td>'.$nomor.'</td>';
echo '<td>'.$ns['nama'].'</td>';
echo '<td>'.$ns['nim'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>

