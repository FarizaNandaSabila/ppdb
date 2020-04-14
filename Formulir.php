<!DOCTYPE html>
<html>
<head>
	<title>Formulir Siswa Baru</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
	.warning {color: #FF0000;}
</style>
</head>
<body>

<?php
$error_nama = "";
$error_panggilan = "";
$error_jkel = "";
$error_nisn = "";
$error_nik = "";
$error_kota ="";
$error_lahir = "";
$error_akta= "";
$error_agama = "";
$error_negara= "";
$error_khusus ="";
$error_alamat = "";
$error_rt= "";
$error_rw = "";
$error_dusun = "";
$error_lurah ="";
$error_camat = "";
$error_kodepos= "";
$error_nama_ayah = "";
$error_pekerjaan_ayah = "";
$error_nama_ibu = "";
$error_pekerjaan_ibu = "";
$error_anak= "";
$error_telp = "";
$error_email = "";

$nama = "";
$panggilan = "";
$jkel = "";
$nisn = "";
$nik = "";
$kota ="";
$lahir = "";
$akta= "";
$agama = "";
$negara= "";
$khusus ="";
$alamat = "";
$rt= "";
$rw = "";
$dusun = "";
$lurah ="";
$camat = "";
$kodepos= "";
$nama_ayah = "";
$pekerjaan_ayah = "";
$nama_ibu = "";
$pekerjaan_ibu = "";
$anak= "";
$telp = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["nama"])) 
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["nama_panggilan"])) 
	{
		$error_panggilan = "Nama tidak boleh kosong";
	}
	else
	{
		$panggilan = cek_input($_POST["nama_panggilan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$panggilan)) 
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["jkel"]))
	{
		$error_jkel = "Wajib Diisi";
	}
	else
	{
		$jkel = cek_input($_POST["jkel"]);
	}

	if (empty($_POST["nisn"])) {
			$error_nisn = "NISN Tidak Boleh Kosong !";
		}
		else {
			$nisn = cek_input($_POST["nisn"]);
	
		}

	if (empty($_POST["nik"])) {
			$error_nik = "NIK Tidak Boleh Kosong";
		}
		else {
			$nik = cek_input($_POST["nik"]);
			
		}


	if (empty($_POST["tempatlahir"])) {
			$error_kota = "Tempat Lahir Tidak Boleh Kosong";
		}
		else {
			$kota = cek_input($_POST["tempatlahir"]);
			if (!preg_match("/^[a-zA-Z ]*S/", $kota)) {
				$nameErr = "Inputan Hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["lahir"])) 
	{
		$error_lahir = "Hanya boleh angka dan tanda penghubung";
	}
	else
	{
		$lahir= cek_input($_POST["lahir"]);
	}

	if (empty($_POST["akta"])) {
			$error_akta = "No Akta Tidak Boleh Kosong ! ";
		}
		else {
			$akta = cek_input($_POST["akta"]);
			}

	$agama = $_POST["agama"];

	if (empty($_POST["negara"]))
	{
		$error_negara = "Wajib Diisi";
	}
	else
	{
		$negara = cek_input($_POST["negara"]);
	}

	if (empty($_POST["khusus"]))
	{
		$error_khusus = "Wajib Diisi";
	}
	else
	{
		$khusus = cek_input($_POST["khusus"]);
	}

	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Wajib Diisi";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}

	if (empty($_POST["rt"]))
	{
		$error_rt = "Wajib Diisi";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
	}

	if (empty($_POST["rw"]))
	{
		$error_rw = "Wajib Diisi";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
	}

	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Wajib Diisi";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
	}

	if (empty($_POST["lurah"]))
	{
		$error_lurah = "Wajib Diisi";
	}
	else
	{
		$lurah = cek_input($_POST["lurah"]);
	}

	if (empty($_POST["camat"]))
	{
		$error_camat = "Wajib Diisi";
	}
	else
	{
		$camat = cek_input($_POST["camat"]);
	}

	if (empty($_POST["kodepos"]))
	{
		$error_kodepos = "Kode pos tidak boleh kosong";
	}
	else
	{
		$kodepos = cek_input($_POST["kodepos"]);
		if (!is_numeric($kodepos))
		{
			$error_kodepos = "Kode pos hanya boleh angka";
		}
	}

	if (empty($_POST["nama_ayah"]))
	{
		$error_nama_ayah = "Wajib Diisi";
	}
	else
	{
		$nama_ayah = cek_input($_POST["nama_ayah"]);
	}

	if (empty($_POST["pekerjaan_ayah"]))
	{
		$error_pekerjaan_ayah = "Wajib Diisi";
	}
	else
	{
		$pekerjaan_ayah = cek_input($_POST["pekerjaan_ayah"]);
	}

	if (empty($_POST["nama_ibu"]))
	{
		$error_nama_ibu = "Wajib Diisi";
	}
	else
	{
		$nama_ibu = cek_input($_POST["nama_ibu"]);
	}

	if (empty($_POST["pekerjaan_ibu"]))
	{
		$error_pekerjaan_ibu = "Wajib Diisi";
	}
	else
	{
		$pekerjaan_ibu = cek_input($_POST["pekerjaan_ibu"]);
	}

	if (empty($_POST["anak"]))
	{
		$error_anak = "Wajib Diisi";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);
	}

	if (empty($_POST["telp"]))
	{
		$error_telp = "Tlp tidak boleh kosong";
	}
	else
	{
		$telp = cek_input($_POST["telp"]);
		if (!is_numeric($telp))
		{
			$error_telp = "Nomor HP hanya boleh angka";
		}
	}

	if (empty($_POST["email"]))
	{
		$error_nama = "Email tidak boleh kosong";
	}
	else
	{
		$email = cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error_email = "Format email Invalid";
		}
	}

