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
    $resolver = new OptionsResolver();
    $this->configureOptionResolver($resolver);

    // initialisation du client standard Guzzle
    $client = new Client([
      "defaults" => [
        // headers attendus par Pasteque
        "headers" => [
          "Content-type" => "application/json"
        ],
      ],
      "base_url" => [
        $baseUrl
      ]
    ]);

    // définition des requètes supportées par notre service
    $description = new Description([
      "name" => 'Pasteque',
      "description" => "cash register management API",
      // list des opérations supportées
      "operations" => [
        // pour commencer, une simple récupération de la liste des clients
        "getCustomers" => [
          "httpMethod" => "GET",
          // l'uri est ajoutée à notre base_url définie par défaut
          "uri"=> "customers.json",
          // la réponse attendue sera traitée avec le model jsonResponse,
          // déclaré plus bas dans "models"
          "responseModel" => "jsonResponse",
          // par défaut tout paramètre additionnel passé à cette requète
          // sera envoyé dans le query_string de l'url appelée
          "additionalParameters" => [
            "location" => "query"
          ]
        ],
        // récupération d'un client à partir de son id
        "getCustomer" => [
          "httpMethod" => "GET",
          // pour la récupération d'un client spécifique l'id est dans l'uri
          "uri" => "customers/{id}.json",
          "responseModel" => "jsonResponse",
          // on spécifie ici que le paramètre id est obligatoire et se trouve dans l'uri
          "parameters" => [
            "id" => [
              "required" => true,
              "location" => "uri"
            ]
          ]
        ],
        "createCustomer" => [
          "httpMethod" => "POST",
          "uri"=> "customers.json",
          "responseModel" => "jsonResponse",
          // pour la création, company_name est obligatoire, envoyé en json
          "parameters" => [
            "company_name" => [
              "required" => true,
              "location" => "json",
            ]
          ],
          // les autres paramètres sont facultatifs, également envoyés en json
          "additionalParameters" => [
            "location" => "json"
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

    parent::__construct($client, $description, $config);
  }

  protected function configureOptionResolver(OptionsResolverInterface $resolver)
  {
    $resolver
      ->setDefaults([
        'base_url' => 'https://www.facturation.pro/firms/{firm_id}/',
      ])
      ->setRequired([
        'api_login',
        'api_password',
        'account',
        'firm_id',
        'app_name',
      ])
    ;
  }
}