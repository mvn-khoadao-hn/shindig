<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

/**
 * see
 * http://www.opensocial.org/Technical-Resources/opensocial-spec-v081/opensocial-reference#opensocial.Activity
 */
class Payment {
  public $paymentId;
  public $message;
  public $status;
  public $finishPageUrl;
  public $paymentItems;

  public function __construct($paymentId, $message, $status, $paymentItems, $finishPageUrl) {
    $this->paymentId = $paymentId;
    $this->message = $message;
    $this->status = $status;
    $this->finishPageUrl = $finishPageUrl;
    $paymentItems = json_decode($paymentItems, true);
    $item = array();
    foreach ($arr as &$paymentItems) {
    	$value = new PaymentItem($paymentItems[0]["itemId"], $paymentItems[0]["itemName"], $paymentItems[0]["quantity"], $paymentItems[0]["imageUrl"], $paymentItems[0]["description"]);
	array_push($item, $value);
    }
    $this->paymentItems = $paymentItems;
  }

  public function getPaymentId() {
    return $this->paymentId;
  }

  public function setPaymentId($paymentId) {
    $this->paymentId = $paymentId;
  }

  public function getMessage() {
    return $this->message;
  }

  public function setMessage($message) {
    $this->message = $message;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getPaymentItems() {
    return $this->paymentItems;
  }

  public function setPaymentItems($paymentItems) {
    $this->paymentItems = $paymentItems;
  }

}
