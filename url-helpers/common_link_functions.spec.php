<?php

include_once "common_link_functions.php";


function test_dzsCommon_isAbsoluteWebLink() {

  // -- should be valid link
  assert(dzsCommon_isAbsoluteWebLink('http://ceva'));

  // -- should not be valid link
  assert(!dzsCommon_isAbsoluteWebLink('ceva'));
}


function test_dzsCommon_getPathFromLink() {


  // -- should be valid link
  assert(strpos(dzsCommon_getPathFromLink('http://ceva/common_link_functions.php', 'http://ceva', dirname(__FILE__) . '/'), 'common_link_functions.php') !== false);

}


test_dzsCommon_isAbsoluteWebLink();
test_dzsCommon_getPathFromLink();

echo "\nall tests run if there is no warning on assertions";