#!/bin/bash
cd ..
git log --pretty=format:"%h %ci %s" > ./history.txt
zip -r opencart-russian-lang-v1.5.1.1.zip admin catalog README.* history.txt info.txt
rm -f ./history.txt
