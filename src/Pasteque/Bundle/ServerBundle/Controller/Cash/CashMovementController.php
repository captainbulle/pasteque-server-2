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

namespace Pasteque\Bundle\ServerBundle\Controller\Cash;

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
use Pasteque\Bundle\ServerBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pasteque\Bundle\ServerBundle\Repository\Cash\CashRepository;

class CashMovementController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->createFormBuilder()
      // ...
      ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // persist entity
      $cashMovement = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($cashMovement);
            $em->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->render('AppBundle:Default:new.html.twig', array(
      'form' => $form->createView(),
    ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cashMovement = $em->getRepository('PastequeServerBundle:CashMovement')->find($id);

        if (!$cashMovement) {
            throw $this->createNotFoundException(
        'No product found for id '.$id
      );
        }

        $em->remove($cashMovement);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }

    public function updateAction($id)
    {
        $request = $this->get('request');

        if (is_null($id)) {
            $postData = $request->get('cashMovement');
            $id = $postData['id'];
        }

        $em = $this->getDoctrine()->getManager();
        $cashMovement = $em->getRepository('PastequeServerBundle:CashMovement')->find($id);
        $form = $this->createForm(new FormType(), $cashMovement);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // perform some action, such as save the object to the database
        $em->flush();

                return $this->redirect($this->generateUrl(''));
            }
        }

        return $this->render('MyBundle:Testimonial:update.html.twig', array(
      'form' => $form->createView(),
    ));
    }

    public function moveAction($id, $date, $payment, $note)
    {
        // replaced by create
    }

    public function searchAction($cashRegisterId, $dateStart, $dateStop)
    {
        /*
     * @var CashRepository
     */
    $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:Cash');
        $queryBuilder = $repo->createQueryBuilder('c');

        if ($cashRegisterId !== -1) {
            $queryBuilder->where('c.id = :id')
        ->setParameter('id', $cashRegisterId);
        }
        if ($dateStart !== -1) {
            $queryBuilder->where('c.openDate >= :dateStart')
        ->setParameter('dateStart', $dateStart);
        }
        if ($dateStop !== -1) {
            $queryBuilder->where('c.openDate <= :dateStop')
        ->setParameter('dateStop', $dateStop);
        }
        $cashes = $queryBuilder->getQuery()->getResult();

        $response = new Response(json_encode($cashes));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
