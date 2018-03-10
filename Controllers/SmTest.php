<?php

namespace Controllers;

/**
* Number Processing For General Programming test
*/
class SmTest
{

	/**
	* To Reverse a sentence
	* Membalik kalimat
	* input = "Lorem ipsum dolor"
	* output = "dolor ipsum lorem"
	*/
	public function stringReverse($input)
    {
    	$input = explode(" ", $input); // untuk memecah kata berdasarkan spasi, dan dijadikan array
        /*
        array_reverse : untuk merubah urutan index array
        implode : untuk menggabung array menjadi sebuah kata(string) dipisahkan spasi
        */
    	return implode(" ", array_reverse($input));
    }

    /**
	* To show prime number from specific input
	* Menampilkan bilangan prima dari input
	* input = 10
	* output = 2,3,5,7
	*/
    public function primeNumber($input)
    {
    	$arrPrime = [];    // deklarasi variable arrPrime
    	for($i=1;$i<=$input;$i++){ // looping sepanjang jumlah input
			$isPrime = 0; // deklarasi variable isPrime
    		if ($i == 2 || $i == 3) { // jika i == 2 atau tiga otomatis isPrime = 2
    			$isPrime = 2;
    		}else{
    			for($j=1;$j<=$i;$j++){   // menghitung semua kemungkinan pembagian/modulus
				    if($i % $j==0){ // jika hasil modulus = 0 variable isPrime di lakukan increment
				          $isPrime++;
				    }
				}
    		}
            // jika isPrime = 2 angka, dikarenakan angka prima hanya memiliki 2 pembagi yaitu 1 dan angka itu sendiri
	        if($isPrime==2){ 
				$arrPrime[] = $i; // variable i di masukkan ke array arrPrime
	        }
	    }
        // mengembalikan nilai arrPrime dalam bentuk string
	    return implode(",", $arrPrime);
    }

    /**
    * To Show Lowest Number, Highest Number, Average, Median from series of number
    * Menampilkan Angka terkecil, Angka Terbesar, Rata-rata, Media dari suatu deret angka
    * sample input = 1,2,3,4,5,6,7,8,9,10,5.6
    */
    public function avgNumber($input)
    {
        $input = explode(",", $input); // memecah data berdasarkan koma(,) dan di masukkan kedalam array
        sort($input);  // mengurutkan array
        $result = "";   // inisialisai variable result
        // angka terkecil setelah array di urutkan berada pada index ke 0
        $result .= "Angka terkecil (Lowest Number) = ".$input[0]."<br>"; 
        // angka terkecil setelah array di urutkan berada pada index terakhir, dimana index terakhir di ambil dengan cara jumlah elemen array dikurang 1
        $result .= "Angka terbesar (Highest Number) = ".$input[count($input)-1]."<br>";
        // rata-rata di hitung dengan cara setiap data dalam array dijumlahkan kemudian dibagi dengan jumlah elemen
        $result .= "Rata-Rata (Average) = ".(array_sum($input)/count($input))."<br>";

        $median = ""; // inisialisasi varible median
        if (count($input) % 2 == 0) {  // untuk jumlah data yang genap
            // hitung posisi mendian dengan cara ((n/2)+((n/2)+1))/2            
            $position = ((count($input)/2)+((count($input)/2)+1))/2;
            // misal variable posision menghasilkan nilai 5.5 berarti data berada di posisi index 5 dan 6

            // floor : pembulatan ke bawah misal 5.5 = 5 => untuk menghasilkan posisi ke 5
            $position_1 = floor($position)-1;
            // ceil : pembulatan ke bawah misal 5.5 = 6 => untuk menghasilkan posisi ke 6
            $position_2 = ceil($position)-1;
            // median diambil dari penjumalah input index ke 5 dan 6 dibagi 2
            $median = ($input[$position_1]+$input[$position_2])/2;
        }else{ // untuk jumlah data yang ganjil
            $position = (count($input)+1)/2;
            $median = $input[$position-1];
        }
        $result .= "Median = {$median}<br>";
        // dikarenakan array sudah diurutkan, untuk menampilkan urutan dilakukan dengan cara menggabungkan
        // data menggunakan implode
        $result .= "Urutan (Sorted) = ".implode(",", $input);
        return $result;
    }
}