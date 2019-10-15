<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pl-PL"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Wyżal Się</title>
		<meta name="description" content="Chcesz się wyżalić, coś Cię zdenerwowało lub zawiodło. Podziel się wszystkim z Twojego dnia - rozmowa pomaga.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext">
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div id="container">
				<header>
					<div id="log">Logo serwisu</div>
					
					<nav>
						<ul id="menu">
							<li><a href="index.php">NAJNOWSZE WPISY</a></li>
							<li><a href="addenter.html">DODAJ WPIS</a></li>
							<li><a href="old.html">ARCHIWUM</a></li>
							<li><a href="about.html">O PROJEKCIE</a></li>
							<li><a href="contact.html">KONTAKT</a></li>
						</ul>
					</nav>
					
				</header>

				<main>
					<article>
						<div id="content">
							<section>
								<header>
									<h2 id="hd">Najnowsze wpisy</h2>
								</header>
							</section>

							<?php
								$document_root = $_SERVER['DOCUMENT_ROOT'];
					
								if (file_exists("entries.txt")) {
									$wp = fopen("$document_root/nowy/entries.txt", 'rb');
									flock($wp, LOCK_SH);

									while (!feof($wp)) {
										$data = fgets($wp);
										$nick = fgets($wp);
										$tresc = fgets($wp);
										$lines = str_split($tresc, 68);

										echo "<section class='wpis'>
												<div class='date'><time datetime='$data'><i>$data</i></time></div>
												<div class='nick'>$nick</div>
												<div style='clear: both;'></div>
												<div class='text'>";

										foreach ($lines as $line) {
											echo $line."<br />";
										}
										
										echo "</div></section>";
									}

									flock($wp, LOCK_UN);
									fclose($wp);
								}
							?>
							
							
							
							<!-- <section class="wpis">
								<div class="date"><time datetime="2018-07-28 20:07"><i>28 lipca 2018, godz. 20.07</i></time></div>
								<div class="nick">Anonim</div>
								<div style="clear: both;"></div>
								
								<div class="text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas augue vel ipsum congue iaculis. Nulla tempor lorem pretium congue volutpat. Aliquam ut quam a urna commodo sagittis. Aliquam turpis mauris, commodo vel neque a, finibus porttitor erat. Nulla volutpat tellus eget condimentum placerat. Sed in lacus lacus. Vestibulum ante ante, congue ut rutrum vel, porttitor non enim. Nam rutrum libero placerat tellus varius ullamcorper. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In lobortis felis eget consequat varius. Morbi blandit lectus id nisl ultrices porta. 
									Curabitur pharetra libero libero, eget rutrum dolor vulputate at. Vivamus augue lacus, fringilla sit amet mi in, porttitor cursus odio. Nulla laoreet ex sit amet sapien tempor, sit amet facilisis ipsum vulputate. Morbi at lacus est. Sed tincidunt purus maximus vehicula interdum.
								</div>
							</section>
							
							<section class="wpis">
								<div class="date"><time datetime="2018-07-14 12:47"><i>14 lipca 2018, godz. 12.47</i></time></div>
								<div class="nick">Anonim</div>
								<div style="clear: both;"></div>
								
								<div class="text" style="border-bottom: none; margin-bottom: 0;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas augue vel ipsum congue iaculis. Nulla tempor lorem pretium congue volutpat. Aliquam ut quam a urna commodo sagittis. Aliquam turpis mauris, commodo vel neque a, finibus porttitor erat. Nulla volutpat tellus eget condimentum placerat. Sed in lacus lacus. Vestibulum ante ante, congue ut rutrum vel, porttitor non enim. Nam rutrum libero placerat tellus varius ullamcorper. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In lobortis felis eget consequat varius. Morbi blandit lectus id nisl ultrices porta. 
									Curabitur pharetra libero libero, eget rutrum dolor vulputate at. Vivamus augue lacus, fringilla sit amet mi in, porttitor cursus odio. Nulla laoreet ex sit amet sapien tempor, sit amet facilisis ipsum vulputate. Morbi at lacus est. Sed tincidunt purus maximus vehicula interdum.
								</div>
								
								<form style="margin-left: 10px; margin-right: 10px; width: 920px; height: 20px;">
									<input id="butt1" name="prev" type="button" value="Poprzednie" disabled="disabled" onclick="how--; if (how==0) this.form.elements['prev'].disabled = this.onclick" />
									<input id="butt2" name="next" type="button" value="Następne" onclick="this.form.elements['prev'].disabled = !this.onclick; how++" />
								</form>
							</section> -->
							
						</div>

						<section id="cite">
							<div id="cytat">
								<q>...żaden człowiek nie jest samotną wyspą...<br />zawsze potrzebuje innych ludzi...</q><br /><br /><cite>Paulo Coelho</cite>
							</div>
							
							<div id="foto">
								Zdjęcie Paulo Coelho
							</div>
							
							<div style="clear: both;"></div>
						</section>
					</article>
				</main>

				<footer>
					Wyżal Się &copy; 2018 All rights reserved
				</footer>
			</div>
			
		<script src="script.js"></script>
		<script src="jquery.js"></script>
		<script>
			$(document).ready(function() {
				var NavY = $('#menu').offset().top;

				var stickyNav = function(){
					var ScrollY = $(window).scrollTop();

					if (ScrollY > NavY) {
						$('#menu').addClass('sticky');
					} else {
						$('#menu').removeClass('sticky');
					}
				};

				stickyNav();

				$(window).scroll(function() {
					stickyNav();
				});
			});
		</script>
	</body>
</html>