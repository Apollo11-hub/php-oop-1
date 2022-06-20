<?php 

require_once __DIR__ . "/movie.php";


$movie=[];
$harry_potter = new Movie('Harry Potter','Fantasy', 1995);
$harry_potter->setRating(6);
$movie[] = $harry_potter;


$orfani = new Movie('Orfani','Sci-fi', 2015);
$orfani->setRating(8);
$movie[] = $orfani;

var_dump($harry_potter);
var_dump($orfani);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>
<body>
  <h1>Film</h1>
    <div <?php foreach ($movie as $key ) : ?> >
      <h5>Titolo:</h5>
      <p><?php echo $key->title ?></p>
      <h5>Genere:</h5>
      <p><?php echo $key->genre ?></p>
      <h5>Anno Uscita:</h5>
      <p><?php echo $key->release ?></p>
      <h5>Rating:</h5>
      <p><?php echo $key->getRating() ?></p>

    </div <?php endforeach; ?>>

</body>
</html>