$host="localhost";
$username="root";
$password="";
$namadb ="ppdb";
try {
$conn = mysqli_connect($host, $username, $password, $namadb) or die("Koneksi gagal dibangun");
$sql = "INSERT INTO `data`(`nama`, `nama_panggilan`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_akta`, `agama`, `kewarganegaraan`, `Berkebutuhan_khusus`, `alamat`, `rt`, `rw`, `dusun`, `Kelurahan`, `kecamatan`, `kodepos`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `anak ke`, `telp`, `email`) VALUES ('$nama','$panggilan','$jkel','$nisn','$nik','$kota','$lahir','$akta','$agama','$negara','$khusus','$alamat','$rt','$rw','$dusun','$lurah','$camat','$kodepos',$nama_ayah,'$pekerjaan_ayah','$nama_ibu' , '$pekerjaan_ibu' , '$anak' , '$telp' , '$email');";
mysqli_query($conn,$sql);
mysqli_close($conn);	
} catch (Exception $e) {
	echo $e;
	
}


}

function cek_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;

}
?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header" >
	<h2>Formulir Siswa Baru</h2>
  </div>
</div>
	<div>
		<h4>Data Diri Siswa</h4>
	</div>
	<div class="card-header">
<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Panggilan</label>
    <div class="col-sm-5">
      <input type="text" name="nama" class="form-control <?php echo ($error_panggilan !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Panggilan" value="<?php echo $panggilan; ?>"><span class="warning"><?php echo $error_panggilan; ?></span>
  </div>
</div>

<div class="form-group row">
			<label for="jenis_kelamin" class="col-sm-2 col-from-label">Jenis Kelamin</label>
			<div class="col-sm-5">
			<input type="radio" id="Laki" name="jenis_kelamin" value="Laki-Laki">
			<label for="Laki">Laki-Laki</label>
			<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
			<label for="perempuan">Perempuan</label>
			</div>
			<span class="warning"><?php echo $error_jkel; ?></span>
		</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">NISN</label>
    <div class="col-sm-3">
      <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Nomor Induk Siswa Nasional" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-3">
      <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="Nomor Induk Kependudukan" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-3">
      <input type="text" name="kota" class="form-control <?php echo ($error_kota !="" ? "is-invalid" : ""); ?>" id="kota" placeholder="Kota/Kab" value="<?php echo $kota; ?>"><span class="warning"><?php echo $error_kota; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-3">
      <input type="text" name="lahir" class="form-control <?php echo ($error_lahir !="" ? "is-invalid" : ""); ?>" id="lahir" placeholder="DD-MM-YYYY" value="<?php echo $lahir; ?>"><span class="warning"><?php echo $error_lahir; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">No.Akta Lahir </label>
    <div class="col-sm-3">
      <input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="Nomor Akta Lahir" value="<?php echo $akta; ?>"><span class="warning"><?php echo $error_akta; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label" >Agama</label>
    <div class="col-sm-3">
      <select name="agama">
      	<option value="---Pilih Agama---"></option>
      	<option value="I">ISLAM</option>
	<option value="K">KRISTEN</option>
	<option value="B">BUDHA</option>
	<option value="KH">KATHOLIK</option>
	<option value="H">HINDU</option>
      </select><span class="warning"><?php echo $error_agama; ?></span>
  </div>
