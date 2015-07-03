<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>

	<link href='http://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
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
						<img class="no-shadow" src="img/me-with-keiko.jpg" alt="" />
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

				<div class="table-layout">
					<div class="table-col-6 vertical-center">
						<p>Battre le record du nombre d'images de chats utilisées dans une seule présentation à un WordCamp</p>

						<p>N'oubliez pas d'aller voir
							<a href="http://www.kittycount.com/">http://www.kittycount.com/</a><br />
							et de voter! <a href="https://twitter.com/hashtag/wordCatMTL">#wordCatMtl</a></p></div>
					<div class="table-col-6 vertical-center"><img class="full-width" src="gifs/excite.gif" alt="" />
					</div>
				</div>


			</section>
		</section>

		<section><h3>Aujourd'hui...</h3>
			<section><h3>On ne parlera pas de thèmes qui offrent du contenu sur mesure.</h3></section>
			<section>
				<h3>On ne verra pas comment adapter les besoins et le contenu de votre client à un thème ou une extension spécifique.</h3>
			</section>
			<section><h3>On va voir comment adapter WordPress aux besoins de votre client.</h3></section>
		</section>


		<section>
			<section>
				<h1>Articles, pages, ...chats?</h1>
			</section>
			<section>
				<h2>
					<small>À la base,</small>
					<br /> WordPress gère des articles (<em>posts</em>) et des pages.
				</h2>
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
				<h3>Demanderiez-vous<br />&laquo;&nbsp;Affiche-moi les 10 succursales les plus récentes&nbsp;&raquo;?
				</h3>

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

				<p class="fragment">Registre d'employés?<br />On peut toujours utiliser des pages hiérarchiques.</p>
			</section>

			<section>
				<div class="row">
					<div class="col-6"><img class="full-width" src="gifs/cat-butt.gif" alt="" /></div>
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
					<li>supporter uniquement les titres et les images à la une (<em>Featured Image</em>),
						<small>par exemple</small>
					</li>
					<li>avoir des catégories et des <em>tags</em></li>
					<li>...et bien d'autres aspects des pages et articles</li>
				</ul>
			</section>

			<section>
				<h4>Comme on adapte WordPress aux besoin du clients, rappellons qu'on peut aussi déclarer des Taxonomies sur mesure.</h4>
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

			<section><h2>Ces <em>Contenus Sur Mesure</em> auront</h2>
				<ul>
					<li>leurs propres menus</li>
					<li>leurs propres sections dans le tableau de bord</li>
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
			<section>Qu'on parle d'articles, de pages ou de CSM, WordPress nous permet d'enregistrer des propriétés additionnelles.</section>
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
				<h1>Le site, son plan, son cotenu et ses pages</h1>
			</section>

			<section><h3>Quelle est la première étape après avoir rencontré votre client et noté ses besoins?</h3>
			</section>

			<section>
				<div class="table-layout">
					<div class="table-col-6 vertical-center"><h2>Demander un design à votre graphiste?</h2></div>
					<div class="table-col-6 vertical-center">
						<div class="fragment">
							<img class="full-width" src="img/grumpy-non.jpg" alt="" />
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="table-layout">
					<div class="table-col-6 vertical-center">
						<h2>Demander à votre développeur de commencer à préparer le thème et les extensions?</h2></div>
					<div class="table-col-6 vertical-center">
						<div class="fragment">
							<img class="full-width" src="img/grumpy-non.jpg" alt="" />
						</div>
					</div>
				</div>
			</section>


			<section>
				<div class="table-layout">
					<div class="table-col-6 vertical-center">
						<h2>On va planifier le site entier, sur papier.</h2>
						* La méthode papier est optionnelle.
					</div>
					<div class="table-col-6 vertical-center">
						<div class="fragment">
							<img class="full-width" src="gifs/grumpy-cat-yes.gif" alt="" />

							<h1>Oui!</h1>
						</div>
					</div>
				</div>
			</section>
		</section>


		<section>
			<h2>La planification d'un site</h2>

			<p>&laquo;&nbsp;Ben. J'ai dessiné ça.&nbsp;&raquo;</p>
			<?php include( '_sources/site-map-basic.svg' ); ?>
			<p>&laquo;&nbsp;Je suis prêt.&nbsp;&raquo;</p>

			<h2 class="fragment">...pas tout à fait</h2>
		</section>

		<section>
			<div class="table-layout">
				<div class="table-col-6 vertical-center">
					<h3>Si c'est l'étendue de votre planification, votre graphiste et votre développeur ne sauront pas vraiment ce dont vous avez besoin.</h3>
				</div>
				<div class="table-col-6 vertical-center">
					<img class="full-width" src="gifs/phone-kitty.gif" alt="" />
				</div>
			</div>
		</section>

		<section>
			<section>
				<h3>Notre projet exemple&nbsp;:</h3>

				<h1 class="fragment">Un refuge pour chats</h1>

			</section>
			<section>
				<p>Les refuges pour chats sont généralement des OBNLs.</p>

				<p>Plutôt que de garder les chats en cage, les animaux sont gardés par des familles d'accueil, le temps qu'ils soient adoptés.</p>
			</section>


			<section data-transition="slide-in fade-out"><h2>Commençons un plan...</h2>

				<div class="contain-svg refuge-map refuge-map-1">
					<?php include( '_sources/site-map-refuge-1.svg' ); ?>
				</div>
			</section>

			<section data-transition="fade-in fade-out"><h2>Ajoutons les articles</h2>

				<div class="contain-svg refuge-map refuge-map-2">
					<?php include( '_sources/site-map-refuge-1.svg' ); ?>
				</div>
			</section>
			<section data-transition="fade-in fade-out"><h2>Pensons à nos chats</h2>

				<div class="contain-svg refuge-map refuge-map-3">
					<?php include( '_sources/site-map-refuge-1.svg' ); ?>
				</div>
			</section>
		</section>


		<section>
			<section><h1>Qu'est-ce qu'un chat? </h1></section>

			<section>
				<h2>Je vous présente Bettie</h2>

				<div class="table-layout">
					<div class="table-col-4 vertical-center">
						<div class="fragment" data-fragment-index="1">
							<ul>
								<li>Nom</li>
								<li>Race</li>
								<li>Couleur</li>
								<li>Biographie</li>
								<li>Longueur du poil</li>
							</ul>
						</div>
					</div>
					<div class="table-col-4 vertical-bottom">
						<img class="full-width" src="img/bettie-pic.jpg" alt="" />
					</div>
					<div class="table-col-4 vertical-center">
						<div class="fragment" data-fragment-index="1">
							<ul>
								<li>Âge</li>
								<li>Tempérament</li>
								<li>Maladies</li>
								<li>Dégriffée?</li>
								<li>Déjà adoptée?</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</section>


		<section>
			<section><h1>On commence à connaître les propriétés dont on aura besoin</h1></section>
			<section>
				<div class="table-layout">
					<div class="table-col-6">
						D'une part on a les propriétés
						<ul>
							<li>Nom</li>
							<li>Race</li>
							<li>Couleur</li>
							<li>Biographie</li>
							<li>Longueur du poil</li>
							<li>Âge</li>
							<li>Tempérament</li>
							<li>Maladies</li>
							<li>Dégriffée?</li>
							<li>Déjà adoptée?</li>
						</ul>

					</div>
					<div class="table-col-6 fragment">
						<p>Pensons à comment les webmestres vont les entrer&nbsp;:</p>
						<ul>
							<li>Champ texte</li>
							<li>Champ WYSIWYG</li>
							<li>Image</li>
							<li>Menu déroulant</li>
							<li>Boutons radio</li>
							<li>Cases à cocher</li>
							<li>Carte Google</li>
							<li>Vidéos (lien YouTube/Vimeo)</li>
							<li>Groupes de champs</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section>
				<h4>Tant qu'à y être, pensons aux développeurs</h4>
				<table class="cat-properties-planning-table">
					<tr>
						<th>Propriété</th>
						<th><code class="fragment" data-fragment-index="1">Nom du champ</code></th>
						<th><span class="fragment" data-fragment-index="2">Type de champ</span></th>
					</tr>
					<tr>
						<td>Nom</td>
						<td><code class="fragment" data-fragment-index="1">the_title*</code></td>
						<td><span class="fragment" data-fragment-index="2">the_title(texte)</span></td>
					</tr>
					<tr>
						<td>Race</td>
						<td><code class="fragment" data-fragment-index="1">cat_race</code></td>
						<td><span class="fragment" data-fragment-index="2">Champ texte</span></td>
					</tr>
					<tr>
						<td>Couleur</td>
						<td><code class="fragment" data-fragment-index="1">cat_colour</code></td>
						<td><span class="fragment" data-fragment-index="2">Champ texte</span></td>
					</tr>
					<tr>
						<td>Biographie</td>
						<td><code class="fragment" data-fragment-index="1">the_content*</code></td>
						<td><span class="fragment" data-fragment-index="2">the_content(éditeur WYSIWYG)</span></td>
					</tr>
					<tr>
						<td>Longueur du poil</td>
						<td><code class="fragment" data-fragment-index="1">cat_hair_length</code></td>
						<td><span class="fragment" data-fragment-index="2">Champ nombre</span></td>
					</tr>
					<tr>
						<td>Âge</td>
						<td><code class="fragment" data-fragment-index="1">cat_age</code></td>
						<td><span class="fragment" data-fragment-index="2">Champ nombre (ou datepicker)</span></td>
					</tr>
					<tr>
						<td>Tempérament</td>
						<td><code class="fragment" data-fragment-index="1">cat_personality</code></td>
						<td><span class="fragment" data-fragment-index="2">Champs texte</span></td>
					</tr>
					<tr>
						<td>Maladies</td>
						<td><code class="fragment" data-fragment-index="1">cat_sickness</code></td>
						<td><span class="fragment" data-fragment-index="2">Champs texte</span></td>
					</tr>
					<tr>
						<td>Dégriffée?</td>
						<td><code class="fragment" data-fragment-index="1">cat_is_declawed</code></td>
						<td><span class="fragment" data-fragment-index="2">Boutons radio (oui/non)</span></td>
					</tr>
					<tr>
						<td>Déjà adoptée?</td>
						<td><code class="fragment" data-fragment-index="1">cat_is_adopted</code></td>
						<td><span class="fragment" data-fragment-index="2">Boutons radio (oui/non)</span></td>
					</tr>
				</table>
				<small style="margin-top: 20px;">* Pour le nom et le contenu, on va profiter des propriétés (champs de BD) existantes.</small>
			</section>
<section>
	<p>On n'a même pas encore parlé de...</p>
	<ul>
		<li>Photos du chat
			<ul>
				<li>Image à la une</li>
				<li>Gallerie</li>
			</ul>
		</li>
		<li>Vidéos du chat</li>
		<li>Lien avec d'autres chats (frères/soeurs)</li>
		<li>...</li>
	</ul>
</section>
		</section>


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
