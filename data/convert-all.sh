#!/bin/bash

for file in pdf/*.pdf; do 
	n=`basename $file .pdf`
	if [ ! -f img/$n-1.png ]; then
		echo Converting $file...
		nice -n19 ionice -c3 convert -scene 1 -trim -density 100 $file img/$n.png
	fi;
done;
