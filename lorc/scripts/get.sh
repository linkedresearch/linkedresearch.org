#!/bin/bash
root=$(dirname `pwd`)
pathToData="$root"/data;
mkdir "$pathToData";

while read uri; do
  if [[ ! "$uri" =~ ^# ]]; then
    urlencoded=$(echo "$uri" | perl -lpe 's/([^A-Za-z0-9])/sprintf("%%%02X", ord($1))/seg')
    echo -e "$uri";
    curl "http://rdf.greggkellogg.net/distiller?format=ntriples&uri=""$uri" | sort -u > "$pathToData"/"$urlencoded".nt
#    sort -u "$dataPath""$urlencoded".nt > "$dataPath""$urlencoded".nt

#    rapper -g "$uri" | sort -u > "$dataPath""$urlencoded".nt
    echo -e "$urlencoded\n";
  fi
  done < uri-list
