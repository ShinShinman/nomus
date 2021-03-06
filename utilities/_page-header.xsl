<?xml version="1.0" encoding="utf-8"?>

<!DOCTYPE xsl:stylesheet [
	<!ENTITY nbsp "&#x00A0;">
	<!ENTITY copy   "&#169;">
	<!ENTITY ndash "&#8211;">
	<!ENTITY thinsp "&#8201;">
	<!ENTITY amp "&#038;">
	<!ENTITY hellip "&#8230;">
	<!ENTITY bull "&#8226;">
	<!ENTITY lsaqua "&#8249;">
	<!ENTITY rsaqua "&#8250;">
	<!ENTITY larr "&#8592;">
	<!ENTITY rarr "&#8594;">
	<!ENTITY lsaquo "&#8249;">
	<!ENTITY rsaquo "&#8250;">
	<!ENTITY percent "&#37;">
	<!ENTITY gt "&#37;">
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:include href="_lang-btn.xsl" />

	<xsl:template name="page-header">
		<section class="page-header">
			<header class="logo">
				<a href="{$root}/{//current-language/@handle}/"><img src="{$workspace}/images/n.svg" class="logo-n" /><img src="{$workspace}/images/n-mob.svg" id="logo-mob" class="logo-n" /></a>
				<img src="{$workspace}/images/nomus.svg" class="logo-nomus" />
			</header>
			<nav>
			<div class="menu-anchor" />

			<div class="slogan">
				<img class="tail" src="{$workspace}/images/nms.svg" alt="" />
				<div class="menu-trigger"><a href="javascript:void(0)">M</a></div>
				<!--
				<xsl:call-template name="lang-btn">
					<xsl:with-param name="lang" select="//current-language/@handle" />
				</xsl:call-template>
				-->
			</div>

			<!--
				<ul class="menu inline-list">
					<li>
						<a href="#">działalność</a>
					</li>
					<li>
						<a href="#">muzeum</a>
					</li>
					<li><a href="#">przewodniki</a></li>
					<li class="yszt"><a href="#">newsleter</a></li>
				</ul>
			-->

			<!--
				<ul class="slogan inline-list">
					<li>
						<a href="#">działalność</a>
					</li>
					<li>
						<a href="#">muzeum</a>
					</li>
					<li><a href="#">przewodniki</a></li>
					<li class="yszt"><a href="#">newsleter</a></li>
				</ul>

			-->
			</nav>
		</section>
	</xsl:template>

</xsl:stylesheet>
