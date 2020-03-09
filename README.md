# MODUL-3-4
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

![Alt text](https://github.com/sofiaij/MODUL-3-4/blob/master/1d12.PNG)

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
