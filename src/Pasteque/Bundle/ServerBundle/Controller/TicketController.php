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

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TicketController extends AbstractController
{
  public function createAction(Request $request)
  {
    $form = $this->createFormBuilder()
      // ...
      ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
      // persist entity
      $ticket = $form->getData();
      $em = $this->getDoctrine()->getManager();
      $em->persist($ticket);
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
    $ticket = $em->getRepository('PastequeServerBundle:Group')->find($id);

    if (!$ticket) {
      throw $this->createNotFoundException(
        'No product found for id '.$id
      );
    }

    $em->remove($ticket);
    $em->flush();

    return $this->redirectToRoute('homepage');
  }

  public function updateAction($id)
  {
    $request = $this->get('request');

    if (is_null($id)) {
      $postData = $request->get('ticket');
      $id = $postData['id'];
    }

    $em = $this->getDoctrine()->getManager();
    $ticket = $em->getRepository('PastequeServerBundle:Group')->find($id);
    $form = $this->createForm(new FormType(), $ticket);

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
  public function getSharedAction($id)
  {
      $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:SharedTicket');
      $tickets = $repo->find($id);

      $response = new Response(json_encode($tickets));
      $response->headers->set('Content-Type', 'application/json');

      return $response;
  }

    public function getAllSharedAction()
    {
        $repo = $this->getDoctrine()->getRepository('PastequeServerBundle:SharedTicket');
        $tickets = $repo->findAll();

        $response = new Response(json_encode($tickets));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function delSharedAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $sharedTicket = $em->getRepository('PastequeServerBundle:SharedTicket')->find($id);

        if (!$sharedTicket) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        $em->remove($sharedTicket);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }

    public function shareAction(Request $request)
    {
        $form = $this->createFormBuilder()
      // ...
      ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // persist entity
            $sharedTicket = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($sharedTicket);
            $em->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->render('AppBundle:Default:new.html.twig', array(
          'form' => $form->createView(),
        ));
    }

  public function getOpenAction()
  {
    $roles = $this->getDoctrine()->getManager()
      ->createQuery(
          'SELECT T.ID, T.TICKETID, T.TICKETTYPE, T.PERSON, T.CUSTOMER,
           T.STATUS, T.CUSTCOUNT, T.TARIFFAREA, T.DISCOUNTRATE,
           T.DISCOUNTPROFILE_ID, RECEIPTS.DATENEW,
           CLOSEDCASH.MONEY
           FROM TICKETS AS T, RECEIPTS, CLOSEDCASH
           WHERE CLOSEDCASH.DATEEND IS NULL
           AND CLOSEDCASH.MONEY = RECEIPTS.MONEY
           AND RECEIPTS.ID = T.ID
           ORDER BY T.TICKETID DESC'
      )
      ->getResult();

    $response = new Response(json_encode($roles));
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }
}
