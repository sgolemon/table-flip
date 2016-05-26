<?php

class （╯°□°）╯︵┻━┻ extends Exception {
  public function __construct($message = "(╯°□°)╯︵┻━┻", $code = 0) {
    parent::__construct($message, $code);
  }
}

function （╯°□°）╯︵┻━┻($message = "(╯°□°)╯︵┻━┻", $code = 0) {
  throw new （╯°□°）╯︵┻━┻($message, $code);
}
