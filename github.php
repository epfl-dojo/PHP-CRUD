<?php
  error_log(var_export($_REQUEST, true));
  exec('git pull', $output);
?>
