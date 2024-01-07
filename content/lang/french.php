<?php

/******************************************************************************************************
 * LANGUAGE FILE - PLEASE READ                                                                        *
 * This is a language file for the Maian Recipe script. Edit it to suit your own preferences.         *
 * DO NOT edit the variable names in any way and be careful NOT to remove any of the                  *
 * apostrophe's (') that contain the variable info. This will cause the script to malfunction.        *
 * USING APOSTROPHES IN MESSAGES                                                                      *
 * If you need to use an apostrophe, escape it with a backslash. ie: d\'apostrophe                    *
 * SYSTEM VARIABLES                                                                                   *
 * Words enclosed with braces are system variables and should not be altered or removed. ie: {count}  *
 * The system will not fail if you accidentally delete these, but some language may not display       *
 * correctly.                                                                                         *                                                                            *
 ******************************************************************************************************/

/*---------------------------------------------
  CHARACTER SET
  For encoding HTML characters
----------------------------------------------*/


$charset         = 'utf-8';
$mail_charset    = 'utf-8';
$lang_dir        = 'ltr';
$wysiwyg_lang    = 'fr';


//------------------------------
// content/add-recipe.tpl.php
//------------------------------


$ps_addrecipe    = 'Remplissez tous les champs, s\'il vous plaît. Incluez des photos si vous en avez et assurez-vous que les recettes sont votre propre création. Merci.';
$ps_addrecipe2   = '(Non publié)';
$ps_addrecipe3   = 'Nom &amp; Adresse e-mail:';
$ps_addrecipe4   = 'Nom de la recette &amp; Catégories:';
$ps_addrecipe5   = 'Ingrédients &amp; Instructions de cuissons (<a href="http://fr.wikipedia.org/wiki/HTML" onclick="window.open(this);return false">HTML</a> n\'est pas autorisé):';
$ps_addrecipe6   = 'Photos de la recette (Max: {max}) - Facultatif, mais recommandé:';
$ps_addrecipe7   = 'Nom de la recette';
$ps_addrecipe8   = 'Catégories de recettes (utilisez la touche Ctrl pour plusieurs sélections';
$ps_addrecipe9   = 'Entrez les ingrédients requis';
$ps_addrecipe10  = 'Instructions de cuisson détailléess';
$ps_addrecipe11  = '<i class="fas fa-check fa-fw"></i> Image Files ONLY';
$ps_addrecipe12  = 'Taille maximale du fichier par image : <b>{size}</b>';
$ps_addrecipe13  = '';
$ps_addrecipe14  = '';
$ps_addrecipe15  = 'Veuillez entrer quelques ingrédients.';
$ps_addrecipe16  = 'Veuillez saisir quelques instructions de cuisson.';
$ps_addrecipe17  = 'Un ou plusieurs fichiers image non valides. Les types de fichier autorisés sont : {extensions}';
$ps_addrecipe18  = 'Merci - Recette soumise avec succès';
$ps_addrecipe19  = 'Votre recette va maintenant être examinée par notre équipe et si elle est acceptée, elle apparaîtra dans notre base de données<br><br>Une confirmation par e-mail vous sera envoyée dès que cette procédure sera terminée.<br><br>Nous apprécions votre attention à soumettre votre recette pour d\'autres personnes.<br><br>Cordialement,<br>{website_name}';
$ps_addrecipe20  = 'Votre recette est maintenant en ligne dans notre base de données.<br><br>Notez que votre recette est soumise à l\'examen de notre équipe.<br><br>Nous apprécions votre attention à soumettre votre recette pour d\'autres personnes.<br><br>Cordialement,<br>{website_name}<hr><a href="{url}" class="btn btn-primary btn-block"><i class="fas fa-search fa-fw"></i> Voir la recette</a>';
$ps_addrecipe21  = 'Veuillez entrer un nom pour votre nouvelle recette.';
$ps_addrecipe22  = 'Nouvelle recette soumise';
$ps_addrecipe23  = 'Merci pour votre recette';


//------------------------------
// content/category.tpl.php
//------------------------------


$ps_category   = 'Recettes {cat} gratuites :';
$ps_category2  = 'Recettes gratuites {cat} ({subcat}) :';
$ps_category3  = 'Catégorie : {cat} ({count})';
$ps_category4  = 'Catégories associées';
$ps_category5  = 'Recettes populaires';
$ps_category6  = 'Veuillez choisir une recette ci-dessous ou une sous-catégorie dans le menu de droite si applicable :';
$ps_category7  = 'Cette catégorie a 0 recettes, veuillez donc revenir plus tard.';
$ps_category8  = 'Soumis par';
$ps_category9  = 'Aucune catégorie associée';
$ps_category10 = 'Flux RSS';


//-----------------------------------
// content/contact-us.tpl.php
//-----------------------------------


