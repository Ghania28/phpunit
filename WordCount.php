<?php
//File : WordCount.php
class WordCount
{
    // countWords berfungsi untuk menghitung jumlah kata dalam sebuah teks atau string
    public function countWords($sentence)
    {
        // fungsi explode memisahkan string menjadi array
        return count(explode(" ",$sentence));
    }
}
?>