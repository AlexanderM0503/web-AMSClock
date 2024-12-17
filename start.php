<?php

include "config.inc.php";

if (file_exists("./config.local.php"))
{
    include "config.local.php";
}

if (!file_exists($CONF["db_file"]))
{
    $db = new SQLite3($CONF["db_file"]);
    $sql = "CREATE TABLE events
            (
                id_evnt INTEGER PRIMARY KEY AUTOINCREMENT,
                date_evnt TEXT,
                title_evnt TEXT,
                text_evnt TEXT
            )";
    $db->exec($sql);
    $db->close();
}
