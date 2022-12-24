<?php

namespace App\Models\Interfaces;

interface PhotoAlbumModelInterface
{
    public static function factory(): PhotoAlbumModelInterface;
    public function isValidAlbumId($album_id): bool;
    public function getAlbum(int $album_id): array;
}
