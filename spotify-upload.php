<?php

//checks if the form has been submitted

if (isset($_POST["spotify_url"]))
{
    if (empty($_POST["spotify_url"]))
        {
		echo "du måste skriva något...";
        }
    elseif (substr($_POST["spotify_url"],0,29)=="http://open.spotify.com/track/")
        {
		echo "det måste vara en låt, inget annat";
        }        

    elseif (substr($_POST["spotify_url"],0,29)=="If you enable JavaScript in your browser,")
	{
		echo "something went wrong, you got the js error again";
	}
    else
    	{
    	//exempelurl: 'http://open.spotify.com/track/2lN6G35gsXkA3xzPYqmis5';
    	$spotifyurl = file($_POST["spotify_url"]);

	$songtitle=$spotifyurl[56];
        //First substr to remove last " and second substr to remove initial garbage
        $artist= substr(substr($spotifyurl[63],31), 0,-2);


    	echo "Title:<br/>";
   	echo $songtitle;
    	echo "<br/>";

    	echo "Artist:<br/>";
    	echo $artist;

	echo "<br/>";
        echo "http://www.youtube.com/results?search_query=".$artist.$songtitle;

        echo "<p>Youtubepage hopefully containing somehting relevant to the link</p>";
        //echo "<iframe src="http://www.youtube.com/results?search_query="$artist.$songtitle" width="150px" height="200px"></iframe>";
        
        echo "<br/>";
        //echo "<a href="http://kg-tm04/olonor9215/PHP/spotify-get/">return @ school</a>";
	//echo "<a href="http://localhost/spotify-get/index.htm">return @ home</a>;


   	}
}
?>