$ps_contact      = 'Veuillez entrer votre nom.';
$ps_contact2     = 'Veuillez entrer une adresse email valide.';
$ps_contact3     = 'Veuillez entrer quelques commentaires.';
$ps_contact4     = 'Veuillez entrer le bon code de vérification.';
$ps_contact5     = 'Commentaires/Rétroaction';
$ps_contact6     = 'Votre nom';
$ps_contact7     = 'Votre adresse e-mail';
$ps_contact8     = 'Commentaires';
$ps_contact9     = 'Envoyer';
$ps_contact10    = 'Vérification - (cliquez sur l\'image pour un nouveau code)';
$ps_contact11    = 'Entrer le code';
$ps_contact12    = 'Message envoyé - Merci';
$ps_contact13    = 'Un membre du personnel répondra dès que possible<br><br>Cordialement,<br>{website_name}';
$ps_contact14    = 'Demande générale';
$ps_contact15    = 'Merci de nous avoir contactés';
$ps_contact16    = 'Recette : {recipe} (<a href="javascript:history.go(-1)">Annuler</a>)';
$ps_contact17    = 're: {recipe}'._mmNL().'{url}'._mmNL().str_repeat('=',50)._mmNL()._mmNL().'Commencez vos commentaires ici..';
$ps_contact18    = 'Commentaires ajoutés - Merci';
$ps_contact19    = '';
$ps_contact20    = '';
$ps_contact21    = '';
$ps_contact22    = '';
$ps_contact23    = '{recipe}'._mmNL().'{url}'._mmNL().str_repeat('=',50)._mmNL()._mmNL().'Commencez vos commentaires ici.';
$ps_contact24    = 'Recommandation de recette de {name}';
$ps_contact25    = 'Merci d\'avoir recommandé une recette';
$ps_contact26    = '';
$ps_contact27    = '';


//------------------------------
// content/header.tpl.php
//------------------------------


$ps_header    = 'Accueil';
$ps_header2   = 'CATÉGORIES';
$ps_header3   = 'RECHERCHER DES RECETTES';
$ps_header4   = 'Rechercher';
$ps_header5   = '<span class="label label-primary">{rcount}</span> recettes dans <span class="label label-info">{ccount}</span> catégories';
$ps_header6   = 'Ajouter une recette';
$ps_header7   = 'À propos de nous';
$ps_header8   = 'Nous contacter';
$ps_header9   = '{website_name}';
$ps_header10  = 'S\'abonner';
$ps_header11  = 'Recette gratuite @ {website_name} : {recipe}';
$ps_header12  = '';
$ps_header13  = 'Rechercher des recettes';


//------------------------------
// content/index.tpl.php
// content/about-us.tpl.php
//------------------------------


$ps_index  = 'Bienvenue sur {website_name}';
$ps_index2 = 'Nous offrons des recettes gratuites et savoureuses pour votre plaisir culinaire. Des aliments exotiques aux desserts à l\'eau à la bouche, nous sommes sûrs que vous trouverez quelque chose pour tester vos compétences culinaires. Bon appétit';
$ps_index3 = 'Catégories de recettes';
$ps_index4 = 'Dernières recettes';
$ps_index5 = 'Recettes les plus populaires';
$ps_index6 = 'Page 404 introuvable';
$ps_index7 = 'Cette page n\'existe pas ou est actuellement désactivée par l\'administrateur. Si vous avez mis cette page en signet, retirez-la de vos signets ou veuillez réessayer plus tard. Merci';


//------------------------------
// content/recipe.tpl.php
//------------------------------


$ps_recipe       = 'Liens de recettes';
$ps_recipe2      = 'Évaluer cette recette';
$ps_recipe3      = 'Ajouter un commentaire';
$ps_recipe4      = 'Catégories';
$ps_recipe5      = 'Recettes associées';
$ps_recipe6      = 'Photos de la recette';
$ps_recipe7      = 'Commentaires des visiteurs';
$ps_recipe8      = 'Nous contacter';
$ps_recipe9      = 'Recommander cette recette';
$ps_recipe10     = 'Version imprimable';
$ps_recipe11     = 'Ingrédients';
$ps_recipe12     = 'Instructions de cuisson';
$ps_recipe13     = 'Pas de recettes - Revenez plus tard';
$ps_recipe14     = 'Ajouter une nouvelle recette';
$ps_recipe15     = '{name} ({date})';
$ps_recipe16     = 'Cette recette n\'a actuellement aucun commentaire. Ajoutez votre propre commentaire via l\'onglet.';
$ps_recipe17     = '';    
$ps_recipe18     = 'Cette recette n\'a actuellement aucune photo.';
$ps_recipe19     = 'Vues';
$ps_recipe20     = 'Votre nom';
$ps_recipe21     = 'Votre email (non publié)';
$ps_recipe22     = 'Vos commentaires';
$ps_recipe23     = 'Pour prévenir le spam, entrez le code';
$ps_recipe24     = 'Cliquez pour rafraîchir le code captcha';
$ps_recipe25     = 'vote';
$ps_recipe26     = 'votes';
$ps_recipe27     = 'Actuellement';
$ps_recipe28     = '';
$ps_recipe29     = 'Ceci est "Statique"';
$ps_recipe30     = 'sur';
$ps_recipe31     = 'exprimés';
$ps_recipe32     = '';
$ps_recipe33     = '';
$ps_recipe34     = 'Soumis par :';
$ps_recipe35     = 'Date d\'ajout :';
$ps_recipe36     = 'Recette gratuite fournie par : {website_name} &copy; '.date('Y').'<br>{website_url}';
$ps_recipe37     = 'Nouveau commentaire ajouté';
$ps_recipe38     = 'Merci pour votre commentaire';
$ps_recipe39     = 'Merci, vos commentaires seront examinés prochainement';
$ps_recipe40     = 'Merci, vos commentaires ont été ajoutés<br>Veuillez fermer cette fenêtre et actualiser la page principale.';
$ps_recipe41     = 'Répertorié dans : <a href="{url}">{cat}</a>';
$ps_recipe42     = 'Répertorié dans : <a href="{purl}">{parent}</a> -> <a href="{curl}">{child}</a>';
$ps_recipe43     = '';


