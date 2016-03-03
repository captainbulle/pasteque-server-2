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


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController extends Controller {

  /** Insert a new model in database. */
  public function create($model) {/**
    $dbData = static::unbuild($model);
    $pdo = PDOBuilder::getPDO();
    // Get all fields except id field
    $dbFields = array_keys(static::$fieldMapping); // Copy
    $idIndex = array_search(static::$dbIdField, $dbFields);
    if ($idIndex !== -1) {
      array_splice($dbFields, $idIndex, 1);
    }
    // Prepare sql query
    $sql = "INSERT INTO " . static::$dbTable . " ("
      . implode($dbFields, ", ") . ") VALUES (";
    // Set :field for each field for values and bind values for PDO
    foreach ($dbFields as $field) {
      $sql .= ":" . $field . ", ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= ")";
    // Assign values to sql
    $stmt = $pdo->prepare($sql);
    foreach ($dbFields as $field) {
      if ($dbData[$field] === null) {
        $stmt->bindValue(":" . $field, null, \PDO::PARAM_NULL);
      } else if (is_array(static::$fieldMapping[$field])) {
        $meta = static::$fieldMapping[$field];
        if ($meta['type'] == DB::BIN) {
          $stmt->bindValue(":" . $field, $dbData[$field],
            \PDO::PARAM_LOB);
        } else {
          $stmt->bindValue(":" . $field, $dbData[$field]);
        }
      } else {
        $stmt->bindValue(":" . $field, $dbData[$field]);
      }
    }
    // RUN!
    if ($stmt->execute()) {
      return $pdo->lastInsertId(static::$dbTable . "_"
        . static::$dbIdField . "_seq");
    } else {
      return false;
    }**/
  }

  /** Update a model. Returns true if success, false otherwise. */
  public function update($model) {
    /**$dbData = static::unbuild($model);
    $pdo = PDOBuilder::getPDO();
    // Get all fields except id field
    $dbFields = array_keys(static::$fieldMapping); // Copy
    $idIndex = array_search(static::$dbIdField, $dbFields);
    if ($idIndex !== -1) {
      array_splice($dbFields, $idIndex, 1);
    }
    // Prepare sql query
    $sql = "UPDATE " . static::$dbTable . " SET ";
    foreach ($dbFields as $field) {
      $sql .= $field . " = :" . $field . ", ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= " WHERE " . static::$dbIdField . " = :_id_";
    // Assign values to sql
    $stmt = $pdo->prepare($sql);
    foreach ($dbFields as $field) {
      if ($dbData[$field] === null) {
        $stmt->bindValue(":" . $field, null, \PDO::PARAM_NULL);
      } else if (is_array(static::$fieldMapping[$field])) {
        $meta = static::$fieldMapping[$field];
        if ($meta['type'] == DB::BIN) {
          $stmt->bindValue(":" . $field, $dbData[$field],
            \PDO::PARAM_LOB);
        } else {
          $stmt->bindValue(":" . $field, $dbData[$field]);
        }
      } else {
        $stmt->bindValue(":" . $field, $dbData[$field]);
      }
    }
    $stmt->bindValue(":_id_", $dbData[static::$dbIdField]);
    // RUN!
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }**/
  }
}
