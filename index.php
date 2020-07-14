<!-- ///////////////////////////////////// -->
<!-- ///////////// PHP SNACK 1 /////////// -->
<?php
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

$matches = [
  [
    'winner' => 'Milano',
    'winner_score' => 44,
    'loser' => 'Roma',
    'loser_score' => 40,

  ],
  [
    'winner' => 'Casertama',
    'winner_score' => 58,
    'loser' => 'Capua',
    'loser_score' => 40,
  ],
  [
    'winner' => 'Firenze',
    'winner_score' => 72,
    'loser' => 'Pisa',
    'loser_score' => 60,
  ]
];
// for ($i=0; $i < count($matches) ; $i++) {
//   $match = $matches[$i];
//   echo $match['winner'] . ' - ' . $match['loser'] . ' | ' . $match['winner_score'] . ' - ' . $match['loser_score'] . '<br>';
// }
?>

<ul>

  <?php for ($i=0; $i < count($matches) ; $i++) { ?>
    <?php $match = $matches[$i]; ?>

    <li> <?php echo $match['winner'] ?> - <?php echo $match['loser'] ?> | <?php echo $match['winner_score']?>-<?php echo $match['loser_score']?></li>

  <?php } ?>

</ul>


<!-- ///////////////////////////////////// -->
<!-- ///////////// PHP SNACK 2 /////////// -->
<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// Message
$message = 'Accesso Riuscito';
// Struttura condizionata
if (empty($name) || empty($mail) || empty($age)) {
  $message = 'Accesso Negato';
} elseif (strlen($name) <= 3) {
  $message = 'Accesso Negato: il nome è troppo corto';
} elseif (!strpos($mail, '@') || !strpos($mail, '.')) {
  $message = 'Accesso Negato: email non è valido';
} elseif (!is_numeric($age)) {
  $message = 'Accesso Negato: il valore "età" non è valido';
}
?>

 <p>Inserire nella query string i seguenti parametri: ?name=alex&mail=alex@gmail.com&age=33</p>
 <p><?php echo $message; ?></p>
