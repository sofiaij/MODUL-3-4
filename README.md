# MODUL-3-4 
# TUGAS BUKU



#  MODUL 3
a.Bentuk	if	Perintah	IF	ini	akan	menjalankan	statement	jika	kondisinya	bernilai	benar	(True).	

if (kondisi) {         statement-jika-kondisi-true; } 

Kondisi	merupakan	statemen	atau	variable	yang	akan	diperiksa	TRUE	atau	FALSE-nya	
	
  b.			Bentuk	if	else	Dalam			bentuk			ini			jika		ekpresi			bernilai			benar		maka		statement_1			akan	dijalankan,	tetapi	jika	salah	maka	statement_2	yang	akan	dijalankan.	
	
  if (kondisi) {       statement-jika-kondisi-true;  } else {       statement-jika-kondisi-false; } 	
	
  Kondisi	merupakan	statemen	atau	variable	yang	akan	diperiklsa	TRUE	atau	FALSE-nya.	Jika	kondisinya	TRUE	maka	statemen	yang	berada	di	blok	if	akan	dieksekusi,	sebaliknya	jika	konfidinya	FALSE	maka	statemen	yang	berada	di	blok	else	yang	akan	dieksekusi.	
	
  c.			Bentuk	if	–	else	if	Bentuk	if-else	if	ini	cocok	untuk	melakukan	pengambilan	keputusan	yang	melibatkan	banyak	kondisi.		
  
  if(kondisi_1) {       statement-jika-kondisi-1-true;  }  else if(kondisi_2) {       statement-jika-kondisi-2-true; } else if (kondisi_n){  statemen-jika-kondisi-n-true; 
  
  d.	Bentuk	Kondisi	Khusus	?	:	
	
  (Kondisi) ? benar : salah; 
  
  Kondisi	merupakan	statemen	atau	variable	yang	akan	diperiksa	TRUE	atau	FALSE-nya.	Statemen	pada	blok	benar	dan	salah	hanya	boleh		satu	statemen	saja.	
	
  e.			Bentuk	Switch	Case	Pada	prinsipnya	penggunaan	switch	hampir	sama	dengan	pengunaan	kondisi	if–elseif.	Dalam	pengunaan	switch	juga	disertakan	perintah	break.	Tanpa	perintah	break	semua	peryataan	akan	dijalankan.	Bentuk	pernyataan	switch	yaitu	:	
	
  switch ($var){ case ‘1’: statemen-1; break; 
 case ‘2’: statemen-2; break; 
 case ‘n’: statemen-n; break; } 
 
 $var	merupakan	variable	yang	akan	diperiksa	isi	atau	nilainya.	Tipe	data	variable	ini	tidak	dibatasi.	Value	atau	isi		pada	case	juga	bias	berupa	string,	integer,	boolean.	Boleh	menggunakan	kutip	tunggal	maupun	kutip	ganda.	
 
 # Latihan	1
 ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/1c.PNG)
 
 Pada	program	di	atas,	terdapat	pemeriksaan	kondisi	apakah	isi	variabel	$nilai	lebih	dari	75	(baris	3).	Jika	kondisi	ini	bernilai	TRUE	(variabel	$nilai	berisi	nilai	yang	lebih	besar	dari	75)	maka	statement	pada	baris	ke-4	akan	dijalankan.	Sebaliknya	jika	kondisinya	FALSE,	maka	statement	pada	baris	ke-4	tidak	akan	dijalankan.	
 
 # Latihan	2	
 ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/2c.PNG)
 
 Pada	program	di	atas,	terdapat	pemeriksaan	kondisi	apakah	isi	variabel	$nilai	lebih	dari	60	(baris	3).	Jika	kondisi	ini	bernilai	TRUE	(variabel	$nilai	berisi	nilai	yang	lebih	besar	dari	60)	maka	statement	pada	baris	ke-4	akan	dijalankan.	Sebaliknya	jika	kondisinya	FALSE,	maka	statement	pada	baris	ke-6	yang	akan	dijalankan.	Pada	contoh	program	di	atas,	kondisi	pada	baris	ke-3	bernilai	FALSE	karena	isi	variabel	$nilai	adalah	50.	
 
 # Latihan	3	
 ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/3c.PNG)
 
 Pada	program	di	atas,	terdapat	pemeriksaan	kondisi	apakah	isi	variabel	$nilai	sama	dengan	“firdausa”	dan	apakah	isi	variabel	$pass	sama	dengan	“123”.	Jika	kedua	kondisi	tersebut	bernilai	TRUE	maka	statement	login	berhasil	akan	dijalankan.	Sebaliknya	jika	salah	satunya	bernilai	FALSE,	maka	statement	login	gagal	akan	dijalankan
 
 # Latihan	4	
  ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/4c.PNG)
  
  Pada	program	di	atas,	terdapat	fungsi	isset()	yang	merupakan	fungsi	untuk	memeriksa	apakah	suatu	variabel	sudah	terbentuk	(ada)	atau	belum.	Fungsi	akan	bernilai	TRUE	jika	variabelnya	ada.	Jadi	jika	baris	ke-2	dari	program	di	atas	dihilangkan	maka	statemen	pada	baris	ke-4	yang	akan	dijalankan.	
  
  # Latihan	5
   ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/5c.PNG)
   
   Pada	program	di	atas,	variabel	$day	(baris	ke-2)	akan	berisi	3	(tiga)	digit	pertama	dari	nama	hari	dalam	bahasa	Inggris.	Dengan	fungsi	date(),	kita	akan	memperoleh	informasi	tanggal,	hari	dan	waktu	sekarang.	Selanjutnya	isi	variabel	$day	akan	diperiksa	dengan	switch	(baris	ke-3),	jika	isinya	adalah	‘Sun’	maka	$hari	adalah	“Minggu”	dan	seterusnya.	
	
  # Latihan	6
  ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/6c.PNG)
  
  Pada	program	di	atas,	fungsi	date()	dengan	parameter	“Y”	(baris	ke-2)	akan	menghasilkan	4	digit	tahun	sekarang.	Pada	baris	ke-3	akan	diperiksa	apakah	isi	variabel	$tahun	jika	dimodulus	dengan	4	akan	menghasilkan	nilai	0.	Jika	TRUE	maka	$kabisat	akan	berisi	“KABISAT”	dan	jika	FALSE	$kabisat	akan	berisi	“BUKAN	KABISAT”.	
	
  # TUGAS	
	
 ![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/lgin.PNG)
 
 
 # MODUL 4
