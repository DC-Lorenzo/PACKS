<table>

<?php 
include "classes/class_general_db.php";


$query = "SELECT id_usuario FROM elforodeltenis_descarga_powerplay WHERE id_usuario<>'' group by id_usuario";
$po = new conexionBD();
$po -> doQuery("$query");
	while ( $po -> setWhile()) {
		$id_usuario = $po -> getDataSQL("id_usuario");

		$query = "SELECT email_address, member_name FROM elforodeltenis_members WHERE id_member = '$id_usuario'";
		$op = new conexionBD();
		$op -> doQuery("$query");
			while ( $op -> setWhile()) {
				$email_address = $op -> getDataSQL("email_address");
				$member_name = $op -> getDataSQL("member_name");

				?>
				<tr>
					<td><?php echo $email_address;?></td>
					<td><?php echo $member_name;?></td>
				</tr>
				<?php
					
			}
	}

?>
</table>