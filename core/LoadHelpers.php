<?php
foreach(glob("core/helpers/*.php") as $file){
    require_once $file;
}