</div>

<div class="form-group row">
			<label for="negara" class="col-sm-2 col-from-label">Kewarganegaraan</label>
			<div class="col-sm-5">
			<input type="radio" id="WNI" name="negara" value="WNI">
			<label for="WNI">WNI</label>
			<input type="radio" id="WNA" name="negara" value="WNA">
			<label for="WNA">WNA</label>
			</div>
			<span class="warning"><?php echo $error_negara; ?></span>
		</div>


<div class="form-group row">
			<label for="khusus" class="col-sm-2 col-from-label">Berkebutuhan Khusus</label>
			<div class="col-sm-5">
			<input type="radio" id="YA" name="khusus" value="YA">
			<label for="YA">YA</label>
			<input type="radio" id="TIDAK" name="khusus" value="TIDAK">
			<label for="TIDAK">TIDAK</label>
			</div>
			<span class="warning"><?php echo $error_jkel; ?></span>
		</div>


<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Nama Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">RT </label>
    <div class="col-sm-1">
      <input type="text" name="RT" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="RT" placeholder="000" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">RW</label>
    <div class="col-sm-1">
      <input type="text" name="RW" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="RW" placeholder="000" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Dusun </label>
    <div class="col-sm-3">
      <input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Kelurahan/Desa </label>
    <div class="col-sm-3">
      <input type="text" name="desa" class="form-control <?php echo ($error_lurah !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="Kelurahan/Desa" value="<?php echo $lurah; ?>"><span class="warning"><?php echo $error_lurah; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Kecamatan </label>
    <div class="col-sm-3">
      <input type="text" name="camat" class="form-control <?php echo ($error_camat !="" ? "is-invalid" : ""); ?>" id="camat" placeholder="Kecamatan" value="<?php echo $camat; ?>"><span class="warning"><?php echo $error_camat; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Kode Pos</label>
    <div class="col-sm-2">
      <input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Nama Ayah</label>
    <div class="col-sm-5">
    <input type="text" name="nama_ayah" class="form-control <?php echo ($error_nama_ayah !="" ? "is-invalid" : ""); ?>" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>"><span class="warning"><?php echo $error_nama_ayah; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
    <div class="col-sm-3">
     <input type="text" name="pekerjaan_ayah" class="form-control <?php echo ($error_pekerjaan_ayah !="" ? "is-invalid" : ""); ?>" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $pekerjaan_ayah; ?>"><span class="warning"><?php echo $error_pekerjaan_ayah; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Nama Ibu</label>
    <div class="col-sm-5">
     <input type="text" name="nama_ibu" class="form-control <?php echo ($error_nama_ibu !="" ? "is-invalid" : ""); ?>" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>"><span class="warning"><?php echo $error_nama_ibu; ?></span>
  </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
    <div class="col-sm-3">
     <input type="text" name="pekerjaan_ibu" class="form-control <?php echo ($error_pekerjaan_ibu !="" ? "is-invalid" : ""); ?>" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $pekerjaan_ibu; ?>"><span class="warning"><?php echo $error_pekerjaan_ibu; ?></span>
  </div>
</div>


<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Anak Ke</label>
    <div class="col-sm-2">
     <input type="text" name="anak" class="form-control <?php echo ($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak Ke-" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
  </div>
</div>

<div class="form-group row">
<label for="telp" class="col-sm-2 col-form-label">Telp</label>
<div class="col-sm-2">
<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
</div>
</div>

<div class="form-group row">
<label for="email" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-5">
<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
</div>
</div>

<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">Daftar</button>
			</div>
		</div>
</form>
</div>
</div>
</div>
</div>

</body>
</html>