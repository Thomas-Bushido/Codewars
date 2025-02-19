<?php

declare(strict_types=1);

// A grid of numbers with an equal height and width is given and your task is to find the largest possible product between four adjacent numbers in the same direction. The directions can be horizontal, vertical or diagonal.

// Some example grids are shown below.

// 04 04 04 04 01 01  |  04*04*04*04 = 256
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |

// 01 01 01 01 01 04  |  04*04*04*04 = 256
// 01 01 01 01 01 04  |
// 01 01 01 01 01 04  |
// 01 01 01 01 01 04  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |

// 04 01 01 01 01 01  |  04*04*04*04 = 256
// 01 04 01 01 01 01  |
// 01 01 04 01 01 01  |
// 01 01 01 04 01 01  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |

// 01 01 01 04 01 01  |  04*04*04*04 = 256
// 01 01 04 01 01 01  |
// 01 04 01 01 01 01  |
// 04 01 01 01 01 01  |
// 01 01 01 01 01 01  |
// 01 01 01 01 01 01  |
// The smallest grid that can be given is 4x4 and the contained numbers will have a minimum value of 1 and a maximum value of 99.

// A solution should be created to test all combinations of vertical, horizontal and diagonal lines.

// Adapted from Project Euler.




function getLargestProduct(array $grid): int
{
    
    $size = count($grid);
    var_dump(count($grid));
    $maxProduct = 0;

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
           
            if ($j + 3 < $size) { 
                $maxProduct = max($maxProduct, $grid[$i][$j] * $grid[$i][$j+1] * $grid[$i][$j+2] * $grid[$i][$j+3]);
            }
            if ($i + 3 < $size) { 
                $maxProduct = max($maxProduct, $grid[$i][$j] * $grid[$i+1][$j] * $grid[$i+2][$j] * $grid[$i+3][$j]);
            }
            if ($i + 3 < $size && $j + 3 < $size) { 
                $maxProduct = max($maxProduct, $grid[$i][$j] * $grid[$i+1][$j+1] * $grid[$i+2][$j+2] * $grid[$i+3][$j+3]);
            }
            if ($i + 3 < $size && $j - 3 >= 0) { 
                $maxProduct = max($maxProduct, $grid[$i][$j] * $grid[$i+1][$j-1] * $grid[$i+2][$j-2] * $grid[$i+3][$j-3]);
            }
        }
    }

    return $maxProduct;
}


echo getLargestProduct($grid); 
?>