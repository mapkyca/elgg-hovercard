<?php
header('Content-type: application/x-javascript');
echo $_GET['callback']."(".$vars['body'].")";

