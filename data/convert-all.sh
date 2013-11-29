#!/bin/bash

for file in pdf/*.pdf; do 
	n=`basename $file .pdf`

	if [ $n -le $1 ]; then
		continue;
	fi;

	if [ ! -f img/$n-1.png ]; then
		echo Converting $file...
		nice -n19 ionice -c3 convert -scene 1 -trim -density 100 $file img/$n.png
		pdftk $file dump_data > $file.bookmarks
	fi;
done;
