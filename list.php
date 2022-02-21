<?php
require_once('mysqlconnection.php');

$req = "SELECT * FROM apprenant";
$simbfSel = $db->prepare($req);
$simbfSel->execute();

ob_start();
if($simbfSel) {
	echo "<table>
								<tr>
														<th>PRENOM</th> <th>NOM</th> <th>E-MAIL</th> <th>TELEPHONE</th>
																				</tr>";
	while($row = $simbfSel->fetch()) {
		echo "<tr>
								<td>".$row['firstname']."</td> <td>".$row['name']."</td> <td>".$row['email']."</td> <td>".$row['tel']."</td>
														</tr>";
	}
	echo "</table>";
} else {
	echo "<p>La liste des apprenants est vide.</p>";
}

$content = ob_get_clean();
require_once('listview.php');
