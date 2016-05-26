<?php

class （╯°□°）╯︵┻━┻ extends Exception {
  public function __construct($message = __CLASS__, $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}

function （╯°□°）╯︵┻━┻($message = __FUNCTION__, $code = 0, $previous = null) {
  throw new （╯°□°）╯︵┻━┻($message, $code, $previous);
}
