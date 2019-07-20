<?php
include "config.php";
$query = mysqli_query ($conn, "SELECT * FROM biodata ORDER BY id DESC");

SELECT mhs.nim, mhs.namamhs
FROM mhs, ambilmk
WHERE mhs.nim = ambilmk.nim AND ambilmk.kodemk = 'MK01';

?>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>No. Hp</th>
		<th>Alamat</th>
		<th>Pendidikan Terakhir</th>
		<th>Agama</th>
		<th>Hobi</th>
		<th colspan="2">Action</th>
	</tr>
	<?php $no = 1?>
	<?php while ($data = mysqli_fetch_array($query)){?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['full_name'] ?></td>
		<td><?php echo $data['place_of_birth_id'] ?></td>
		<td><?php echo $data['date_of_birth'] ?></td>
		<td><?php echo $data['phone_number'] ?></td>
		<td><?php echo $data['address'] ?></td>
		<td><?php echo $data['last_education'] ?></td>
		<td><?php echo $data['religion'] ?></td>
		<td><?php echo $data['hoby'] ?></td>

		<td><a href="delete.php?delete=<?php echo $data["id"]?>">Delete</a></td>
		<td><a href="update.php?update=<?php echo $data['id']?>">Update</a></td>
	</tr>
	<?php } ?>
</table>