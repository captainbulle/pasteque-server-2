<?php

namespace Pasteque\Bundle\APIBundle\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

class PastequeClient extends GuzzleClient
{
    public function __construct($baseUrl)
    {
        $client = new Client([
            'defaults' => [
                'headers' => [
                    'Content-type' => 'application/json',
                ],
            ],
            'base_url' => [
                $baseUrl,
            ],
        ]);

        $description = new Description([
            'name' => 'Pasteque',
            'description' => 'Cash register management API',
            'operations' => [
                // ################
                //     ATTRIBUTE
                // ################

                'getAttribute' => [
                    'httpMethod' => 'GET',
                    'uri' => 'attribute/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllAttribute' => [
                    'httpMethod' => 'GET',
                    'uri' => 'attribute/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createAttribute' => [
                    'httpMethod' => 'POST',
                    'uri' => 'attribute/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateAttribute' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'attribute/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteAttribute' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'attribute/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     CASH
                // ################

                'getCash' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cash/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'searchCash' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cash/search/{cashRegisterId}/{dateStart}/{dateStop}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'cashRegisterId' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'dateStart' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'dateStop' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getCashRegister' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cashRegister/get/{type}/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'type' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'zticketCash' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cash/zticket/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'moveCashMovement' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cashMovement/move/{id}/{date}/{payment}/{note}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                        'date' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                        'payment' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                        'note' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllCashRegister' => [
                    'httpMethod' => 'GET',
                    'uri' => 'cashRegister/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createCash' => [
                    'httpMethod' => 'POST',
                    'uri' => 'cash/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateCash' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'cash/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteCash' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'cash/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     CATEGORY
                // ################

                'getCategory' => [
                    'httpMethod' => 'GET',
                    'uri' => 'category/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getChildrenCategory' => [
                    'httpMethod' => 'GET',
                    'uri' => 'category/getChildren/{parentId}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'parentId' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllCategory' => [
                    'httpMethod' => 'GET',
                    'uri' => 'category/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createCategory' => [
                    'httpMethod' => 'POST',
                    'uri' => 'category/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateCategory' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'category/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteCategory' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'category/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     CURRENCY
                // ################

                'getCurrency' => [
                    'httpMethod' => 'GET',
                    'uri' => 'currency/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getMainCurrency' => [
                    'httpMethod' => 'GET',
                    'uri' => 'currency/getMain.json',
                    'responseModel' => 'jsonResponse',
                ],

                'getAllCurrency' => [
                    'httpMethod' => 'GET',
                    'uri' => 'currency/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createCurrency' => [
                    'httpMethod' => 'POST',
                    'uri' => 'currency/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateCurrency' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'currency/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteCurrency' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'currency/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     CUSTOMER
                // ################

                'getCustomer' => [
                    'httpMethod' => 'GET',
                    'uri' => 'customer/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllCustomer' => [
                    'httpMethod' => 'GET',
                    'uri' => 'customer/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'getTopCustomer' => [
                    'httpMethod' => 'GET',
                    'uri' => 'customer/getTop/{limit}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'limit' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'addPrepaidCustomer' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'customer/addPrepaid/{id}/{amount}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                        'amount' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'createCustomer' => [
                    'httpMethod' => 'POST',
                    'uri' => 'customer/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateCustomer' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'customer/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteCustomer' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'customer/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     DISCOUNT
                // ################

                'getDiscount' => [
                    'httpMethod' => 'GET',
                    'uri' => 'discount/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllDiscount' => [
                    'httpMethod' => 'GET',
                    'uri' => 'discount/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'getAllDiscountProfile' => [
                    'httpMethod' => 'GET',
                    'uri' => 'discountProfile/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createDiscount' => [
                    'httpMethod' => 'POST',
                    'uri' => 'discount/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateDiscount' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'discount/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteDiscount' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'discount/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     FLOOR
                // ################

                'getFloor' => [
                    'httpMethod' => 'GET',
                    'uri' => 'floor/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllFloor' => [
                    'httpMethod' => 'GET',
                    'uri' => 'floor/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createFloor' => [
                    'httpMethod' => 'POST',
                    'uri' => 'floor/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateFloor' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'floor/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteFloor' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'floor/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     GROUP
                // ################

                'getAllGroup' => [
                    'httpMethod' => 'GET',
                    'uri' => 'group/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createGroup' => [
                    'httpMethod' => 'POST',
                    'uri' => 'group/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateGroup' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'group/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteGroup' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'group/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     LOCATION
                // ################

                'getLocation' => [
                    'httpMethod' => 'GET',
                    'uri' => 'location/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllLocation' => [
                    'httpMethod' => 'GET',
                    'uri' => 'location/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createLocation' => [
                    'httpMethod' => 'POST',
                    'uri' => 'location/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateLocation' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'location/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteLocation' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'location/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     PAYMENT
                // ################

                'getAllPayment' => [
                    'httpMethod' => 'GET',
                    'uri' => 'payment/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createPayment' => [
                    'httpMethod' => 'POST',
                    'uri' => 'payment/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updatePayment' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'payment/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deletePayment' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'payment/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     PRODUCT
                // ################

                'getProduct' => [
                    'httpMethod' => 'GET',
                    'uri' => 'product/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllProduct' => [
                    'httpMethod' => 'GET',
                    'uri' => 'product/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'getCategoryProduct' => [
                    'httpMethod' => 'GET',
                    'uri' => 'product/getCategory/{categoryId}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'categoryId' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'createProduct' => [
                    'httpMethod' => 'POST',
                    'uri' => 'product/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateProduct' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'product/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteProduct' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'product/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     PROVIDER
                // ################

                'getProvider' => [
                    'httpMethod' => 'GET',
                    'uri' => 'provider/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllProvider' => [
                    'httpMethod' => 'GET',
                    'uri' => 'provider/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                'createProvider' => [
                    'httpMethod' => 'POST',
                    'uri' => 'provider/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateProvider' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'provider/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteProvider' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'provider/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // ################
                //     RESOURCE
                // ################

                'getResource' => [
                    'httpMethod' => 'GET',
                    'uri' => 'resource/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'createResource' => [
                    'httpMethod' => 'POST',
                    'uri' => 'resource/create.json',
                    'responseModel' => 'jsonResponse',
                ],

                'updateResource' => [
                    'httpMethod' => 'PUT',
                    'uri' => 'resource/update/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'deleteResource' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'resource/delete/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // #############
                //     ROLE
                // #############

                'getRole' => [
                    'httpMethod' => 'GET',
                    'uri' => 'role/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllRole' => [
                    'httpMethod' => 'GET',
                    'uri' => 'role/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                // ##############
                //     STOCK
                // ##############

                'getAllStock' => [
                    'httpMethod' => 'GET',
                    'uri' => 'stock/getAll/{locationId}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'locationId' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // #################
                //     TARIFFAREA
                // #################

                'getTariffArea' => [
                    'httpMethod' => 'GET',
                    'uri' => 'tariffArea/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllTariffArea' => [
                    'httpMethod' => 'GET',
                    'uri' => 'tariffArea/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                // #############
                //     TAX
                // #############

                'getTax' => [
                    'httpMethod' => 'GET',
                    'uri' => 'tax/get/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllTax' => [
                    'httpMethod' => 'GET',
                    'uri' => 'tax/getAll.json',
                    'responseModel' => 'jsonResponse',
                ],

                // #############
                //     TICKET
                // #############

                'getSharedTicket' => [
                    'httpMethod' => 'GET',
                    'uri' => 'ticket/getShared/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'getAllSharedTicket' => [
                    'httpMethod' => 'GET',
                    'uri' => 'ticket/getAllShared.json',
                    'responseModel' => 'jsonResponse',
                ],

                'delSharedTicket' => [
                    'httpMethod' => 'DELETE',
                    'uri' => 'ticket/delShared/{id}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'id' => [
                            'required' => true,
                            'location' => 'uri',
                        ],
                    ],
                ],

                'shareTicket' => [
                    'httpMethod' => 'POST',
                    'uri' => 'ticket/share/{ticket}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'ticket' => [
                            'required' => true,
                        ],
                    ],
                ],

                'saveTicket' => [
                    'httpMethod' => 'POST',
                    'uri' => 'ticket/save/{cashId}/{ticket}/{tickets}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'cashId' => [
                            'required' => true,
                        ],
                        'ticket' => [
                            'required' => true,
                        ],
                        'tickets' => [
                            'required' => true,
                        ],
                    ],
                ],

                'getOpenTicket' => [
                    'httpMethod' => 'GET',
                    'uri' => 'ticket/getOpen.json',
                    'responseModel' => 'jsonResponse',
                    'additionalParameters' => [
                        'location' => 'query',
                    ],
                ],

                'searchTicket' => [
                    'httpMethod' => 'GET',
                    'uri' => 'ticket/search/{ticketId}/{ticketType}/{cashId}/{dateStart}/{dateStop}/{customerId}/{userId}/{limit}.json',
                    'responseModel' => 'jsonResponse',
                    'parameters' => [
                        'ticketId' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'ticketType' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'cashId' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'dateStart' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'dateStop' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'customerId' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'userId' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                        'limit' => [
                            'required' => false,
                            'location' => 'uri',
                        ],
                    ],
                ],

                // #############################
                //     USER (FOS USER BUNDLE)
                // #############################

                /*
                 * See all the possibility of routes in
                 * vendor/friendsofsymfony/user-bundle/Resources/config/routing
                 * Personal routes can be added in
                 * PastequeServerBundle/Resources/config/routing/user.routing.yml
                 */
            ],

            // Models allows to define correct instructions to API responses
            // We specify here that we want a PHP object from the json in the response
            'models' => [
                'jsonResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json',
                    ],
                ],
            ],
        ]);
        parent::__construct($client, $description);
    }
}
