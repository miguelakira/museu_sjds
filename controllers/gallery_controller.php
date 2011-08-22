<?php
class GalleryController extends AppController {

    var $name = 'Gallery';
    var $components = array('flickr');
    var $uses = null;
    
    function index($id = null) {
      $photosets = $this->flickr->photosets_getList("63786772@N04"); 
      $this->set("sets", $photosets);
      $currset = $id == null ? $photosets["photoset"][0]["id"] : $id;
      $this->set("currset", $this->flickr->photosets_getInfo($currset)); 
      $this->set("thumbs", $this->flickr->photosets_getPhotos($currset));
    }
    
}
?>