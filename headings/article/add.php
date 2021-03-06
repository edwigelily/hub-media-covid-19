<!DOCTYPE html>
<html lang="fr">
<<<<<<< HEAD

=======
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
<head>
    <meta charset="UTF-8">
    <title>COVID-19 Infos | Nouvelle publication</title>
    <meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#1565C0">
    <link rel="shortcut icon" href="<?= asset('../assets/img/logo_temp.png', 'covid'); ?>" type="image/x-icon">
    <meta name=author content="Ecole 241">
<<<<<<< HEAD
    <meta name=description content="COVID-19 Infos est un système de notifications permettant de suivre l'évolution du coronavirus au Gabon.">
    <meta name=keywords content="COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name=og:title content="COVID-19 Infos">
    <meta name=og:type content="website">
    <meta name=og:image content="<?= asset('../assets/img/logo_temp.png', 'covid'); ?>" />
    <meta name=og:url content="https://covid-19-infos.netlify.com" />
    <meta name=og:site_name content="COVID-19 Infos">
    <meta name=og:description content="COVID-19 Infos est un système de notifications permettant de suivre l'évolution du coronavirus au Gabon.">
=======
    <meta name=description
          content="COVID-19 Infos est un système de notifications permettant de suivre l'évolution du coronavirus au Gabon.">
    <meta name=keywords
          content="COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name=og:title content="COVID-19 Infos">
    <meta name=og:type content="website">
    <meta name=og:image content="<?= asset('../assets/img/logo_temp.png', 'covid'); ?>"/>
    <meta name=og:url content="https://covid-19-infos.netlify.com"/>
    <meta name=og:site_name content="COVID-19 Infos">
    <meta name=og:description
          content="COVID-19 Infos est un système de notifications permettant de suivre l'évolution du coronavirus au Gabon.">
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc

    <link rel="stylesheet" href="<?= asset('assets/css/admin.css', 'covid'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161415127-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-161415127-1');
    </script>
</head>
<<<<<<< HEAD

=======
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
<body>
    <main>
        <header>
            <h1>COVID-19 Infos</h1>
            <h2>Nouvelle publication</h2>
        </header>
        <div>
            <p class="message success hide"></p>
        </div>
        <form method="POST" action="<?= route('save') ?>">
            <input type="hidden" name="statut" value="BROUILLON">
            <div class="bloc">
                <label for="pubAuteur">Auteur</label>
                <input type="text" name="auteur" id="pubAuteur" placeholder="Renseignez votre nom (Ex: Jean SAGUE)" required>
            </div>
            <div class="bloc">
<<<<<<< HEAD

                <fieldset>
                    <legend>Catégorie</legend>
                    <label for="pubCategorieActualite"><input type="radio" checked name="categorie" id="pubCategorieActualite" value="ACTUALITE" required> Actualité</label>
                    <label for="pubCategorieSensibilisation"><input type="radio" name="categorie" id="pubCategorieSensibilisation" value="SENSIBILISATION" required> Sensibilisation</label>
                    <label for="pubCategorieMesures"><input type="radio" name="categorie" id="pubCategorieMesures" value="MESURES" required> Mesures gouvernementales</label>
                    <label for="pubCategoriePoint"><input type="radio" name="categorie" id="pubCategoriePoint" value="POINT-PRESSE" required> Points de presse</label>
                    <label for="pubCategorieFake"><input type="radio" name="categorie" id="pubCategorieFake" value="FAKE" required> Fake news</label>
                    <label for="pubCategorieCartes"><input type="radio" name="categorie" id="pubCategorieCartes" value="CARTES" required> Cartes</label>
                    <label for="pubCategorieJeux"><input type="radio" name="categorie" id="pubCategorieJeux" value="JEUX" required> Jeux</label>
                </fieldset>

            </div>
            <div class="bloc">
=======
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                <label for="pubTitre">Titre *</label>
                <input type="text" name="titre" id="pubTitre" placeholder="Donnez un titre à votre publication" required>
            </div>
            <div class="bloc">
                <label for="pubImage">Image *</label>
                <input type="url" name="image" id="pubImage" placeholder="Renseignez l'adresse du lien de l'image" required>
            </div>
<<<<<<< HEAD
            <!--div class="bloc">
                <label for="pubDescription">Description *</label>
                <textarea name="description" id="pubDescription" cols="30" rows="10" placeholder="Veuillez décrire en quelques mots le contenu de votre publication..."required></textarea>
            </div-->
=======
            <div class="bloc">
                <label for="pubDescription">Description *</label>
                <textarea name="description" id="pubDescription" cols="30" rows="10" placeholder="Veuillez décrire en quelques mots le contenu de votre publication..."required></textarea>
            </div>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
            <div class="bloc">
                <fieldset>
                    <legend>Type de publication</legend>
                    <label for="pubTypeTexte"><input type="radio" checked name="type" id="pubTypeTexte" value="TEXTE" data-target="#contentTypeTexte" required>
                        Texte</label>
