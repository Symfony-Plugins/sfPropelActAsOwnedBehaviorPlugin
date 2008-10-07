<?php

sfPropelBehavior::registerMethods('paranoid', array(
  array('sfPropelOwnedBehavior', 'forceDelete'),
));

sfPropelBehavior::registerHooks('paranoid', array(
  ':delete:pre'                => array('sfPropelOwnedBehavior', 'preDelete'),
  'Peer:doSelectRS'            => array('sfPropelOwnedBehavior', 'doSelectRS'),
  'Peer:doSelectJoin'          => array('sfPropelOwnedBehavior', 'doSelectRS'),
  'Peer:doSelectJoinAll'       => array('sfPropelOwnedBehavior', 'doSelectRS'),
  'Peer:doSelectJoinAllExcept' => array('sfPropelOwnedBehavior', 'doSelectRS'),
));
