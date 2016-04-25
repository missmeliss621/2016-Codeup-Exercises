<?php

function parseContacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", $contents);
    fclose($handle);

    // todo - read file and parse contacts

    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));
