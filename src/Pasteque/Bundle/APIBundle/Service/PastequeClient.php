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
            "location" => "json",
          ]
        ],

          // #############
          //     ROLE
          // #############

          "getRole" => [
              "httpMethod" => "GET",
              "uri" => "role/get/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          "getAllRole" => [
              "httpMethod" => "GET",
              "uri" => "role/getAll.json",
              "responseModel" => "jsonResponse"
          ],

          // ##############
          //     STOCK
          // ##############

          "getAllStock" => [
              "httpMethod" => "GET",
              "uri" => "stock/getAll/{locationId}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "locationId" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          // #################
          //     TARIFFAREA
          // #################

          "getTariffArea" => [
              "httpMethod" => "GET",
              "uri" => "tariffArea/get/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          "getAllTariffArea" => [
              "httpMethod" => "GET",
              "uri" => "tariffArea/getAll.json",
              "responseModel" => "jsonResponse"
          ],

          // #############
          //     TAX
          // #############

          "getTax" => [
              "httpMethod" => "GET",
              "uri" => "tax/get/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          "getAllTax" => [
              "httpMethod" => "GET",
              "uri" => "tax/getAll.json",
              "responseModel" => "jsonResponse"
          ],

          // #############
          //     TICKET
          // #############

          "getSharedTicket" => [
              "httpMethod" => "GET",
              "uri" => "ticket/getShared/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          "getAllSharedTicket" => [
              "httpMethod" => "GET",
              "uri" => "ticket/getAllShared.json",
              "responseModel" => "jsonResponse"
          ],

          "delSharedTicket" => [
              "httpMethod" => "DELETE",
              "uri" => "ticket/delShared/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri"
                  ]
              ]
          ],

          "shareTicket" => [
              "httpMethod" => "POST",
              "uri" => "ticket/share/{ticket}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "ticket" => [
                      "required" => true
                  ]
              ]
          ],

          "saveTicket" => [
              "httpMethod" => "POST",
              "uri" => "ticket/save/{cashId}/{ticket}/{tickets}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "cashId" => [
                      "required" => true
                  ],
                  "ticket" => [
                      "required" => true
                  ],
                  "tickets" => [
                      "required" => true
                  ]
              ]
          ],

          "getOpenTicket" => [
              "httpMethod" => "GET",
              "uri" => "ticket/getOpen.json",
              "responseModel" => "jsonResponse",
              "additionalParameters" => [
                  "location" => "query"
              ]
          ],

          "searchTicket" => [
              "httpMethod" => "GET",
              "uri" => "ticket/search/{ticketId}/{ticketType}/{cashId}/{dateStart}/{dateStop}/{customerId}/{userId}/{limit}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "ticketId" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "ticketType" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "cashId" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "dateStart" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "dateStop" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "customerId" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "userId" => [
                      "required" => false,
                      "location" => "uri"
                  ],
                  "limit" => [
                      "required" => false,
                      "location" => "uri"
                  ]
              ]
          ],

          // #############
          //     USER
          // #############

          "getUser" => [
              "httpMethod" => "GET",
              "uri" => "user/get/{id}.json",
              "responseModel" => "jsonResponse",
              "parameters" => [
                  "id" => [
                      "required" => true,
                      "location" => "uri",
                  ]
              ]
          ],

          "getAllUser" => [
              "httpMethod" => "GET",
              "uri" => "user/getAll.json",
              "responseModel" => "jsonResponse"
          ],

          // #############
          //    VERSION
          // #############

          "anyActionVersion" => [
              "httpMethod" => "GET",
              "uri" => "version/anyAction.json",
              "responseModel" => "jsonResponse",
              "additionalParameters" => [
                  "location" => "query"
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
