#!/bin/bash
cat links | while read url
do
   wget $url
done