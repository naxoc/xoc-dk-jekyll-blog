<?
	include("../../functions/func.inc.php");

	HTMLheader("RSS feed");
?>
	<div id="content">
	<p>
		In lack of a way to serve you an XML version of the content 
		on my site, I present the <b><u>R</u>andom <u>S</u>upper <u>S</u>ervice:</b>
	</p>
<?
	feed();
?>
	<p>
		Here you can check out what my girlfriend and I feed on.
	</p>
	<p>
		<a href="RSSfeed.php">More RSS!</a>
	</p>
	</div>
<?

		Counter("RSS_feed");
?>
</body>
</html>
