# LOG GENERATOR V1.0

Script PHP qui génère un faux fichier de logs serveur. 
Peut être pratique pour mettre ne place un honey pot, ou créer un challenges de pentesting.
Facilement modifiable.

Particulatités :
- Fausses adresses IP générées
- Faux noms de pages modifiables à souhait
- Fuasses dates générées (possibilité de choisir un intervalle)
- Choix du nombre de lignes générées

Exemple de lignes générées :

[2012-02-25 07:38:51] # 106.0.139.73 => Connected to : about.php  
[2014-06-04 18:50:52] # 209.131.55.128 => Connected to : login.php  
[2015-02-22 03:29:40] # 217.196.112.13 => Connected to : index.php   
...  
[2014-04-03 00:21:06] # 30.132.112.57 => Connected to : logout.php