//------------------------------
// content/search.tpl.php
//------------------------------


$ps_search       = 'Résultats de recherche';
$ps_search2      = 'Votre recherche pour &quot;{keys}&quot; a généré <b>{count}</b> résultats.';
$ps_search3      = 'Filtrer la recherche par catégorie';
$ps_search4      = 'Recettes par contributeur';

//--------------------------
// admin/content/add.php
//--------------------------


$add             = 'Nom de la recette';
$add2            = 'Catégories de recettes';
$add3            = 'Ingrédients requis';
$add4            = 'Instructions de cuisson';
$add5            = 'Ajouter une recette';
$add6            = 'Photos de la recette';
$add7            = 'Description Méta';
$add8            = 'Mots-clés Méta';
$add9            = 'Nouvelle recette ajoutée';
$add10           = 'Activer les commentaires pour cette recette';
$add11           = 'Choisir des fichiers';
$add12           = 'Activer/Désactiver cette recette';
$add13           = 'Soumis par';
$add14           = 'Nouvelle recette ajoutée';


//--------------------------
// admin/content/edit.php
//--------------------------


$edit            = 'Mettre à jour la recette';
$edit2           = 'Recette mise à jour';
$edit3           = 'Retour à la liste des recettes';
$edit4           = 'Date d\'ajout (AAAA-MM-JJ)';
$edit5           = 'Visites';


//--------------------------
// admin/control/header.php
//--------------------------


$header          = 'Panneau d\'administration';
$header2         = 'Ajouter une recette';
$header3         = 'Recettes';
$header4         = 'Paramètres';
$header5         = 'Menu';
$header6         = 'Déconnexion';
$header7         = 'Support';
$header8         = 'Accueil';
$header9         = 'Catégories';
$header10        = 'Entrez des mots-clés ou un identifiant...';
$header11        = 'Entrez des mots-clés ou un nom de visiteur.';
$header12        = 'Approuver';


//-----------------------------
// admin/content/home.php
//-----------------------------


$home = '<b>ATTENTION !</b><br><br>Veuillez supprimer le dossier \'/install/\' de votre répertoire d\'installation.';
$home2 = '';
$home3 = 'Dons';
$home4 = 'Aperçu rapide';
$home5 = 'Aide/Support';
$home6 = 'Approuver les recettes';
$home7 = 'Nécessitant une approbation';
$home8 = 'Recettes';
$home9 = 'Photos';
$home10 = 'Commentaires';
$home11 = 'Catégories';
$home12 = 'Sous-catégories';
$home13 = 'Suppression du droit d\'auteur';
$home14 = 'Développement/Corrections de bugs/Mises à jour';
$home15 = 'Désactivé';
$home16 = 'Les {count} dernières recettes';
$home17 = 'Les {count} derniers commentaires';

//--------------------------
// admin/content/cats.php
//--------------------------


$cats = 'Catégorie parente';
$cats2 = 'Ajouter une nouvelle catégorie';
$cats3 = 'Nom de la catégorie';
$cats4 = 'Commentaires de la catégorie';
$cats5 = 'Il y a actuellement 0 catégories dans la base de données';
$cats6 = 'Liste des catégories';
$cats7 = 'Description Méta';
$cats8 = 'Pas d\'enfants';
$cats9 = 'Nouvelle catégorie ajoutée';
$cats10 = 'Mots-clés Méta';
$cats11 = 'Mettre à jour la catégorie';
$cats12 = 'Catégorie supprimée';
$cats13 = 'Catégorie enfant de';
$cats14 = 'Type de catégorie';
$cats15 = 'Activer les commentaires pour cette catégorie';
$cats16 = 'Supprimer les catégories sélectionnées';
$cats17 = 'Les visiteurs peuvent-ils poster des recettes dans cette catégorie';
$cats18 = 'Activer/Désactiver cette catégorie';
$cats19 = 'Nouvelle catégorie ajoutée';
$cats20 = 'Catégorie mise à jour';
$cats21 = 'Catégories sélectionnées supprimées';