<<<<<<< HEAD
                    <!--label for="pubTypeImage"><input type="radio" name="type" id="pubTypeImage" value="IMAGE" data-target="#contentTypeImage" required>
=======
                    <label for="pubTypeImage"><input type="radio" name="type" id="pubTypeImage" value="IMAGE" data-target="#contentTypeImage" required>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                        Image</label>
                    <label for="pubTypeVideo"><input type="radio" name="type" id="pubTypeVideo" value="VIDEO" data-target="#contentTypeVideo" required>
                        Vidéo</label>
                    <label for="pubTypeURL"><input type="radio" name="type" id="pubTypeURL" value="URL" required data-target="#contentTypeURL"> URL </label>
                    <label for="pubTypeLocalisation"><input type="radio" name="type" id="pubTypeLocalisation" value="LOCALISATION"
<<<<<<< HEAD
                                                            required data-target="#contentTypeLocalisation"> Localisation</label-->
=======
                                                            required data-target="#contentTypeLocalisation"> Localisation</label>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                </fieldset>
            </div>
            <div class="bloc">
                <div class="pubContent" id="contentTypeTexte">
                    <label for="pubContentTexte">Contenu</label>
<<<<<<< HEAD
                    <textarea name="contenu" id="pubContentTexte" cols="30" rows="10" placeholder="Soyez inspirez, rédigez quelque chose qui a de la poigne ..." required></textarea>
=======
                    <textarea name="contenu" id="pubContentTexte" cols="30" rows="10" placeholder="Veuillez décrire en quelques mots le contenu de votre type de publication..."required></textarea>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                </div>

                <div class="pubContent hide" id="contentTypeImage">
                    <label for="pubContentImage">URL de l'image en taille réelle</label>
                    <input type="url" id="pubContentImage" placeholder="Renseignez l'URL qui pointe directement sur l'image">
                </div>

                <div class="pubContent hide" id="contentTypeVideo">
                    <label for="pubContentVideo">URL de la vidéo</label>
                    <input type="url" id="pubContentVideo" placeholder="Exemple : https://m.youtube.com/watch?v=yK4OXj-kt-Q">
                </div>

                <div class="pubContent hide" id="contentTypeURL">
                    <label for="pubContentURL">Adresse web</label>
                    <input type="url" id="pubContentURL" placeholder="Renseignez l'URL à publier">
                </div>

                <div class="pubContent hide" id="contentTypeLocalisation">
                    <fieldset>
                        <legend>Coordonnées GPS</legend>
                        <label for="pubLatitude">Latitude</label>
                        <input type="text" id="pubLatitude" placeholder="Exemple : 0.412812">
                        <label for="pubLongitude">Longitude</label>
                        <input type="text" id="pubLongitude" placeholder="Exemple : 9.449617">
                    </fieldset>
                </div>
            </div>
            <div class="bloc">

                <fieldset>
                    <legend>Source</legend>
                    <label for="pubSourceNom">Nom de la source *</label>
                    <input type="text" name="source_nom" id="pubSourceNom" placeholder="Ex: Gabon Media Time" required>
                    <label for="pubSourceURL">URL de la source *</label>
                    <input type="url" name="source_lien" id="pubSourceURL" placeholder="Renseignez le lien de votre source" required>
                </fieldset>

            </div>
            <div class="bloc">

                <fieldset>
                    <legend>Importance</legend>
<<<<<<< HEAD
                    <label for="pubImportanceNormal"><input type="radio" checked name="important" id="pubImportanceNormal" value="NORMAL" required> Normal</label>
                    <label for="pubImportanceBreakingNews"><input type="radio" name="important" id="pubImportanceBreakingNews" value="BREAKING-NEWS" required> Breaking news</label>
=======
                    <label for="pubImportanceNormal"><input type="radio" checked name="important" id="pubImportanceNormal"
                                                            value="NORMAL" required> Normal</label>
                    <label for="pubImportanceFakeNews"><input type="radio" name="important" id="pubImportanceFakeNews" value="FAKE"
                                                            required> Fake News</label>
                    <label for="pubImportanceUrgent"><input type="radio" name="important" id="pubImportanceUrgent" value="URGENT"
                                                            required> Urgent</label>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                </fieldset>

            </div>
            <div class="envoyer">
                <input type="submit" value="Soumettre la publication">

            </div>
        </form>

    </main>

<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script src="<?= asset('assets/js/utils.js', 'covid'); ?>"></script>
    <script src="<?= asset('assets/js/admin.js', 'covid'); ?>"></script>

    <script>
        CKEDITOR.replace('contenu', {
            language: 'fr'
        });
    </script>

</body>

=======
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="<?= asset('assets/js/utils.js', 'covid'); ?>"></script>
    <script src="<?= asset('assets/js/admin.js', 'covid'); ?>"></script>
</body>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
</html>