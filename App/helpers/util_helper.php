<?php
/*fungsi untuk merubah angka menjadi nama status */
/*misal:
* angka 1 menjadi "Aktif"
*/
function status_data($angka = 0)
{
	if ($angka == 1) {
		$str = 'Aktif';
	} else {
		$str = 'Tidak Aktif';
	}

	return $str;
}

function status_yn($angka = 0)
{
	if ($angka == 1) {
		$str = 'Yes';
	} else {
		$str = 'No';
	}

	return $str;
}

/*
* for Generate Random Code (int) for code activation
*/
function genActivationCode($len = 5)
{
    $angka = range(0, 9);
    shuffle($angka);
    return implode('', array_rand($angka, $len));
}

function getMonth($date, $format = '1')
{
	$result = '';
	if ($format == '1') {
		$result = substr($date, 5, 2);
	} elseif ($format == 'I') {
		$month =(int) substr($date, 5, 2);
		$romawi = array(1 => 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
		$result = $romawi[$month];
	}

	return $result;
}

/*
* digunakan untuk memotong string + ....
* return string
*/
function cutStr($input, $len = 150)
{
	$input = strip_tags($input);
	if (strlen($input)>$len)
		$ret = mb_substr($input,0,$len-4)."....";
	else
		$ret = $input;
	return $ret;
}

/*
* convert n to month name
* return string
*/
function toBulan($n = null)
{
	$nm_bulan = array("Januari", "Februari", "Maret",
		   "April", "Mei", "Juni",
		   "Juli", "Agustus", "September",
		   "Oktober", "November", "Desember");
	$n = ((int) $n) - 1;
	return $nm_bulan[$n];
}


function toMonth($n = null)
{
	$nm_bulan = array("Jan", "Feb", "Mar",
		   "Apr", "Mei", "Jun",
		   "Jul", "Aug", "Sep",
		   "Oct", "Nov", "Des");
	$n = ((int) $n) - 1;
	return $nm_bulan[$n];
}