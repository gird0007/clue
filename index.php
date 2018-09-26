<?php
$rooms = [
  'Study' => [
    'items' => ['Mrs. White', 'the Rope']
  ],
  'Hall' => [
    'items' => ['the Lead Pipe']
  ],
  'Lounge' => [
    'items' => ['Professor Plum']
  ],
  'Library' => [
    'items' => ['the Candlestick']
  ],
  'Dining Room' => [
    'items' => ['Mrs. Peacock']
  ],
  'Billard Room' => [
    'items' => ['Colonel Mustard', 'the Wrench']
  ],
  'Conservatory' => [
    'items' => []
  ],
  'Ballroom' => [
    'items' => ['Mr. Green']
  ],
  'Kitchen' => [
    'items' => ['the Knife']
  ]
];

if (isset($_GET['room']) && isset($rooms[$_GET['room']])) {
  $items = $rooms[$_GET['room']]['items'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clue</title>
  <link rel="stylesheet" href="clue.css">
</head>
<body>
  
  <header>
    <h1>Clue</h1>
  </header>
  <div class="items"> 
  <?php if (isset($items)) : ?>
    <?php if (count($items)) : ?>
    <p>You found <?php echo implode(' and ', $items); ?>
    <?php else : ?>
    <p>You found nothing</p>
    <?php endif; ?>
  <?php else : ?>
    <p>Select a room to get a clue.</p>
  <?php endif; ?>
  </div>
  <main class="container">
  <?php foreach ($rooms as $room => $items) : ?>
      <div class="room">
        <a href="?room=<?php echo $room; ?>"><?php echo $room; ?></a>
      </div>
    <?php endforeach; ?>
      <!-- <div class="room">
        <a href="?room=Hall">Hall</a>
      </div>
      <div class="room">
        <a href="?room=Lounge">Lounge</a>
      </div>
      <div class="room">
        <a href="?room=Library">Library</a>
      </div>
      <div class="room">
        <a href="?room=Dining Room">Dining Room</a>
      </div>
      <div class="room">
        <a href="?room=Billard Room">Billard Room</a>
      </div>
      <div class="room">
        <a href="?room=Conservatory">Conservatory</a>
      </div>
      <div class="room">
        <a href="?room=Ballroom">Ballroom</a>
      </div>
      <div class="room">
        <a href="?room=Kitchen">Kitchen</a>
      </div> -->
  </main>
</body>
</html>