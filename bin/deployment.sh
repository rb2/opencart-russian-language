#!/bin/bash
cd ..
git log --pretty=format:"%h %ci %s" > ./history.txt
zip -r opencart-russian-lang-v1.5.5.zip admin catalog README.* history.txt
rm -f history.txt
