<?php

/**
 * Cafe Francois
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: maulit@gmail.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class OrderApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation createOrder
     *
     * Create an order.
     *
     *
     * @return Http response
     */
    public function createOrder()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createOrder');
        }
        $body = $input['body'];


        return response('How about implementing createOrder as a POST method ?');
    }
    /**
     * Operation updateOrder
     *
     * Update an existing order.
     *
     *
     * @return Http response
     */
    public function updateOrder()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateOrder');
        }
        $body = $input['body'];


        return response('How about implementing updateOrder as a PUT method ?');
    }
    /**
     * Operation findOrdersByStatus
     *
     * Finds Orders by status.
     *
     *
     * @return Http response
     */
    public function findOrdersByStatus()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['status'])) {
            throw new \InvalidArgumentException('Missing the required parameter $status when calling findOrdersByStatus');
        }
        $status = $input['status'];


        return response('How about implementing findOrdersByStatus as a GET method ?');
    }
    /**
     * Operation deleteOrder
     *
     * Deletes an Order.
     *
     * @param int $order_id Order id to delete (required)
     *
     * @return Http response
     */
    public function deleteOrder($order_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteOrder as a DELETE method ?');
    }
    /**
     * Operation getOrderById
     *
     * Find order by ID.
     *
     * @param int $order_id ID of order to return (required)
     *
     * @return Http response
     */
    public function getOrderById($order_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getOrderById as a GET method ?');
    }
    /**
     * Operation updateOrderWithForm
     *
     * Updates an order in the store with form data.
     *
     * @param int $order_id ID of order that needs to be updated (required)
     *
     * @return Http response
     */
    public function updateOrderWithForm($order_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateOrderWithForm as a PUT method ?');
    }
}
