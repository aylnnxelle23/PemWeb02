<?php

$profileArray = ["nama" => "Ayeleen",
                "semester" => 7];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Erina Nurul",
        "semester" => 2
    ], [
        "nama" => "Nia",
        "semester" => 2
    ]
];
    foreach($profileMultiArray as $profile) {
        echo $profile["nama"] . "<br>";
        echo $profile["semester"] . "<br>";
    }