//--------------------------------------
// admin/content/approve-comments.php
// admin/content/edit-comment.php
// admin/content/comments.php
//--------------------------------------


$comments = 'Approuver les commentaires';
$comments2 = 'Utilisez les cases à cocher pour traiter les commentaires et les liens pour visualiser/modifier les commentaires avant l\'approbation';
$comments3 = 'Il y a actuellement 0 commentaires en attente d\'approbation';
$comments4 = 'Voir/Éditer';
$comments5 = 'Traiter les commentaires sélectionnés';
$comments6 = 'Approuver les commentaires';
$comments7 = 'Rejeter les commentaires';
$comments8 = 'Laisser par <b>{name}</b> le <b>{date}</b>';
$comments9 = 'Sélectionner tout';
$comments10 = 'Filtrer par recette';
$comments11 = 'Il y a actuellement 0 commentaires en attente d\'approbation pour cette recette';
$comments12 = 'Commentaires approuvés';
$comments13 = 'Commentaires rejetés';
$comments14 = 'Éditer le commentaire';
$comments15 = 'Commentaires';
$comments16 = 'Nom';
$comments17 = 'Email';
$comments18 = 'Recette';
$comments19 = 'Mettre à jour le commentaire';
$comments20 = 'Commentaire mis à jour';
$comments21 = 'Commentaires de la recette';
$comments22 = '<b>{count}</b> commentaire';
$comments23 = 'Contact : {name}';
$comments24 = 'Cette recette a 0 commentaires dans la base de données';
$comments25 = 'Avec sélectionné';
$comments26 = 'Envoyer des emails';
$comments27 = 'Toutes les recettes';
$comments28 = 'Vos commentaires ont été approuvés';
$comments29 = 'Vos commentaires ont été rejetés';
$comments30 = 'Commentaire supprimé';
$comments31 = 'Supprimer les commentaires sélectionnés';
$comments32 = 'Date ajoutée';
$comments33 = 'Adresses IP';
$comments34 = 'Approuver les commentaires';
$comments35 = 'Rejeter les commentaires';

//-----------------------------
// admin/content/login.php
//-----------------------------


$login = 'Entrez le nom d\'utilisateur';
$login2 = 'Entrez le mot de passe';
$login3 = 'Connexion';
$login4 = 'Se souvenir de moi ?';
$login5 = 'Nom d’utilisateur invalide. Veuillez réessayer.';
$login6 = 'Mot de passe invalide. Veuillez réessayer.';


//-------------------------------
// admin/content/pictures.php
//-------------------------------


$pictures = 'Sélectionner une recette';
$pictures2 = 'Gérer les photos de la recette';
$pictures3 = 'Télécharger des photos';
$pictures4 = 'Liste des photos';
$pictures5 = 'Ajouter de nouvelles photos';
$pictures6 = 'Cette recette n\'a aucune photo dans la base de données';
$pictures7 = 'Nouvelle photo ajoutée';
$pictures8 = 'Photo supprimée';
$pictures9 = 'Mettre à jour les photos';
$pictures10 = 'Supprimer TOUTES les photos';
$pictures11 = 'Photos sélectionnées supprimées';
$pictures12 = 'Photos sélectionnées supprimées';

//---------------------------------------
// admin/content/recipes.php
// admin/content/approve-recipes.php
//---------------------------------------


