<?php

function getHashtag($hashtag){
    
    return '#' . str_replace(' ', '', $hashtag);
}
