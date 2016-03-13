<?php
namespace Pasteque\Bundle\APIBundle\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PastequeClient extends GuzzleClient
{
  public function __construct($baseUrl)
  {
    $client = new Client([
      "defaults" => [
        "headers" => [
          "Content-type" => "application/json"
        ],
      ],
      "base_url" => [
        $baseUrl
      ]
    ]);

    $description = new Description([
      "name" => 'Pasteque',
      "description" => "cash register management API",
      "operations" => [
        "getAttribute" => [
          "httpMethod" => "GET",
          "uri"=> "attribute/get/{id}",
          "responseModel" => "jsonResponse",
          "parameters" => [
            "id" => [
              "required" => true,
              "location" => "uri"
            ]
          ]
        ],
        "getAllAttribute" => [
          "httpMethod" => "GET",
          "uri"=> "attribute/getAll",
          "responseModel" => "jsonResponse"
        ],
        "createCustomer" => [
          "httpMethod" => "POST",
          "uri"=> "customers.json",
          "responseModel" => "jsonResponse",
          // pour la création, company_name est obligatoire, envoyé en json
          "parameters" => [
            "customer" => [
              "required" => true,
            ]
          ]
        ],
        "updateCustomer" => [
          "httpMethod" => "PATCH",
          "uri"=> "customer/{id}.json",
          "responseModel" => "jsonResponse",
          "parameters" => [
            "id" => [
              "required" => true,
              "location" => "json",
            ]
          ],
          "additionalParameters" => [
            "location" => "json"
          ]
        ]
      ],
      // les models permettent de définir le traitement appliqué aux réponses de l'API
      // on spécifie ici que l'on veut un objet php à partir du json contenu dans la réponse
      "models" => [
        "jsonResponse" => [
          "type" => "object",
          "additionalProperties" => [
            "location" => "json"
          ]
        ]
      ]
    ]);

    parent::__construct($client, $description);
  }
}