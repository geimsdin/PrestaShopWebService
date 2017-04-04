<?php

namespace pshopws;

/**
 * @author Marcos Redondo <kusflo at gmail.com>
 */
require '../vendor/autoload.php';
/*** Connection Data ****/
define('_PS_SHOP_PATH', "");
define('_PS_WS_AUTH_KEY', "");
define('_DEBUG', false);
/**** Examples Categories ***/
//listCategoriesToArray();
//getCategoryById(1);
/**** Examples Products ***/
//listProductsToArray();
//getProductById(1);
/**** Examples Orders ***/
//listOrdersToArray();
//listOrdersLastDaysToArray(7);
//listOrdersToday();
//getOrderByIdToArray(1);
/**** Examples Customers ***/
//listCustomersToArray();
//getCustomerByIdToArray(1);
/**** View api options ***/
//listApiPermissionsToXml();
/*****************/
function listCategoriesToArray()
{
    try {
        $p = new PShopWsCategories(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $categories = $p->getList();
        echo '<pre>';
        var_dump($categories);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function getCategoryById($id)
{
    try {
        $p = new PShopWsCategories(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $category = $p->getById($id);
        echo '<pre>';
        var_dump($category);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function listProductsToArray()
{
    try {
        $p = new PShopWsProducts(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $products = $p->getList();
        echo '<pre>';
        var_dump($products);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function getProductById($id)
{
    try {
        $p = new PShopWsProducts(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $product = $p->getById($id);
        echo '<pre>';
        var_dump($product);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function listOrdersLastDaysToArray($days)
{
    try {
        $o = new PShopWsOrders(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $orders = $o->getListLastDays($days);
        echo '<pre>';
        var_dump($orders);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function listOrdersToday()
{
    try {
        $o = new PShopWsOrders(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $orders = $o->getListToday();
        echo '<pre>';
        var_dump($orders);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function getOrderByIdToArray($id)
{
    try {
        $o = new PShopWsOrders(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $order = $o->getById($id);
        echo '<pre>';
        var_dump($order);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function listCustomersToArray()
{
    try {
        $c = new PShopWsCustomers(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $customers = $c->getList();
        echo '<pre>';
        var_dump($customers);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function getCustomerByIdToArray($id)
{
    try {
        $c = new PShopWsCustomers(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $customer = $c->getById($id);
        echo '<pre>';
        var_dump($customer);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}

function listApiPermissionsToXml()
{
    try {
        $c = new PShopWsCustomers(_PS_SHOP_PATH, _PS_WS_AUTH_KEY, _DEBUG);
        $permissions = $c->getApiPermissions();
        echo '<pre>';
        var_dump($permissions);
    } catch (PShopWsException $e) {
        echo $e->getMessage();
    }
}


