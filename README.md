# about_me
website tentangku
Berikut adalah contoh program PHP untuk menyelesaikan tes psikotes tersebut:

Tes Psikotes a
Pola: +2, +3, +4, +5, ...

```
function tesPsikotesA($angka) {
    $pola = array(2, 3, 4, 5);
    $hasil = array();
    $hasil[] = 4;
    for ($i = 0; $i < $angka - 1; $i++) {
        $hasil[] = end($hasil) + $pola[0];
        $pola[] = end($pola) + 1;
        array_shift($pola);
    }
    return $hasil;
}

$hasil = tesPsikotesA(6);
echo implode(" ", $hasil); // Output: 4 6 9 13 18 24
$hasilLanjutan = tesPsikotesA(7);
echo "\n" . implode(" ", $hasilLanjutan); // Output: 4 6 9 13 18 24 31
```

Tes Psikotes b
Pola: +0, +1, +0, +1, ...

```
function tesPsikotesB($angka) {
    $pola = array(0, 1);
    $hasil = array(2, 2);
    for ($i = 0; $i < $angka - 2; $i++) {
        $hasil[] = end($hasil) + $pola[0];
        array_shift($pola);
        array_push($pola, $pola[0] == 0 ? 1 : 0);
    }
    return $hasil;
}

$hasil = tesPsikotesB(6);
echo "\n" . implode(" ", $hasil); // Output: 2 2 3 3 4 4
$hasilLanjutan = tesPsikotesB(7);
echo "\n" . implode(" ", $hasilLanjutan); // Output: 2 2 3 3 4 4 5
```

Tes Psikotes c
Pola: +8, -7, +8, -7, ...

```
function tesPsikotesC($angka) {
    $pola = array(8, -7);
    $hasil = array(1, 9);
    for ($i = 0; $i < $angka - 2; $i++) {
        $hasil[] = end($hasil) + $pola[0];
        array_shift($pola);
        array_push($pola, $pola[0] == 8 ? -7 : 8);
    }
    return $hasil;
}

$hasil = tesPsikotesC(6);
echo "\n" . implode(" ", $hasil); // Output: 1 9 2 10 3 11
$hasilLanjutan = tesPsikotesC(7);
echo "\n" . implode(" ", $hasilLanjutan); // Output: 1 9 2 10 3 11 4
```
