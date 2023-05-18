SELECT salles.nom, etage.nom AS nom_etage
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id