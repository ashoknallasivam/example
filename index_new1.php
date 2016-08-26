<?php
$link = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
print_r($link);
