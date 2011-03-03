<?php

//checks if the form has been submitted

if (isset($_POST["spotify_url"]))
{
    if (empty($_POST["spotify_url"]))
        {
            echo "du måste skriva något...";
            break 2;
        }
    elseif (substr($_POST["spotify_url"],0,29)=="http://open.spotify.com/track/")
        {
            echo "det måste vara en låt, inget annat";
            break 2;
        }        

    else
    {
    //exempelurl: 'http://open.spotify.com/track/2lN6G35gsXkA3xzPYqmis5';
    $spotifyurl = file($_POST["spotify_url"]);

    echo "Title:<br/>";
    echo $spotifyurl[56];
    echo "<br/>";
    echo "Artist:<br/>";
    //First substr to remove last " and second substr to remove initial garbage
    echo substr(substr($spotifyurl[63],31), 0,-2);
    }
}
?>
