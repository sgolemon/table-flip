<?php

class （╯°□°）╯︵┻━┻ extends Exception {
  public function __construct($message = "Nope!", $code = 0) {
    parent::__construct($message, $code);
  }
}

function （╯°□°）╯︵┻━┻($message = "Nope!", $code = 0) {
  throw new （╯°□°）╯︵┻━┻($message, $code);
}
