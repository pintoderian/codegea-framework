<?php
foreach(glob("models/*.php") as $file){
    require_once $file;
}