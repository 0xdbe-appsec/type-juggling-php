#!/usr/bin/php

<?php

if ($argc == 3 || in_array($argv[1], array('--password', '-p'))) {

  $admin_password_hash = "0e830400451993494058024219903391";
  $input_password = $argv[2];

  if (md5($input_password) == $admin_password_hash) {

    echo "your are admin\n";

  } else {
  
    echo "401 Unauthorized\n";
  
  }
  
} else {

  echo "password is not defined (--password or -p)\n";

}

?>
