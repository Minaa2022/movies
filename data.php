<?php
session_start();
$movies = json_decode(file_get_contents('movies.json'), 1);

if (isset($_SESSION['movies'])) {
  $movies = $_SESSION['movie'];
} else {
  $_SESSION['movies'] = $movies;
} ?>
$genres = [
'Fantasy',
'Sci-Fi',
'Action',
'Comedy',
'Drama',
'Horror',
'Romance',
'Family',
];