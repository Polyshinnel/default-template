<?php

setcookie('user',$user,time()-(86400 * 301),'/');
$new_url = '/';
header('Location: '.$new_url);