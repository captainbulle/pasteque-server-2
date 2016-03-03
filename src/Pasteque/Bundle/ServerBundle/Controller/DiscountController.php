<?php
//    POS-Tech API
//
//    Copyright (C) 2012 Scil (http://scil.coop)
//
//    This file is part of POS-Tech.
//
//    POS-Tech is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    POS-Tech is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with POS-Tech.  If not, see <http://www.gnu.org/licenses/>.

namespace Pasteque\Bundle\ServerBundle\Controller;

/* Cash API specification

GET(cashRegisterId)
When client request a new cash, the server check for an active cash for
requested cash register. If found return it. Otherwise return NULL.

GET(id)
Get cash by id, no matter it's state.

UPDATE(cash)
When client sends a cash, it may have an id or not. If the id is present the
cash is updated. If not a new cash is created. In all cases return the cash.

*/
use Symfony\Component\HttpFoundation\Response;

class DiscountController extends AbstractController {

  public function getAction($id)
  {
    $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Discount');
    $discount = $repo->find($id);

    $response = new Response(json_encode($discount));
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }

  public function getAllAction()
  {
    $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Discount');
    $discount = $repo->findAll();

    $response = new Response(json_encode($discount));
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }
}