$recipes = 'Liens de recettes';
$recipes2 = 'Options de filtrage/classement';
$recipes3 = 'Supprimer les commentaires de la recette (Tous)';
$recipes4 = 'Réinitialiser les visites de la recette (Tous)';
$recipes5 = 'Mettre à jour';
$recipes6 = 'Il y a actuellement <b>{count}</b> recettes dans <b>{cats}</b> catégories - Cliquez sur la recette pour la modifier';
$recipes7 = 'Ajouter une recette';
$recipes8 = 'Il y a actuellement <b>{count}</b> recettes dans cette catégorie - Cliquez sur la recette pour la modifier';
$recipes9 = 'Il n\'y a actuellement aucune recette dans la base de données';
$recipes10 = 'Infos';
$recipes11 = 'Approuver les commentaires';
$recipes12 = 'Supprimer tous les commentaires';
$recipes13 = 'Supprimer toutes les recettes';
$recipes14 = 'Approuver les recettes';
$recipes15 = 'Filtrer par catégorie';
$recipes16 = 'Toutes les catégories';
$recipes17 = 'Options de réinitialisation/suppression par catégorie';
$recipes18 = 'Ajouté';
$recipes19 = 'Soumis par';
$recipes20 = 'Date RSS (format RFC 2822)';
$recipes21 = 'Visites';
$recipes22 = 'Commentaires';
$recipes23 = 'Plus de visites';
$recipes24 = 'Moins de visites';
$recipes25 = 'Plus de commentaires';
$recipes26 = 'Moins de commentaires';
$recipes27 = 'Traiter les recettes sélectionnées';
$recipes28 = 'Choisir une option';
$recipes29 = 'Toutes les recettes de A à Z';
$recipes30 = 'Recette la plus récente';
$recipes31 = 'Recette la plus ancienne';
$recipes32 = 'Supprimer les recettes sélectionnées';
$recipes33 = 'Photos';
$recipes34 = 'Gérer les photos';
$recipes35 = 'Résultats de la recherche - <span style="font-weight:normal">Vos résultats de recherche sont affichés ci-dessous</span> (<a href="?p=recipes">Annuler</a>)';
$recipes36 = 'Gérer les photos';
$recipes37 = 'Utilisez les cases à cocher ci-dessous pour approuver ou rejeter les recettes. Cliquez sur une recette pour la modifier avant l\'approbation si nécessaire. Les photos peuvent également être mises à jour avant le traitement d\'une recette. Cliquez sur infos puis sur le nombre de photos';
$recipes38 = 'Il n\'y a actuellement aucune recette en attente d\'approbation';
$recipes39 = 'Traiter les recettes sélectionnées';
$recipes40 = 'Non disponible tant que la recette n\'est pas approuvée';
$recipes41 = 'Gérer les commentaires';
$recipes42 = 'Recettes sélectionnées supprimées';
$recipes43 = 'Approuver les recettes';
$recipes44 = 'Rejeter les recettes';
$recipes45 = 'Recettes approuvées';
$recipes46 = 'Recettes rejetées';
$recipes47 = 'Votre recette a été approuvée';
$recipes48 = 'Votre recette a été rejetée';
$recipes49 = 'Recettes sélectionnées supprimées';
$recipes50 = 'Tous les contributeurs';
$recipes51 = 'Gérer les commentaires';
$recipes52 = 'Afficher toutes les infos';
$recipes53 = 'Cacher toutes les infos';
$recipes54 = 'sur';
$recipes55 = 'Statut';
$recipes56 = 'Activé';
$recipes57 = 'Désactivé';
$recipes58 = 'Notification par email';


//--------------------------------
// admin/content/settings.php
//--------------------------------


$settings = 'Adresse email';
$settings2 = 'Description Méta par défaut';
$settings3 = 'Fichier de langue';
$settings4 = 'Nom du site web';
$settings5 = 'Nombre de recettes à afficher par page';
$settings6 = 'Oui';
$settings7 = 'Non';
$settings8 = 'Mettre à jour les paramètres';
$settings9 = 'Mots-clés Méta par défaut';
$settings10 = 'Paramètres mis à jour';
$settings11 = 'Activer l\'approbation des commentaires';
$settings12 = 'Activer l\'approbation des recettes';
$settings13 = 'Activer le Captcha de prévention du spam';
$settings14 = 'Chemin complet du serveur vers le dossier d\'installation';
$settings15 = 'Paramètres SMTP';
$settings16 = 'Activer SMTP';
$settings17 = 'Hôte SMTP';
$settings18 = 'Nom d\'utilisateur SMTP';
$settings19 = 'Mot de passe SMTP';
$settings20 = 'Port SMTP';
$settings21 = 'Activer les URLs conviviales pour les moteurs de recherche';
$settings22 = 'URL du dossier d\'installation (http)';
$settings23 = 'Paramètres des images des visiteurs';
$settings24 = 'Nombre maximum d\'images autorisées par recette';
$settings25 = 'Extensions d\'image valides';
$settings26 = 'Dimensions de redimensionnement automatique (Largeur, Hauteur)';
$settings27 = 'Taille maximale de fichier par image (en octets)';
$settings28 = 'Paramètres mis à jour';
$settings29 = 'Activer le flux RSS';
$settings30 = 'Nom "De" pour SMTP';
$settings31 = 'Activer l\'ajout de recettes';
$settings32 = 'Adresse "De" pour SMTP';
$settings33 = 'Outils';


//--------------------------
// General
//--------------------------


$script = 'Maian Recipe';
$script2 = '';
$script3 = 'Propulsé par';
$script4 = 'Veuillez patienter.';
$script5 = 'Annuler';
$script6 = 'Placez le curseur sur les titres pour des astuces d\'aide';
$script7 = 'Première page';
$script8 = 'Dernière page';
$script9 = 'Tous droits réservés';
$script10 = 'Action effectuée avec succès';
$script11 = 'Fermer';
$script12 = 'Optionnel';
$script13 = 'Modifier';
$script14 = 'Supprimer';
$script15 = 'Accès rapide';
$script16 = 'Imprimer';
$script17 = 'Conseils de sécurité : Veuillez mettre à jour :';
$script18 = 'Le dossier d\'installation (<b>/install/</b>) devrait être renommé ou supprimé.';
$script19 = 'Le cookie par défaut doit être changé dans le fichier "<b>control/_cfg.php</b>".';
$script20 = 'La clé secrète par défaut doit être changée dans le fichier "<b>control/_cfg.php</b>".';
$script21 = 'Page non trouvée';
$script22 = 'Vous avez activé les URLs conviviales pour les moteurs de recherche dans les paramètres. Veuillez renommer .htaccess_COPY.txt en .htaccess';

