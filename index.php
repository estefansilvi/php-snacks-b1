<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- snack-1 -->
    <?php

    echo '<h1><b>Snack 1 - Partite di Basket di un’ipotetica tappa del calendario</b></h1>';
    $matches = [
      [
        'homeTeam' => 'Dinamo Sassari',
        'guestTeam' => 'Venezia',
        'homeTeamPoints' => 96,
        'guestTeamPoints' => 88
      ],
      [
        'homeTeam' => 'Brindisi',
        'guestTeam' => 'Trieste',
        'homeTeamPoints' => 81,
        'guestTeamPoints' => 74
      ],
      [
        'homeTeam' => 'Cremona',
        'guestTeam' => 'Trento',
        'homeTeamPoints' => 95,
        'guestTeamPoints' => 87
      ],
      [
        'homeTeam' => 'Olimpia MIlano',
        'guestTeam' => 'Fortitudo Bologna',
        'homeTeamPoints' => 98,
        'guestTeamPoints' => 72
      ],
      [
        'homeTeam' => 'Cantù',
        'guestTeam' => 'Treviso',
        'homeTeamPoints' => 105,
        'guestTeamPoints' => 54
      ],
      [
        'homeTeam' => 'Brescia',
        'guestTeam' => 'Reggiana',
        'homeTeamPoints' => 42,
        'guestTeamPoints' => 99
      ]
    ];

    for ($i = 0; $i < count($matches); $i++) {
      $partita = $matches[$i];
      echo $partita['homeTeam'] . ' - ' . $partita['guestTeam'] . ' | ' . $partita['homeTeamPoints'] . ' - ' . $partita['guestTeamPoints'] . '<br><br>';
    };

    // SNACK 2*********************************************************
    echo '<h1><b> Snack 2 - Passare come parametri GET name, mail e age</b></h1>';

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
      echo 'Accesso autorizzato. Benvenuto/a';
    } else {
      echo 'Attenzione! Accesso negato!';
    }

    ?>


  </body>
</html>
