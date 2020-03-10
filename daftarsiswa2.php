<html>
<head>
<title> Daftar Siswa </title></head>
<body>
<h4>Isilah formulir dibawah ini dengan baik dan benar ! </h4>
<hr>
<table>
<h3><p align= "center">Daftar Siswa SMK Telkom Mlg</p></head>
<form name="form1" method="post" action="daftarsiswa1.php">


<tr>
<td>Nis</td>
<td><input type="text" name="Nis" size="20"></td>
</tr>
<tr>
<td>Nama Depan</td>
<td><input type="text" name="Namad" size="20"></td>
</tr>
<tr>
<td>Nama Belakang</td>
<td><input type="text" name="Namab" size="20"></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td><input type="text" name="Tempat" size="20"></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="Tanggal" size="30"></td>
</tr>
<tr>
<td>Agama</td>
<td><select name="Agama">
<option  value = "">Agama</option>
        <option  value = "islam">Islam</option>
        <option  value = "kristen">Kristen</option>
        <option  value = "katolik">Katolik</option>
        <option  value = "hindu">Hindu</option>
        <option  value = "budha">Budha</option>
            </select>
</td>
</tr>
</tr>
<tr>
<td>Jenis Kelamin</td>
      <td><input type='radio' name='jeniskelamin' value='L' />Laki-laki</td>
      <td><input type='radio' name='jeniskelamin' value='P' />Perempuan</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email"  size="20"></td>
</tr>
<tr>
<td>Telepon</td>
<td><input type="text" name="Telepon" size="20"></td>
</tr>
<tr>
<td>Instagram</td>
<td><input type="text" name="Instagram" size="20"></td>
</tr>
<tr>
<td>Facebook</td>
<td><input type="text" name="Facebook" size="20"></td>
</tr>
<tr>
<td>Website</td>
<td><input type="text" name="Website" placeholder="https://" size="20"></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="Alamat" rows="5" cols="20">
</textarea> 
</td>
</tr>
<tr>
<td>Jurusan</td>
<td><select name="jurusan">
<option  value = "">Pilih jurusan </option>
<option value = "RPL">Rekayasa Perangkat Lunak</option>
<option  value = "TKJ">Teknik Komputer dan Jaringan</option>
</select>
</td>
</tr>
<tr>
<td>Kelas</td>
<td><select name="kelas">
<option  value = "">Pilih kelas </option>
		<option  value = "X">10</option>
        <option  value = "XI">11</option>
        <option  value = "XII">12</option>
            </select>
</td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="Username" size="20"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="Password" size="20"></td>
</tr>
<tr>
<td>Pesan</td>
<td><textarea name="Pesan" rows="5" cols="20">
</textarea>
</td>
</tr>
<br>
<tr>
<td><input type="submit" name="submit" value="Submit"></button>
</td>
</tr>
</br>
</table>
</body>
</head>
</html>