<?php

  $cmd = array('level' => 'none permit op admin owner',
               'count' => false,
               'help' => 'Shows version information');

  if($execute) {
    $this->say($this->target, false, '@'.$this->username.' I am '.BOTNAME.' (v'.$this->version.') - (c) daeks '.date('Y'));
  }

?>