<?php

// Draw stairs
// Given a number n, draw stairs using the letter "I", n tall and n wide, with the tallest in the top left.

// For example n = 3 result in:
// "I\n I\n  I"

function draw_stairs($n) {
    if (!$n) {
      return "";
    }
    $stairs = "I";
    for ($i = 1; $i < $n; $i += 1) {
      $stairs .= "\n" . str_repeat(" ", $i) . "I";
    }
    return $stairs;
  }
  $n = 3; 
  echo draw_stairs($n);