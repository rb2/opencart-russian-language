#!/bin/bash
## Ruslan Brest, 2013
## http://rb.labtodo.com/

## Compare Opencart language files from $PROJECT path with `opencart-github` (english core)
## Helps to compare EN and RU files *partially* (only variables, not counting translation string)

function detect
{
	## original files are from projects/opencart-github.git
	diff -b <(cut -d']' -f1 -s /home/rb/projects/opencart-github/upload/${AREA}/language/english/${CATALOG}/$1) <(cut -d']' -f1 -s $1) > $1.diff

	# remove tmp file if its size = 0
	[ -s $1.diff ] || rm $1.diff
}

PROJECT='/home/rb/projects/opencart-russian-language'

AREA='admin'
cd $PROJECT/${AREA}/language/russian/
for CATALOG in catalog common design error extension feed localisation mail marketing module payment report sale setting shipping tool total user
do
	cd ${CATALOG}
	for file in *.php; do
		detect $file
	done
	cd ..
done

AREA='catalog'
cd $PROJECT/${AREA}/language/russian/
for CATALOG in account affiliate api checkout common error information mail module payment product shipping tool total
do
	cd ${CATALOG}
	for file in *.php; do
		detect $file
	done
	cd ..
done