## Dasar Teori

Fungsi adalah sekumpulan intruksi yang dibungkus dalam sebuah blok. Fungsi dapat digunakan ulang tanpa harus menulis ulang instruksi di dalamnya.
Fungsi pada PHP dapat dibuat dngan kata kunci function, lalu diikuti dengan nama fungsinya.

Cara pemanggilan fungsi cukup dengan menuliskan nama dari fungsi tersebut. Fungsi ini bisa dipanggil berulang – ulang dan dapat diletakkan di bagian manapun. Aturan pembuatan fungsi sama dengan aturan dalam pembuatan variabel.

## Cara penulisan fungsi:

function nama_fungsi (parameter1, parameter 2, parameter n){ statement;

}

## Jenis-Jenis Fungsi
### 1.Fungsi dengan Parameter

Parameter digunakan sebagai input untuk fungsi yang selanjutnya diolah oleh fungsi tersebut. Jumlah parameter dari fungsi boleh lebih dari satu. Untuk memisahkan antar parameter digunakan tanda koma (,).

### 2.Fungsi dengan Return Value

Sebuah fungsi juga dapat mengembalikan suatu nilai. Dalam sebuah fungsi hanya boleh terdapat satu return value. Nilai yang dikembalikan dapat berupa suatu bilangan real dan string.

### 3.Fungsi Tanpa Parameter dan Return Value

Sebuah fungsi yang tidak memiliki parameter dan return value biasanya digunakan untuk menampilkan suatu mekanisme atau tampilan, di mana mekanisme tersebut tidak memerlukan inputan dan nilai kembalian / return value.

### 4.Fungsi dengan parameter default

Nilai default dapat diberikan di parameter. Nilai default berfungsi untuk mengisi nilai sebuah parameter, kalau parameter tersebut tidak diisi dengan inputan nilainya.

# Latihan 1

## Latihan Penerapan Fungsi
![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/1d.PNG)

## Fungsi dengan parameter
![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/1d2.PNG)
Penerapan fungsi untuk menampilkan bilangan ganjil sesuai dengan parameter yang dimasukan. Parameter tersebut berfungsi untuk menentukan batasan bilangan ganjil yang akan ditampilkan.

# Latihan 2
## Fungsi dengan return value
![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/2d.PNG)

Penerapan fungsi untuk menghitung luas lingkaran dengan menerapkan return value. Return value tersebut digunakan untuk mengembalikan nilai hasil perhitungan luas lingkaran, sehingga output dari pemanggilan fungsi tersebut berupa luas lingkaran.

# Latihan 3
## 3.	Fungsi tanpa parameter dan return value
![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/3d.PNG)

Penerapan fungsi tanpa parameter dan return value. Kegunaan dari contoh script di atas adalah untuk menambahkan komponen-komponen import data yang biasanya terdapat di dalam <head></head>. Komponen tersebut kemudian dijadikan satu dalam bentuk fungsi agar dapat dipanggil dihalaman lain yang membutuhkan komponen-komponen tersebut. Dengan kata lain agar tidak terjadi duplikasi script di setiap halaman. Hal ini juga mempermudah kita dalam penambahan, pengurangan, maupun pengubahan komponen, karena tidak perlu mengubahnya disetiap halaman, tapi hanya perlu mengubah di fungsi ini saja. Secara otomatis halaman lain akan mengikuti perubahan tersebut.

# Latihan 4 
## Memanggil fungsi file lain di dalam 
