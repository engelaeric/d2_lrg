<?php
function compare_ver($v1, $v2) {
  if ($v1[0] == $v2[0] && $v1[1] == $v2[1] && $v1[2] == $v2[2] && $v1[3] == $v2[3])
    return 0;
  if ($v1[0] > $v2[0] || $v1[1] > $v2[1] || $v1[2] > $v2[2] || $v1[3] > $v2[3])
   return 1;
  if ($v1[0] < $v2[0] || $v1[1] < $v2[1] || $v1[2] < $v2[2] || $v1[3] < $v2[3])
   return -1;
}

function compare_major_ver($v1, $v2) {
  if ($v1[0] == $v2[0])
    return 0;
  if ($v1[0] > $v2[0])
   return 1;
  if ($v1[0] < $v2[0])
   return -1;
}

function parse_ver($ver) {
  $res = $ver[0].".".$ver[1].".".$ver[2];
  if ($ver[3] < 0) {
    if($ver[3] == -1) $res .= "-rc2";
    if($ver[3] == -2) $res .= "-rc1";
    if($ver[3] == -3) $res .= "-beta";
    if($ver[3] == -4) $res .= "-alpha";
  } else if ($ver[3] > 0) {
    $res .= "-r".$ver[3];
  }

  if($ver[3]) $res .= "-".$ver[4];

  return $res;
}

 ?>
