#!/bin/bash

i=1
um=1
geralBH=999
geralBHName="GeralBH"

#Rscript -e "rmarkdown::render('geraRegioes.RMD')"

Rscript -e "rmarkdown::render('geraRegioes.RMD', output_file = '/temp/tempGeraRegioes', output_dir = 'temp')"

Rscript -e "rmarkdown::render('juventudes.RMD', output_file = '/relatorios/$geralBHName', output_dir = 'relatorios')" $geralBH

while read line;
do
  echo -e "$line\n";
  Rscript -e "rmarkdown::render('juventudes.RMD', output_file = '/relatorios/$line', output_dir = 'relatorios')" $i
  i=$(($i+$um))
done < regioes.txt
#output_file = file.path(dirname(inputFile)./
