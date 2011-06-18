<?php

//checks if the form has been submitted

if (isset($_POST["spotify_url"]))
{

    if (empty($_POST["spotify_url"]))
        {
		//nothing was entered in the form
		echo "you have to enter a spotify http link";
		break;
        }
    elseif (substr($_POST["spotify_url"],0,29)!="http://open.spotify.com/track")
        {
		echo "it has to be a song http link, nothing else";
		break;
        }        

    /*elseif (substr($_POST["spotify_url"],0,29)=="If you enable JavaScript in your browser"); 
	{
		echo substr($_POST["spotify_url"],0,29);
		echo "<br/>";
		echo "something went wrong, you got the js error again";
		break;
	}*/

    	//exempelurl: 'http://open.spotify.com/track/2lN6G35gsXkA3xzPYqmis5';
    	$cleanspotifyurl = file($_POST["spotify_url"]);

	$songtitle=$cleanspotifyurl[56];
	//First substr to remove last " and second substr to remove initial garbage
	$artist= substr(substr($cleanspotifyurl[63],31), 0,-2);


    	echo "Title:<br/>";
	echo $songtitle;
    	echo "<br/>";

	echo "Artist:<br/>";
	echo $artist;
	echo "<br/>";

	echo "youtube search link:";
	echo "<br/>";
	echo "http://www.youtube.com/results?search_query=".$artist.$songtitle;
	
	echo "<br/>";
	echo "google im feeling lucky search with specified site:youtube.com parameter";
	echo "<br/>";
	echo "<a href="http://www.google.com/search?q=".$artist.$songtitle."+site:youtube.com&btnI">link</a>;

	//echo "<a href="http://kg-tm04/olonor9215/PHP/spotify-get/">return @ school</a>";
	echo "<a href="http://localhost/spotify-get/index.htm">return</a>";
}

else
{
	echo "big errors here";
}
?>
