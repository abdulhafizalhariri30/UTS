<?php
//fungsi untuk menggabungkan file
include("koneksi2.php");
if(isset($_POST['simpan'])){
	$query_input_cuti="insert into cuti_karyawan(NIK,NAMA,JABATAN,BAGIAN,Pengajuan_Cuti,Sisa_Cuti)values
	('".$_POST['NIK']."',
	 '".$_POST['NAMA']."',
    '".$_POST['JABATAN']."',
	'".$_POST['BAGIAN']."',
	'".$_POST['Pengajuan_Cuti']."',
'".$_POST['Sisa_Cuti']."')";
$proses_data =mysqli_query($rumah,$query_input_cuti);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo mysqli_error();
}
}


?>
<form method="POST" action="">
	<table>
		<tr>
			<td>Nik Karyawan</td>
			<td><input name="NIK" type="text"></td>
		</tr>
	<tr>
			<td>Nama Karyawan</td>
			<td><input name="NAMA" type="number"></td>
		</tr>
		<tr>
			<td>Jabatan Karyawan</td>
			<td><input name="JABATAN" type="text"></td>
		</tr>
	<tr>
			<td>Bagian</td>
			<td><input name="BAGIAN" type="text"></td>
		</tr>
		<tr>
		<td> Pengajuan Cuti</td>
			<td><input name="Pengajuan_Cuti" type="number"></td>
		</tr>
		<tr>
		<td> Sisa cuti</td>
		<td><input name="Sisa_Cuti" type="text"></td>
		</tr>
		<tr>
		<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>