
<?php 

$bulan = ["januari", "februari", "maret", "april"];

function cetakBulan( $b ) {
	foreach( $b as $value ) {
		echo $value;
		echo "<br>";
	}
}

function angkaGanjilGenap( $param ) {
	if($param % 2 == 0) {
		return $param." angka genap";
	} else {
		return $param." angka ganjil ";
	}
}

/*function luasLingkaran( $r, $pi ) {
	$str = "luas lingkaran $pi x $r^2:";
	
	echo "$str ".($pi * ($r*$r));
	echo "<br>";
}

function 

luasLingkaran(3.14, 7); */

//cetakBulan([1, 2, 3, 4]);

echo angkaGanjilGenap(10) ;