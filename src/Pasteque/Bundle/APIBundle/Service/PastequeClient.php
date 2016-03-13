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
