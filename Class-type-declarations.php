<?php
require_once 'Playlist.php';

$playlist = new Playlist();

$playlist->addSong('Let the sky fall');
$playlist->addSong('There lived a certain man');

print_r($playlist->songs);
?>
