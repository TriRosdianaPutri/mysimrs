<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><?php echo "$title";?></h1>

	<div id="body">
		<?php echo "$Welcome";
		?>

	<?php from_open("Dokter/Proses_simpan");?>
	<div>

	No.Rawat:
	<input type="text" name="no_rawat">
	</div>

	<div>
	Kode Kamar:
	<input type="text" name="kd_kamar">
	</div>

	<div>
	Tarif kamar:
	<input type="text" name="Trf_kamar">
	</div>

	<div>
	diagnosa awal:
	<input type="text" name="diagnosa_awal">
	</div>

	<div>
	diagnosa akhir:
	<input type="date" name="diagnosa_akhir">
	</div>

	<div>
	tanggal masuk:
	<input type="text" name="tgl_masuk">
	</div>

	<div>
	Jam masuk:
	<input type="text" name="jam_masuk">
	</div>

	<div>
	Tanggal Keluar:
	<input type="text" name="tgl_keluar">
	</div>

	<div>
	Jam Keluar:
	<input type="text" name="jam_keluar">
	</div>

	<div>
	Lama:
	<input type="text" name="lama">
	</div>

	<div>
	Total biaya:
	<input type="text" name="ttl_biaya">
	</div>

	<div>
	Stastus pulang
	<input type="text" name="stts_pulang">
	</div>

	<div>
	Nomer Ijin Praktek:
	<input type="text" name="ijin_praktek">
	</div>

	<div>
		<input type="hidden" name="status" value="1">
	</div>
	<input type="submit" name="button_simpan" value="simpan">
	</div>
</from>
	</div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>


<script type="text/javascript">
	$.(kd_dokter).onChange(
		$.('#nama_dokter').value==$('#kode_dokter').value

		)
</script>