#!/bin/bash

for file in pdf/*.pdf; do 
	n=`basename $file .pdf`

	if [ $n -le $1 ]; then
		continue;
	fi;

	# potrebuji wildcard - kvuli hashum (predtim: if [ ! -f img/$n-1.png ]; then)
	ls -U img/$n-* >/dev/null 2>&1
	if [ $? -eq 0 ]; then
		echo File $file ok.
	else
		echo Converting $file...
		nice -n19 ionice -c3 convert -scene 1 -trim -density 100 $file img/$n.png
	fi;
done;
