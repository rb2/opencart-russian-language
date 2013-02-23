#!/bin/bash
## Compare Opencart language files
## Helps to compare EN and RU files *partially* (only variables, not counting translation string)

CATALOG='total'
diff -b <(cut -d'=' -f1 -s /home/rb/projects/opencart-github-rb2.git/upload/admin/language/english/${CATALOG}/$1) <(cut -d'=' -f1 -s $1) > $1.diff
