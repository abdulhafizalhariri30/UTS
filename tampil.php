<table > 
  <tr> 
<td>NIK</td>
   <td>NAMA</td>
   <td>JABATAN</td>
   <td>BAGIAN</td>
   <td>Pengajuan_Cuti</td>
   <td>Sisa_Cuti</td>
    </tr>
	<?php
      $tampil="select * from t; 
      $query_tampil=mysqli_query($tampil); 
      while ($dataTampil=mysqli_fetch_array($query_tampil)) {
     $id++ 
     ?> 
  
   <tr> 
    <td><?php echo $data['NIK']; ?></td> 
    <td><?php echo $data['NAMA']; ?></td>
    <td><?php echo $data['JABATAN']; ?></td> 
    <td><?php echo $data['BAGIAN']; ?></td> 
    <td><?php echo $data['Pengajuan_Cuti']; ?></td> 
    <td><?php echo $data['Sisa_Cuti']; ?></td> 
  </tr> 
    <?php } ?> 
</table>