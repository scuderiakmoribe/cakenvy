<?php
App::uses( 'Cart', 'Vender' );
// App::uses( 'Cart', 'Model' );
App::uses('Cart', 'Controller');

class CartController extends AppController{
// 	var $cart;

	public function cartlist(){
// 		public $name = "Cart";

		$cart = new Cart();
		$cart->setGoodsId('510');
		$cart->setAmount('2');
		$cart->setIsGift('TRUE');

		array_push($arr_cart, $cart);
		$cart = new Cart();
		$cart->setGoodsId('363');
		$cart->setAmount('5');
		array_push($arr_cart, $cart);
		$cart = new Cart();
		$cart->setGoodsId('17');
		$cart->setAmount('10');
		array_push($arr_cart, $cart);
		$_SESSION['carts']=$arr_cart;

		$this->set( "cart", $cart );
	}
}
?>