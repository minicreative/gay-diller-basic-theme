#!/bin/bash
cp ./starter-files/front-page.php .
cp ./starter-files/functions.php .
cp ./starter-files/main.scss ./scss
if [ ! -d "./site-includes" ]; then
  mkdir site-includes
fi
cp ./starter-files/head.php ./site-includes/.