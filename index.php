<?php


$persone = [
    ['nome' => 'Marco', 'cognome' => 'Canepa', 'gender' => 'signor' ],
    ['nome' => 'Dario', 'cognome' => 'Carli', 'gender' => 'signor' ],
    ['nome' => 'Giulia', 'cognome' => 'Urso', 'gender' => 'signora' ],
    ['nome' => 'Giovanni', 'cognome' => 'Sperotto', 'gender' => 'signora' ]
];

foreach ($persone as $persona) {
    echo "buongiorno" . ' ' . $persona['gender'] . ' ' . $persona['nome'] . ' ' . $persona['cognome'] . "\n";
};