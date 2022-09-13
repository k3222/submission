<?php
$val = "a";
if (isNumber($val)) {
  echo "valは数字です";
} else {
  echo "valは数字ではありません";
}

function isNumber($x){
    return is_numeric($x);
}
?>