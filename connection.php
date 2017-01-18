<?php

// Inserting into the database is not possible if no default is set for undefined values.
// @link https://www.farbeyondcode.com/Solution-for-MariaDB-Field--xxx--doesn-t-have-a-default-value-5-2720.html
// @link http://stackoverflow.com/questions/15438840/mysql-error-1364-field-doesnt-have-a-default-values
$link = mysqli_connect("localhost", "root", "", "secret-database");

if (mysqli_connect_error()) {

    die("Database Connection Error");

}
