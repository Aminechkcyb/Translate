<?php
if (isset($_POST['word'])) {
  $word = strtolower($_POST['word']); // Convertit le mot en minuscules
  $sourceLang = $_POST['source-lang'];
  $targetLang = $_POST['target-lang'];

  $dictionaries = array(
    'Anglais' => array(
      'hello' => 'Bonjour',
      'how' => 'Comment',
      'book' => 'Livre',
      'computer' => 'Ordinateur'
    ),
    'Français' => array(
      'bonjour' => 'hello',
      'comment' => 'how',
      'livre' => 'book',
      'ordinateur' => 'computer'
    )
  );

  if (isset($dictionaries[$sourceLang][$word])) {
    $translation = $dictionaries[$sourceLang][$word];
    $output = ucfirst($word) . " en " . $sourceLang . " est " . ucfirst($translation) . " en " . $targetLang;
    echo "<h1>" . $output . "</h1>";
  } else {
    echo "<h1>Le mot '" . $word . "' n'a pas été trouvé dans le dictionnaire " . $sourceLang . ".</h1>";
  }
}
?>
