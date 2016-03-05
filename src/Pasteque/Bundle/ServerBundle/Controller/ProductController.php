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

use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    public function getAction($id, $type)
    {
        $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Product');
        $product = null;

        if ($type == 'product') {
            $product = $repo->find($id);
        } elseif ($type == 'ref') {
            $product = $repo->findBy('reference', $id);
        } elseif ($type == 'code') {
            $product = $repo->findBy('code', $id);
        }

        $response = new Response(json_encode($product));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function getAllAction()
    {
        $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Product');
        $products = $repo->findAll();

        $response = new Response(json_encode($products));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function getCategoryAction($categoryId)
    {
        $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Product');
        $products = $repo->findBy('category', $categoryId);

        $response = new Response(json_encode($products));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
