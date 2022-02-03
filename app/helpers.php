<?php

function get_permission($key){
    $perlist = session()->get('allowed_permissions');
    $per = $perlist[$key];
    return $per;
 }