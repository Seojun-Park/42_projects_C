SELECT titre, resum FROM film WHERE LOCATE('42', titre) OR LOCATE('42', resum) ORDER BY duree_min ASC;