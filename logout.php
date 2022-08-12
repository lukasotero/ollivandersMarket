<?php

require_once("assets/helpers/autoload.php");

if(Auth::validate()){
    Auth::destroy();
}

header('Location: index.php');