<?php

//News_model.php
class Pics_model extends CI_Model {



    public function search_pics($tags){

        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        
        //loads api key from config
        $url.= '&api_key=' . $this->config->item('flicker_api_key');
        
        $url.= '&tags=' . $tags;
        $url.= '&per_page=' . 25;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';

        $response = json_decode(file_get_contents($url));
        $pics = $response->photos->photo;
        
        return $pics;
        
        
    }
    
    
}