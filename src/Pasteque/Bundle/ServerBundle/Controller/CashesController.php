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

namespace Pasteque\Bundle\ServerBundle\Services;

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

class CashesController {
//action to update to correspond to new code structure
  public function getAction($id)
  {
    if (isset($this->params['id'])) {
      $ret = $srv->get($this->params['id']);
    } else {
      $ret = $srv->getCashRegister($this->params['cashRegisterId']);
      if ($ret === null || $ret->isClosed()) {
        $ret = null;
      }
    }
    $this->succeed($ret);
  }

  public function updateAction($id)
  {
    $json = json_decode($this->params['cash']);
    $open = null;
    $id = null;
    if (property_exists($json, 'id')) {
      $id = $json->id;
    }
    if (property_exists($json, 'openDate')) {
      $open = $json->openDate;
    }
    $close = null;
    if (property_exists($json, 'closeDate')) {
      $close = $json->closeDate;
    }
    $openCash = null;
    if (property_exists($json, 'openCash')) {
      $openCash = $json->openCash;
    }
    $closeCash = null;
    if (property_exists($json, 'closeCash')) {
      $closeCash = $json->closeCash;
    }
    $expectedCash = null;
    if (property_exists($json, 'expectedCash')) {
      $expectedCash = $json->expectedCash;
    }
    $cashRegisterId = $json->cashRegisterId;
    $sequence = null;
    if (property_exists($json, 'sequence')) {
      $sequence = $json->sequence;
    }
    if ($id !== null) {
      // Update an existing cash
      $cash = Cash::__build($id, $cashRegisterId, $sequence, $open,
        $close, $openCash, $closeCash, $expectedCash);
      if ($srv->update($cash)) {
        $this->succeed($cash);
      } else {
        $this->fail(APIError::$ERR_GENERIC);
      }
    } else {
      // Create a cash and update with given data
      if ($srv->add($cashRegisterId)) {
        $cash = $srv->getCashRegister($cashRegisterId);
        $cash->openDate = $open;
        $cash->closeDate = $close;
        $cash->openCash = $openCash;
        $cash->closeCash = $closeCash;
        $cash->expectedCash = $expectedCash;
        if ($srv->update($cash)) {
          $this->succeed($cash);
        } else {
          $this->fail(APIError::$ERR_GENERIC);
        }
      } else {
        $this->fail(APIError::$ERR_GENERIC);
      }
    }
  }

  public function searchAction($cashRegisterId, $dateStart, $dateStop)
  {
    $conditions = array();
    if ($cashRegisterId !== null) {
      $conditions[] = array("cashRegisterId", "=", $cashRegisterId);
    }
    if ($dateStart !== null) {
      $conditions[] = array("openDate", ">=",
        $db->dateVal($dateStart));
    }
    if ($dateStop !== null) {
      $conditions[] = array("closeDate", "<=",
        $db->dateVal($dateStop));
    }
    $this->succeed($srv->search($conditions));
  }
  public function zticketAction($id)
  {
    $ret = $srv->getZTicket($this->params['id']);
    $this->succeed($ret);
  }
}
