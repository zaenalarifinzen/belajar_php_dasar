<?php

# Menggunakan Single Quote
echo 'Nama : ';
echo 'Zaenal Arifin';

# Menggunakan Double Quote, kelebihannya kita bisa menambakan escape sequence seperti enter, tab dll
echo "Name : ";
echo "Zaenal Arifin\n";
echo "Fathur\t  Rohmah\n";

# Multiline Heredoc
echo <<<ZEN
Ini adalah teks yang panjang
kita bisa menambahkan enter biasa disini tanpa menuliskan escape sequence
bisa juga menambahkan quote "seperti ini"
ZEN;

# Multiline Newdoc, namun disini tidak punya kemampuan untuk parsing seperti heredoc
echo <<<'ZEN'
Ini adalah teks yang panjang
kita bisa menambahkan enter biasa disini tanpa menuliskan escape sequence
bisa juga menambahkan quote "seperti ini"
ZEN;