<?php
//Today's topic is nothing but the STRINGS

$comment = 'fuckkkkkkkkkkkkkkk this and damn it, he is a stukach and kozel. I do not like idiots who are also tvars.. shit';

$comment = str_replace('fuck','f***', $comment);
$comment = str_replace('shit','****', $comment);
$comment = str_replace('damn','****', $comment);
$comment = str_replace('stukach','***', $comment);
$comment = str_replace('kozel','****', $comment);
$comment = str_replace('idiot','****', $comment);
$comment = str_replace('tvar','****', $comment);

echo $comment;