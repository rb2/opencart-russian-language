#!/bin/bash
## Compare Opencart language files
## Helps to compare EN and RU files *partially* (only variables, not counting translation string)

## run script from ${CATALOG} folder: something like `cmp-lang voucher.php`
## the file voucher.php.diff will be created (overwritten)

AREA='catalog'	## 'admin', 'catalog'
CATALOG='total'
## original files: projects/opencart-github-rb2.git
diff -b <(cut -d'=' -f1 -s /home/rb/projects/opencart-github-rb2.git/upload/${AREA}/language/english/${CATALOG}/$1) <(cut -d'=' -f1 -s $1) > $1.diff
