<?php

namespace App\Models;

use GuzzleHttp\Client;
use Exception;

class LeanTechniquesPhotoAlbumModel extends PhotoAlbumAbstractModel
{
    public function getAlbum(int $album_id): array
    {
        if (!$this->isValidAlbumId($album_id)) {
            throw new Exception("Invalid album ID: $album_id", 400);
        }

        $album_id  = (int) $album_id;
        $album_url = sprintf(
            config('lean-techniques.photo-album.base-url-album'),
            $album_id
        );
        $guzzle_response = (new Client())->request(
            'GET',
            $album_url
        );

        if ($guzzle_response->getStatusCode() >= 300) {
            throw new Exception('Bad response from the photo album server', $guzzle_response->getStatusCode());
        }

        return json_decode(
            $guzzle_response->getBody(),
            true
        );
    }
}
