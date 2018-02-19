<?php

$booksjson = file_get_contents('books.json');

$books = json_decode($booksjson, true);

dump($books['The Bell Jar']);
