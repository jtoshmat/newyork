#!/bin/bash
cd /Applications/XAMPP/xamppfiles/htdocs/newyork/scripts/
while IFS= read -r line
do
    wget "$line"
done < links.txt