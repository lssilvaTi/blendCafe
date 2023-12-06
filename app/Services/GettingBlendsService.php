<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GettingBlendsService
{

    /**
     * Send a request to the Python service.
     *
     * @param array $data Associative array containing the data to send.
     * @return mixed The response from the Python service.
     */
    public function sendRequestToOptimize(array $grainsInStock, array $blendDetail, int $quantity, int $type)
    {   

        // Removendo chaves indesejadas
        foreach ($grainsInStock as $key => $grain) {
            unset($grainsInStock[$key]['resource_url']);
            if ($type != 3) {
                unset($grainsInStock[$key]['safra']);
            }

            if ($type == 3) {
                $grainsInStock[$key]['safra'] = $this->calcularIdadeSafra($grainsInStock[$key]['safra']);
            }

            if ($grainsInStock[$key]['qtd'] == 0) {
                unset($grainsInStock[$key]);
            }
        }

        $grainsInStock = array_values($grainsInStock);

        // Removendo chaves indesejadas
        // unset($blendDetail['resource_url']);

        // $total = 0;

        // foreach ($blendDetail as $key => $value) {
        //     // Verifica se a chave atual é um valor máximo
        //     if (strpos($key, 'max_') === 0) {
        //         $minKey = 'min_' . substr($key, 4);
        
        //         // Se ambos min e max são maiores que zero, subtrai e soma ao total
        //         if (isset($blendDetail[$minKey]) && $value > 0 && $blendDetail[$minKey] > 0) {
        //             $total += $value;
        //         } else {
        //             // Se um dos valores (min ou max) é zero, soma o outro valor ao total
        //             $total += max($value, $blendDetail[$minKey]);
        //         }
        //     }
        // }

        // Adiciona o total ao array
        // $blendDetail['total'] = $total;

        // Preparando o array de dados para a requisição
        $requestData = [
            'grains' => $grainsInStock,
            'blendDetail' => $blendDetail,
            'quantity' => $quantity
        ];

        // A URL da api para resolução do problema de otimização
        if($type == 1) {
            $url = 'http://node-app:3000/solve';
        }

        if($type == 2) {
            $url = 'http://node-app:3000/maximize-lots';
        }

        if($type == 3) {
            $url = 'http://node-app:3000/maximize-age';
        }
        
        try {
            $response = Http::post($url, $requestData);

            if ($response->successful()) {
                return $response->json();
            }

            if ($response->failed()) {
                return [
                    'error' => 'Request failed.',
                    'status' => $response->status(),
                    'response' => $response->body()
                ];
            }
        } catch (\Exception $e) {
            return ['error' => 'An error occurred while sending the request: ' . $e->getMessage()];
        }
    }

    function calcularIdadeSafra($safra) {
        // Extrai o primeiro ano da safra. Exemplo: "18/19" ou "18/18" -> "18"
        $anoSafra = substr($safra, 0, 2);
    
        // Converte o ano da safra para um formato de quatro dígitos
        $anoAtual = date("Y"); // Obtém o ano atual com quatro dígitos
        $anoSafraCompleto = 2000 + intval($anoSafra); // Converte para quatro dígitos
    
        // Considera que a safra começa no segundo semestre
        // Portanto, adiciona 0.5 para representar a metade do ano
        $inicioSafra = $anoSafraCompleto + 0.5;
    
        // Calcula a idade da safra
        $idadeSafra = floatval($anoAtual) - $inicioSafra;
    
        return $idadeSafra;
    }
}
