<?php
require_once('../SSI.php');
?>
<html>
<head>
	<meta charset="utf-8">
    <title>IMDB Search Script by ARW Designs</title>
    <link rel="stylesheet" href="scripts/imdb.css">
</head>
</html>
<?php
include_once 'imdb7.class.php';
$imdb = $_REQUEST['imdb'];
$sz = $_REQUEST['sz'];
$oIMDB = new IMDB($imdb);
    if ($oIMDB->isReady) {
        echo '<p><h1><img src="files/imdb.png" height="14" width="30"> ' . $oIMDB->getTitle() . ' </h1>';
        echo '<a href="' . $oIMDB->getUrl() . '" target="_blank"><img src="' . $oIMDB->getPoster($sz, false) . '" style="float:left;margin:4px 10px 10px 0; height="10%" width="10%"></a></p>';
        echo '<p><strong><b>Ratings:</b> ' . $oIMDB->getRating() . ' </strong><br /><b>Runtime:</b> ' . $oIMDB->getRuntime();
        echo '<br /><b>Genre:</b> ' . $oIMDB->getGenre() . '<br /><b>MPAA Rated:</b> ' . $oIMDB->getMpaa() . '<br /><b>Plot:</b> ' . $oIMDB->getPlot(). ' <br /><b>Seasons:</b> ' . $oIMDB->getSeasonsAsUrl() . '</p>';
        }
    else
    {
    echo '<p>Movie not found!</p>';
}
?>
