#!/usr/bin/env bash
sort ../jon.txt | uniq -u
cd downloads
cat ../jon.txt | while read url

do
   echo $url
   wget $url
done