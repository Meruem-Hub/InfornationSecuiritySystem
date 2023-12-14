<?php
// app/Services/VirusTotalService.php
namespace App\Providers;

use Illuminate\Support\Facades\Http;

class VirusTotalService
{
    public static function scanFile($apiKey, $filePath)
    {
        $apiUrl = "https://www.virustotal.com/vtapi/v2/file/report";
        $fileHash = hash_file("sha256", $filePath);
        $params = [
            "apikey" => $apiKey,
            "resource" => $fileHash,
        ];

        $response = Http::get($apiUrl, $params);
        $report = $response->json();

        return $report;
    }
}