/*-----------------------------
  For RSS feed
-------------------------------*/


$msg_rss = 'Dernières recettes sur {website_name}';
$msg_rss2 = 'Voici les dernières recettes ajoutées sur {website_name}';
$msg_rss3 = 'Recette : ';
$msg_rss4 = 'Dernières recettes {category} sur {website_name}';

/*-----------------------------------------------------------------------------------------------------
  JAVASCRIPT VARIABLES
------------------------------------------------------------------------------------------------------*/


$jsvars = 'Confirmer l\'action..\n\nÊtes-vous sûr ?';
$jsvars2 = 'Veuillez inclure un nom de catégorie.';
$jsvars3 = 'Erreurs du formulaire';
$jsvars4 = 'Supprimer la catégorie parente\n\nCela effacera toutes les données associées à cette catégorie, y compris les sous-catégories, les recettes et les images\n\nÊtes-vous sûr ?';
$jsvars5 = 'Aide/Information';
$jsvars6 = 'Entrez le nom de la catégorie. Max 200 caractères.';
$jsvars7 = 'Description Méta. Pour les moteurs de recherche. Ceci est optionnel.';
$jsvars8 = 'Mots-clés Méta. Pour les moteurs de recherche. Ceci est optionnel.';
$jsvars9 = 'Spécifiez le type de catégorie. Note : Si vous transformez une catégorie parente en catégorie enfant, tous les enfants qui existaient dans le parent original seront également transformés en enfants de la nouvelle catégorie parente.';
$jsvars10 = 'Commentaires de la catégorie. Ceux-ci sont optionnels. Le HTML peut être utilisé si nécessaire.';
$jsvars11 = 'Souhaitez-vous activer les commentaires pour cette catégorie ? Les commentaires peuvent être activés/désactivés par recette, mais les commentaires doivent être actifs dans une catégorie pour fonctionner.';
$jsvars12 = '';
$jsvars13 = 'Les visiteurs peuvent-ils poster des recettes dans cette catégorie ? Si c\'est une catégorie parente, interdire les publications de recettes dans cette catégorie désactivera également automatiquement ses enfants.<br><br>Voir également les paramètres pour les restrictions de soumission par les visiteurs.';
$jsvars14 = 'Activer/désactiver cette catégorie. Si c\'est une catégorie parente, désactiver cette catégorie désactivera également automatiquement ses enfants. Utile si vous souhaitez ajouter des recettes à une catégorie avant de la rendre publique.';
$jsvars15 = 'Si coché, réinitialise toutes les visites pour toutes les recettes dans la catégorie ou les catégories spécifiées';
$jsvars16    = '';
$jsvars17 = 'Si coché, supprime tous les commentaires pour toutes les recettes dans la catégorie ou les catégories spécifiées';
$jsvars18 = 'Écrase les 3 premières options et supprime toutes les données de recette et les images de recette pour toutes les recettes dans la catégorie ou les catégories spécifiées<br><br>Utilisez les cases à cocher pour supprimer uniquement les recettes sélectionnées';
$jsvars19 = 'Options de filtrage/classement - Choisissez une catégorie pour filtrer les recettes par catégorie et/ou utilisez les options de classement pour ordonner selon des critères.';
$jsvars20 = 'Maintenez la touche Ctrl enfoncée pour effectuer des sélections. Si "Toutes les catégories" est sélectionné, cela sera la valeur par défaut et écrasera les sélections individuelles.';
$jsvars21 = 'Veuillez choisir au moins 1 option de catégorie.';
$jsvars22 = 'Veuillez choisir au moins 1 option de traitement.';
$jsvars23 = 'Veuillez choisir au moins 1 recette.';
$jsvars24 = 'Déconnexion et fin de session..\n\nÊtes-vous sûr ?';
$jsvars25 = 'Le nom de votre site web. Max 100 caractères.';
$jsvars26 = 'URL d\'installation de votre recette. AVEC barre oblique finale.<br><br>Ex : http://www.exemple.com/recipe/';
$jsvars27 = 'Chemin complet du serveur vers votre installation de recette. AVEC barre oblique finale.<br><br>Ex : /home/nom_serveur/public_html/recipe/<br><br>Si vous n\'êtes pas sûr de votre chemin de serveur réel, contactez votre hébergeur.';
$jsvars28 = 'Spécifiez le fichier de langue. Créez un nouveau fichier de langue si applicable et téléchargez-le dans le répertoire /content/lang/.<br><br>Les fichiers de langue disponibles peuvent être téléchargés depuis le site web de Maian Media.';
$jsvars29 = 'Combien de recettes souhaitez-vous afficher par page ?';
$jsvars30 = 'Cela active le système d\'URL conviviales pour les moteurs de recherche. Habituellement pour les systèmes Apache UNIQUEMENT. Votre serveur DOIT supporter .htaccess & mod_rewrite pour que cela fonctionne. Voir la documentation pour plus d\'informations.';
$jsvars31 = 'Spécifiez votre adresse email. Certaines notifications peuvent être désactivées. Voir la documentation pour plus d\'informations.';
$jsvars32 = 'Description Méta par défaut. Pour les moteurs de recherche. Cela devrait contenir une brève description de votre site web. Ceci est écrasé si des descriptions de recette ou de catégorie sont spécifiées.';
$jsvars33 = 'Mots-clés Méta par défaut. Pour les moteurs de recherche. Cela devrait contenir des mots-clés pertinents pour votre site. Ceci est écrasé si des mots-clés de recette ou de catégorie sont spécifiés.';
$jsvars34 = 'Si les commentaires sont activés dans une catégorie ou pour une recette spécifique, souhaitez-vous approuver les commentaires avant qu\'ils n\'apparaissent sur votre site ?';
$jsvars35 = 'Si les soumissions de recettes sont activées dans une catégorie ou pour une recette spécifique, souhaitez-vous les approuver avant qu\'elles n\'apparaissent sur votre site ?';
$jsvars36 = 'Cela active la fonctionnalité d\'image captcha de prévention du spam pour les formulaires. Pour que cela fonctionne, votre serveur doit avoir la bibliothèque graphique GD installée et activée. Activer cela aide à prévenir les soumissions automatiques de vos formulaires par des bots.';
$jsvars37 = 'Lorsque les visiteurs soumettent des recettes, voulez-vous qu\'ils puissent également télécharger des photos ? Si oui, entrez un nombre supérieur à 0. Mettez 0 pour aucune image.';
$jsvars38 = 'Si les téléchargements d\'images sont activés, spécifiez les extensions autorisées. Extension SEULEMENT séparée par un tube (|). Aucun symbole de point. Ceci n\'est PAS sensible à la casse. jpg est la même chose que JPG.';
$jsvars39 = '<b>Pour JPG/JPEG UNIQUEMENT !!</b> Si les images dépassent la taille spécifiée ici, elles seront automatiquement redimensionnées. Par exemple : 640,480 (largeur,hauteur) redimensionnerait les images plus grandes que ces dimensions. Le rapport d\'aspect est pris en compte lors du redimensionnement. Vous DEVEZ spécifier les deux paramètres séparés par une virgule et les deux doivent être supérieurs à 0.<br><br>Mettez 0 pour aucun redimensionnement et pour que les images conservent leurs dimensions de téléchargement.';
$jsvars40 = 'Spécifiez la taille maximale pour les images. C\'est la première vérification. Si les images dépassent la taille maximale ici, elles sont rejetées, indépendamment de leurs dimensions. Spécifiez la taille en octets SEULEMENT. Exemples:<br><br>1024 x 250 = 256000 (250KB)<br>1024 x 1024 = 1048576 (1MB) etc<br><br>Mettez à 0 pour aucune restriction.';
$jsvars41 = 'Activez l\'option de courrier SMTP si la fonction PHP mail() ne fonctionne pas. Certains serveurs exigent SMTP pour envoyer des mails. Si vous n\'êtes pas sûr, vérifiez avec votre hébergeur. Spécifiez le nom d\'utilisateur/mot de passe si nécessaire.';
$jsvars42 = 'Port de courrier SMTP. Habituellement 25 ou 26. Vérifiez avec votre hébergeur si vous n\'êtes pas sûr.';
$jsvars43 = 'Veuillez spécifier un nom de recette.';
$jsvars44 = 'Veuillez inclure des ingrédients.';
$jsvars45 = 'Veuillez inclure des instructions de cuisson.';
$jsvars46 = 'Entrez le nom de la recette. Max 200 caractères.';
$jsvars47 = 'Spécifiez les catégories de recettes. Utilisez la touche ctrl pour effectuer plusieurs sélections.';
$jsvars48 = 'Si cette recette a été soumise par quelqu\'un, entrez son nom. Ceci est optionnel.';
$jsvars49 = 'Souhaitez-vous activer les commentaires pour cette recette ? Cette option doit également être activée dans la catégorie pertinente en premier. L\'option de catégorie a la priorité sur une recette unique.';
$jsvars50 = 'Active l\'option d\'ajout de recette pour que les visiteurs puissent soumettre des recettes.';
$jsvars51 = 'Activer la recette. Si désactivée, elle n\'est pas visible par le public. Utile si vous devez retirer une recette de la vue publique pour une raison quelconque.';
$jsvars52 = 'Spécifiez les ingrédients de la recette. Le HTML peut être utilisé ici si nécessaire.';
$jsvars53 = 'Spécifiez les instructions de cuisson de la recette. Le HTML peut être utilisé ici si nécessaire.';
$jsvars54 = 'Téléchargez des photos de la recette. Cela peut être fait maintenant ou plus tard en utilisant l\'option "Gérer les photos" sur la page "Recettes" dans le menu de droite. Il n\'y a pas de restrictions sur les photos administrateur.';
$jsvars55 = 'Spécifiez la description méta pour la recette. Pour les moteurs de recherche. Si laissé vide, le nom de la recette est utilisé.';
$jsvars56 = 'Spécifiez les mots-clés méta pour la recette. Pour les moteurs de recherche. Si laissé vide, revient aux mots-clés de la catégorie, puis aux paramètres par défaut.';
$jsvars57 = 'Ajustez manuellement le nombre de visites de la recette si nécessaire.';
$jsvars58 = 'C\'est la date à laquelle la recette a été ajoutée. Mettez à jour si nécessaire.';
$jsvars59 = 'Veuillez sélectionner au moins 1 image.';
$jsvars60 = 'Veuillez sélectionner au moins 1 commentaire.';
$jsvars61 = 'Lorsque vous approuvez ou rejetez des commentaires, le système peut envoyer un email à la personne qui a laissé le commentaire pour l\'informer de votre décision. Si vous choisissez de ne pas envoyer d\'emails, le commentaire est traité sans envoi d\'emails.';
$jsvars62 = 'Lorsque vous approuvez ou rejetez des recettes, le système peut envoyer un email à la personne qui a soumis la recette pour l\'informer de votre décision. Si vous choisissez de ne pas envoyer d\'emails, la recette est traitée sans envoi d\'emails.';
$jsvars63 = 'Y compris les images pour les recettes non approuvées';
$jsvars64 = 'Les flux RSS peuvent être utiles pour les personnes qui utilisent des lecteurs de flux pour suivre les mises à jour des sites web. Si vous activez cette fonctionnalité, un lien RSS apparaîtra pour les dernières recettes. Pour plus d\'informations sur les flux RSS, consultez la documentation.';
$jsvars65 = '';
$jsvars66 = 'Veuillez compléter tous les champs.';
$jsvars67 = 'Adresse email invalide... essayez à nouveau.';
$jsvars69 = 'Code de prévention du spam incorrect... veuillez réessayer.';
$jsvars70 = 'Votre commentaire a été ajouté avec succès pour "{recipe}".<hr>Cliquez <a href="#" onclick="window.location.reload();return false">ici</a> pour rafraîchir la page.';
$jsvars71 = 'Votre commentaire a été ajouté avec succès pour "{recipe}".<hr>Un membre du personnel examinera vos commentaires prochainement.';
$jsvars72 = 'Cochez la case "Se souvenir de moi" pour rester connecté pendant 30 jours. Notez que cela est <b>NON</b> recommandé pour les ordinateurs partagés et les cookies doivent être activés.';
$jsvars73 = 'Cette fonctionnalité n\'est actuellement pas activée... revenez plus tard.';
$jsvars74 = 'Entrez le nom d\'utilisateur/mot de passe pour la page d\'ajout de recette. Utile pour permettre uniquement aux personnes de soumettre des recettes avec des identifiants de connexion. Pour désactiver, laissez le nom d\'utilisateur vide.';

