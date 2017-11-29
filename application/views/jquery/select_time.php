<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<option value="">Pilih Waktu ...</option>
<?php
	foreach($waktu as $waktus){
		echo "<option value=".$waktus['id_waktu'].">".$waktus['nm_waktu']."</option>";
	}
?>