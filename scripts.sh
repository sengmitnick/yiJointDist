#!/bin/bash
DATE=$(date +"%Y-%m-%d %H:%M:%S")
rm -fr ![.git] ![scripts.sh] ![README.md]
# cp -rf ~/Sites/yiJint/api .
cp -rf ../yiJoint/dist/* .
# git add --all .
# git commit -m "updata website ${DATE}"
# git push -u origin master