//---------------------------
// 2.2 Updates
//---------------------------

$vars = [
	'Erreur Système',
	'Une erreur inattendue s\'est produite, veuillez réessayer',
	'Annuler',
	'Nous espérons que vous apprécierez cette recette, si vous avez des questions faites-le nous savoir. Merci',
	'Sécurité d’Ajout de Recette',
	'Nom d’utilisateur',
	'Mot de passe',
	'Entrez le mot de passe',
	'Entrez le nom d’utilisateur',
	'Entrez les détails de connexion',
	'Continuer',
	'Aucun compte trouvé, veuillez réessayer',
	'Déconnexion',
	'Parcourir',
	'Spécifiez une ou plusieurs catégories',
	'Type de fichier invalide pour "<b>{file}</b>". Images uniquement',
	'Le fichier "<b>{file}</b>" est trop grand. Taille de fichier max : <b>{size}</b>',
	'Annuler la recherche',
	'pagination' => [
	'Premier',
	'Précédent',
	'Suivant',
	'Dernier'
  ]
];

$admin = [
	'recipe_tables' => [
		'Nom',
		'Par',
		'Date',
		'Photos',
		'Commentaires',
		'Visites',
		'Statut'
  ],
  'recipe_comments' => [
	'De',
	'Email',
	'IP',
	'Date'
  ]
];

//-----------------------------------------------------------------------------
// IMPORTANT! DO NOT remove this link unless you have donated. Many thanks.
//-----------------------------------------------------------------------------


$footerlink = 'Propulsé par <a href="https://www.maianrecipe.com" onclick="window.open(this);return false"><b>'.$script.' '.$script2.'</b></a><br>© 2006-'.date("Y").' <a href="https://www.maianmedia.com" onclick="window.open(this);return false">Maian Media</a>. Tous droits réservés.';

?>
