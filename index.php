<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="reveal">
	<div class="slides">

		<section data-background="img/test_pattern.png"></section>


		<section>
			<section>
				<h1>Bonjour!</h1>

				<div class="row">
					<div class="col-6">
						<img class="no-shadow" src="img/me.png" alt="" />
					</div>
					<div class="col-6">
						<h1>Michal Bluma</h1>
						<img class="home-logo no-shadow" src="img/logo.svg" alt="" />

						<p><a href="http://isotrope.net/">isotrope.net</a></p>

						<p><a href="http://twitter.com/isotrope/">@isotrope</a></p>

						<p><a href="https://www.facebook.com/isotrope.net/">fb.com/isotrope.net</a></p>
					</div>
				</div>
			</section>

			<section>
				<h2>Défi personnel</h2>

				<p>Battre le record du nombre d'images de chats utilisées dans une seule présentation à un WordCamp</p>

				<p>N'oubliez pas d'aller voir <a href="http://www.kittycount.com/">http://www.kittycount.com/</a><br />
					et de voter! <a href="https://twitter.com/hashtag/wordCatMTL">#wordCatMtl</a></p>

			</section>
		</section>

		<section><h3>Aujourd'hui...</h3>
			<section>On ne parlera pas de thèmes qui offrent ce dont on va parler.</section>
			<section>On ne verra pas comment adapter les besoins et le contenu de votre client à un thème ou une extension spécifiques.</section>
			<section>On va voir comment adapter WordPress aux besoin de votre client.</section>
		</section>


		<section>
			<section>
				<h1>Articles, pages, ... chats?</h1>
			</section>
			<section>
				<small>À la base,</small>
				<br /> WordPress gère des articles (<em>posts</em>) et des pages.
			</section>

			<section>
				<h2>Articles</h2>
				<ul>
					<li>Contenu <em>temporel</em></li>
					<li>S'applique à <em>Maintenant</em>, <em>Récemment</em>, <em>Bientôt,...</em></li>
				</ul>
				<p class="fragment">Si on veut publier une nouvelle, c'est avec un article qu'on va le faire.</p>
			</section>

			<section>
				<h2>Pages</h2>
				<ul>
					<li>Contenu toujours applicable</li>
					<li>Informations plutôt que <em>nouvelles</em></li>
				</ul>
				<div class="fragment">
					<p>Présenter une entreprise?<br />
						"À propos de nous" -> avec une page</p>

				</div>
			</section>

			<section>
				Question facile&nbsp;:
				<h3>Demanderiez-vous "Affiche-moi les 10 succursales les plus récentes"?</h3>

				<div class="fragment">Probablement pas.</div>
			</section>
			<section>
				<h3>Les dix articles les plus récents?</h3>

				<div class="fragment">Définitivement.</div>
			</section>
		</section>

		<section>
			<section>
				<h1>Custom Post Types</h1>

				<h3 class="fragment">( Contenu Sur Mesure )</h3>
			</section>

			<section>
				<p>On peut souvent adapter du contenu en utilisant des pages.</p>

				<p class="fragment"> Registre d'employés?<br />On peut toujours utiliser des pages hiérarchiques.</p>
			</section>

			<section>
				<div class="row">
					<div class="col-6"><img src="gifs/cat-butt.gif" alt="" /></div>
					<div class="col-6">
						<div>Au lieu de tricher,</div>
						<div class="fragment">utilisons une fonctionalité <strong>déjà présente</strong> dans WordPress&nbsp;:
						</div>
						<div class="fragment">les Custom Post Types<br />
							<small>*aussi connus en tant que CPTs</small>
						</div>
					</div>
				</div>


			</section>
			<section>
				Pour aujourd'hui, appellons les <em>CPT</em> du <em>Contenu Sur Mesure</em>, ou <em>CSM</em>.
			</section>
			<section>
				<h2>Les CSM peuvent&nbsp;</h2>
				<ul>
					<li><em>agir</em> comme des articles (posts) ou des pages.</li>
					<li>avoir une hiérarchie</li>
					<li>supporter que les titres et les images à la une (<em>Featured Image</em>),
						<small>par exemple</small>
					</li>
					<li>avoir des catégories et des <em>tags</em></li>
					<li>...et bien d'autres aspects des pages et articles</li>
				</ul>
			</section>

			<section>
				<h4>Comme on adapte WordPress aux besoin du clients, aussi bien mentionner qu'on peut aussi déclarer des Taxonomies sur mesure.</h4>
			</section>

			<section>
				<div class="row">
					<div class="col-6">
						<h3>En créant des Contenus Sur Mesure, on peut maintenant adapter le site aux besoins de notre client.</h3>
					</div>
					<div class="col-6 fragment">
						<h3>On peut maintenant gérer des...</h3>
						<ul>
							<li>chats</li>
							<li>livres</li>
							<li>événements</li>
							<li>succursales</li>
							<li>employés</li>
							<li>projets</li>
							<li>portfolios</li>
							<li>...</li>
						</ul>
					</div>
				</div>
			</section>

			<section><h2>Ils auront</h2>
				<ul>
					<li>leurs propres menus</li>
					<li>leurs propres listes de gestions</li>
					<li>leurs propres archives
						<small>(si on veut)</small>
					</li>
				</ul>
			</section>

		</section>

		<section>
			<section>
				<h1>Métadonnées</h1>
				<h4><em>Postmeta</em></h4>
			</section>
			<section>Qu'on parle d'articles, de pages ou de CSM, WordPress nous permet d'enregistrer des données connexes, voire des propriétés additionnelles.</section>
			<section>
				<h3>Outre le champ de titre et l'éditeur de contenu, on pourrait vouloir ajouter des propriétés comme</h3>
				<ul>
					<li>la race d'un chat</li>
					<li>le nombre de pages d'un livre</li>
					<li>le client d'une réalisation</li>
					<li>...</li>
				</ul>

			</section>


			<section><h1>WordPress nous permet d'associer des métadonnées à tous nos types de contenus.</h1></section>


			<section>
				<h2>Mettons de côté les CSM et les métadonnées.</h2>

				<h2>Discutons de la préparation d'un site.</h2>
			</section>
		</section>

		<section>
			<section>
				<h1>Le site, son plan et ses pages</h1>
			</section>

			<section><h1>Quelle est la première étape après avoir rencontré votre client et noté ses besoins?</h1></section>

			<section><h2>Demander un design à votre graphiste?</h2>

				<div class="fragment"><h1>Non!</h1></div>
			</section>

			<section><h2>Demander à votre développeur de commencer à préparer le thème et les extensions?</h2>

				<div class="fragment"><h1>Non!</h1></div>
			</section>


			<section><h2>On va planifier le site entier, sur papier.</h2>
				* La méthode papier est optionnelle.
				<div class="fragment"><h1>Oui!</h1></div>
			</section>
		</section>


		<section>
			<div class="step-2">
				<?php include( '_sources/site-map.svg' ); ?>
			</div>
			<?php include( '_sources/site-map.svg' ); ?>

			"Ben. J'ai dessiné ça. Je suis prêt!"
			[site-map-step1]

			...pas tout à fait
		</section>


		<section>Notre projet exemple :
			Un refuge pour chats

			<section>Les refuges pour chats sont générlament des OBNLs.
				Souvent, plutôt que de garder les chats en cage, les animaux sont gardés par des familles d'accueil le temps qu'ils soient adoptés.
			</section>


		</section>
		</section>


		<section>Properties</section>


		<section>Dev fields</section>


		<section>Front-page content
			ACF versus Widgets
		</section>

	</div>
</div>


<script id="jquery-lib" type="text/javascript" src="_diagrammar/js/jquery-2.1.4.min.js"></script>
<script id="reveal.js" type="text/javascript" src="js/reveal.js/js/reveal.js"></script>
<script id="iso-scripts" type="text/javascript" src="js/jquery.iso.js"></script>

</body>
</html>
