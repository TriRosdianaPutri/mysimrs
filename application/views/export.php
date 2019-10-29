<h4>Data Siswa</h4>
<table border="1" cellpadding="8">
<tr>
  <th>NIS</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Alamat</th>
</tr>
<?php
if( ! empty($karyawan)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($karyawan as $data){ // Lakukan looping pada variabel siswa dari controller
     echo "<tr>";
    echo "<td>".$data->id_karyawan."</td>";
    echo "<td>".$data->nama_lengkap."</td>";
    echo "<td>".$data->email."</td>";
    echo "<td>".$data->no_hp."</td>";
    echo "<td>".$data->foto."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>