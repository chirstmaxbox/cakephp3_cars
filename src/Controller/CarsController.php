<?php
namespace App\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Controller\UsersController;
use App\Controller\TypesController;
use App\Controller\ProductsController;

/**
 * Description of LoginsController
 *
 * @author anhtran
 */
class CarsController extends AppController {
  
    public function main() {
        if ($this->request->is('post')) {
            $this->__authenticateUser();
        }
    }

    private function __authenticateUser() {
        $this->autoRender = false;
        $data = $this->request->data();
        if(isset($data)) {
            $user_controller = new UsersController();
            $flag = $user_controller->checkUserAndPassword($data["emailaddress"], $data["password"]);
            if($flag == true) {
                $this->Auth->setUser($data["emailaddress"]);
                $status = "{\"status\":\"1\"}";
                echo $status;
            }
            else {
                $status = "{\"status\":\"0\"}";
                echo $status;
            }
        }
        else {
            $status = "{\"status\":\"0\"}";
            echo $status;
        }
    }
    
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    public function register() {
        if ($this->request->is('post')) {
            $this->autoRender = false;
            $user_controller = new UsersController();
            if($user_controller->addUser($this->request->data()) == true) {
                $status = "{\"status\":\"1\"}";
                echo $status;
            }
            else {
                $status = "{\"status\":\"0\"}";
                echo $status;
            }
        }
    }

    public function product($type) {
        $username = $this->request->session()->read('Auth.User');
        /* get user's first name */
        $user_controller = new UsersController();
        $firstname = $user_controller->getFirstName($username);
        if($firstname != null) {
            $this->set('firstname', $firstname);
        }
        else {
            $this->set('firstname', "");
        }
        
        $type_controller = new TypesController();
        $types = $type_controller->getAllTypes();
        $this->set('types', $types);
        $this->set('select', $type);
        
        $product_controller = new ProductsController();
        $cars = $product_controller->getProductsByType($type);

        $this->set('cars', $cars);
    }
    
    public function detail($id) {
        $product_controller = new ProductsController();
        $result = $product_controller->getAllProductsById($id);
        if(!$result) {
            throw new \Cake\Network\Exception\NotFoundException(__("ID was not in the database!"));
        }
        $car = $result->first();
        if(count($car) > 0) {
            $this->set('img',$car["img"]);
            $this->set('price',$car["price"]);
            $this->set('title',$car["title"]);
            $this->set('description',$car["description"]);
            $this->set('quantity',$car["quantity"]);
            $this->set('quantity',$car["quantity"]);
        }
        else {
            throw new \Cake\Network\Exception\NotFoundException(__("ID was not in the database!"));
        }
    }
}
