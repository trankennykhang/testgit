<?php
print "Welcome ";
$name = "Kenny";
$lazy = function($a) use($id, $name) {
    print $name;
    print "<br/>";
    print $a;
};
$lazy("Khang");
?>