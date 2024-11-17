<?php

namespace DigitalCoreHub\TinypngLaravel;

use Tinify\Source;
use Tinify\Tinify;

class TinypngLaravel
{
    public function __construct()
    {
        try {
            Tinify::setKey(config('tinypng.api_key'));
        } catch (\Tinify\Exception $e) {
            return $e->getMessage();
            // Validation of API key failed.
        }
    }

    /**
     * Dosyadan görüntüyü optimize eder ve sonucu dosya olarak kaydeder.
     * Optimizes the image from the file and saves the result as a file.
     *
     * @return void
     *
     * @throws \Tinify\Source
     */
    public function compressFromFile(string $inputPath, string $outputPath)
    {
        $source = Source::fromFile($inputPath);
        $source->toFile($outputPath);
    }

    /**
     * URL'den görüntüyü optimize eder ve sonucu dosya olarak kaydeder.
     * Optimizes the image from the URL and saves the result as a file.
     *
     * @return void
     *
     * @throws \Tinify\Source
     */
    public function compressFromUrl(string $url, string $outputPath)
    {
        $source = Source::fromUrl($url);
        $source->toFile($outputPath);
    }

    /**
     * Buffer'dan (örneğin Base64) görüntüyü optimize eder ve sonucu dosya olarak kaydeder.
     * Optimizes the image from the buffer (e.g., Base64) and saves the result as a file.
     *
     * @return void
     *
     * @throws \Tinify\Source
     */
    public function compressFromBuffer(string $buffer, string $outputPath)
    {
        $source = Source::fromBuffer($buffer);
        $source->toFile($outputPath);
    }

    /**
     * Görüntüyü yeniden boyutlandırır.
     * Resizes the image.
     *
     * @return void
     *
     * @throws \Tinify\Source
     */
    public function resize(string $inputPath, string $outputPath, array $options)
    {
        $source = Source::fromFile($inputPath);
        $resized = $source->resize($options);
        $resized->toFile($outputPath);
    }

    /**
     * Kullanım bilgilerini alır.
     * Retrieves usage information.
     *
     * @return int
     *
     * @throws \Tinify\Exception
     */
    public function getCompressionCount()
    {
        return Tinify::getCompressionCount();
    }
}
