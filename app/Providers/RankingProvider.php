<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use DOMDocument;
use DOMXPath;

class RankingProvider extends ServiceProvider
{

    public function getRanking($id)
    {
        $url = "https://revistatenis.uol.com.br/ranking/ranking_atp.html";

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erro ao fazer a requisição: ' . curl_error($ch);
        exit;
    }

    curl_close($ch);

    $dom = new DOMDocument();
    @$dom->loadHTML($response);

    $nome_colocado = $dom->getElementsByTagName('td')->item(1 + 4 * ($id - 1))->nodeValue;
    $pontuacao_colocado = $dom->getElementsByTagName('td')->item(2 + 4 * ($id - 1))->nodeValue;

    return [$nome_colocado, $pontuacao_colocado];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
