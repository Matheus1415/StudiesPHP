<?php

$animes2022 = [
    "Naruto",
    "One Piece",
    "Attack on Titan",
    "Demon Slayer"
];

$animes2023 = [
    "My Hero Academia",
    "Death Note"
];

$animes2024 = [...$animes2022, ...$animes2023];

$animes2024 = array_merge($animes2022, $animes2023);


//pega o ultimo elmento
// echo array_pop($alunos2022);
//Pega o primeiro elemeto
// echo array_shift($alunos2022);

