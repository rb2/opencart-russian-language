#!/bin/bash
## Ruslan Brest, 2013
## http://rb.labtodo.com/

## Compare Opencart language files
## Helps to compare EN and RU files *partially* (only variables, not counting translation string)

function detect
{
	## original files are from projects/opencart-github-rb2.git
	diff -b <(cut -d'=' -f1 -s /home/rb/projects/opencart-github-rb2.git/upload/${AREA}/language/english/${CATALOG}/$1) <(cut -d'=' -f1 -s $1) > $1.diff

	# remove tmp file if its size = 0
	[ -s $1.diff ] || rm $1.diff
}

PROJECT='/home/rb/projects/opencart-russian-language'

AREA='admin'
cd $PROJECT/${AREA}/language/russian/
for CATALOG in catalog common design error extension feed localisation mail module payment report sale setting shipping tool total user
do
	cd ${CATALOG}
	for file in *.php; do
		detect $file
	done
	cd ..
done

AREA='catalog'
cd $PROJECT/${AREA}/language/russian/
for CATALOG in account affiliate checkout common error information mail module payment product shipping total
do
	cd ${CATALOG}
	for file in *.php; do
		detect $file
	done
	cd ..
done
