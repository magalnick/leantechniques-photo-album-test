<?php

namespace Tests\Models;

use Illuminate\Foundation\Testing\WithFaker;
use App\Models\LeanTechniquesPhotoAlbumModel as PhotoAlbumModel;
use Tests\TestCase;
use Exception;
use ArgumentCountError;

class LeanTechniquesPhotoAlbumModelTest extends TestCase
{
    use WithFaker;

    /**
     * @test
     * @return void
     * @throws Exception
     */
    public function testIsValidAlbumId_isEmpty(): void
    {
        $this->expectException(ArgumentCountError::class);
        PhotoAlbumModel::factory()->isValidAlbumId();
    }

    /**
     * @test
     * @return void
     * @throws Exception
     */
    public function testIsValidAlbumId_isNotNumeric(): void
    {
        $this->setUpFaker();
        $album_id = $this->faker->sha256;
        $this->expectException(Exception::class);
        PhotoAlbumModel::factory()->isValidAlbumId($album_id);
    }

    /**
     * @test
     * @return void
     */
    public function testIsValidAlbumId_is0(): void
    {
        $this->expectException(Exception::class);
        PhotoAlbumModel::factory()->isValidAlbumId(0);
    }

    /**
     * @test
     * @dataProvider negativeIntegers
     * @param $album_id
     * @return void
     */
    public function testIsValidAlbumId_isNegative($album_id): void
    {
        $this->expectException(Exception::class);
        PhotoAlbumModel::factory()->isValidAlbumId($album_id);
    }

    /**
     * @test
     * @dataProvider positiveIntegers
     * @param $album_id
     * @return void
     */
    public function testIsValidAlbumId_isPositive($album_id): void
    {
        $expected = true;
        $actual   = PhotoAlbumModel::factory()->isValidAlbumId($album_id);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @return void
     * @throws Exception
     */
    public function testGetAlbum_noResults(): void
    {
        $album_id = 1000000;
        $expected = [];
        $actual   = PhotoAlbumModel::factory()->getAlbum($album_id);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @return void
     * @throws Exception
     */
    public function testGetAlbum_hasResults(): void
    {
        $album_id = 10;
        $expected = 50;
        $actual   = count(PhotoAlbumModel::factory()->getAlbum($album_id));
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @return void
     * @throws Exception
     */
    public function testGetAlbum_100index0(): void
    {
        $album_id = 100;
        $expected = [
            "albumId" => 100,
            "id" => 4951,
            "title" => "ut maxime reiciendis veritatis",
            "url" => "https://via.placeholder.com/600/92bfbf",
            "thumbnailUrl" => "https://via.placeholder.com/150/92bfbf",
        ];
        $actual = PhotoAlbumModel::factory()->getAlbum($album_id)[0];
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function negativeIntegers(): array
    {
        $integers = [];
        for ($i = 0; $i < 1000; $i++) {
            $integers[] = rand(-1000000, -1);
        }
        return [$integers];
    }

    /**
     * @return array
     */
    public function positiveIntegers(): array
    {
        $integers = [];
        for ($i = 0; $i < 1000; $i++) {
            $integers[] = rand(1, 1000000);
        }
        return [$integers];
    }
}
