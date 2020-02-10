<?php
//Get
//Post
//Request
//Type juggling - 1 data typedan boshqa data typega o'zgartirish


$text = 'Sukhrob';

$text = (bool) $text;

echo gettype($text);