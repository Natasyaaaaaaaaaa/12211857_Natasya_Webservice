<?php
$url="https://doa-doa-api-ahmadramadhan.fly.dev/api";
$data=file_get_contents($url);
$result = json_decode($data);

echo "<h2>kumpulan doa harian muslim</h2>";
echo "<table border='1'>";
echo "<tr><th>No.</th><th>Judul</th><th>Link</th></tr>";

foreach($result as $index => $doa){
    $judul = $doa->judul;
    $link = $doa->link;
    echo "<tr><td>".($index+1)."</td><td>$judul</td><td><a href='$link' target='_blank'>$link</a></td></tr>";
}

echo "</table>";
?>