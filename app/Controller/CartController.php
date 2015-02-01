<?php
App::uses( 'Cart', 'Vendor' );
// App::uses( 'Cart', 'Model' );
App::uses('AppController', 'Controller');

class CartController extends AppController{
	public  $cart;

// 	public $autoRender = false;
	public $autoLayout = false;

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		if ($this->request->is('post')) {
		}else{
// 			echo "Hello World!";
// 			$this->set('messages', 'Hello World:)');
// 			debug($this->messages);
			$cart = new Cart();
			$cart->setGoodsId('510');
			$cart->setAmount('2');
			$cart->setIsGift('TRUE');
			$arr_cart = array();
			array_push($arr_cart, $cart);
			$this->set("datas", $arr_cart);

// 			unset($_SESSION['carts']);
// 			$_SESSION['carts'] = $arr_cart;
			$this->Session->write("sess", $arr_cart);
			debug($arr_cart);
		}
	}

	public function other() {
		echo "Other!";
	}

	public function view($id) {

	}

	public function add() {
		if ($this->request->is('post')) {
			if (
					# POSTされたデータをpostsテーブルにインサート
					$this->Post->save(
							# すべてのCakePHPのリクエストは CakeRequest オブジェクトに格納されており、$this->request でアクセスできる
							# ユーザがフォームを使ってデータをPOSTした場合、その情報は、 $this->request->data の中に入ってくる
							$this->request->data
					)
			) {
				# Session コンポーネントの setFlash でリダイレクト後のページで表示するメッセージを引き継ぐ
				$this->Session->setFlash('Your cart has been saved.');
				# 一覧へリダイレクト
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your cart.');
			}
		}else{
// 			unset($_SESSION['carts']);
// 			$_SESSION['carts'] = array_values( $cart_after );
		}
	}

// 	static function addCart(){
// 		$ret = FALSE;

// 		$exist_flg = FALSE;
// 		if( $_SESSION[ 'carts' ]){
// 			$cart_after = $_SESSION[ 'carts' ];
// 			//print("<pre>");print_r($cart_after);print("</pre>");
// 			//print("<pre>");print_r($_POST);print("</pre>");
// 			unset($_SESSION['carts']);
// 			for( $i = 0; $i < count( $cart_after ); $i++ ){
// 				if( $cart_after[ $i ]->getGoodsId() == $_POST[ 'add_goods_id' ] ){
// 					$exist_flg = TRUE;
// 					$cart_after[ $i ]->setAmount( $cart_after[ $i ]->getAmount() + $_POST[ 'add_amount' ]);
// 				}
// 			}
// 			if( $exist_flg == FALSE ){
// 				$cart = new Cart();
// 				$cart->setGoodsId( $_POST[ 'add_goods_id' ]);
// 				$cart->setAmount( $_POST[ 'add_amount' ]);
// 				$cart->setIsGift( $_POST[ 'add_isGift' ]);
// 				// 				$cart->setGiftCard( $_POST[ 'add_giftCard' ]);
// 				array_push( $cart_after, $cart );
// 			}
// 			$_SESSION['carts'] = array_values( $cart_after );
// 			//print("<pre>");print_r($cart_after);print("</pre>");
// 		}else{
// 			$cart_after = array();
// 			$cart = new Cart();
// 			$cart->setGoodsId( $_POST[ 'add_goods_id' ]);
// 			$cart->setAmount( $_POST[ 'add_amount' ]);
// 			$cart->setIsGift( $_POST[ 'add_isGift' ]);
// 			// 			$cart->setGiftCard( $_POST[ 'add_giftCard' ]);
// 			array_push( $cart_after, $cart );
// 			$_SESSION['carts'] = array_values( $cart_after );
// 		}

// 		$ret = TRUE;
// 		//print("<pre>");print("ret: " . $ret);print("</pre>");
// 		//print("<pre>");print_r($_SESSION['carts']);print("</pre>");
// 		//exit;
// 		return $ret;
// 	}

// 	static function changeCart( $goods_id, $qty, $cart ){
// 		for( $i = 0; $i < count( $cart ); $i++ ){
// 			if( $cart[ $i ]->getGoodsId() == $goods_id ){
// 				$mod_index = $i;
// 			}
// 		}
// 		$cart[ $mod_index ]->setAmount( $qty );
// 		$cart_after = $cart;

// 		return $cart_after;
// 	}

// 	static function changeGift( $goods_id, $isgift, $cart ){
// 		for( $i = 0; $i < count( $cart ); $i++ ){
// 			if( $cart[ $i ]->getGoodsId() == $goods_id ){
// 				$mod_index = $i;
// 			}
// 		}
// 		$cart[ $mod_index ]->setIsGift( $isgift );
// 		$cart_after = $cart;

// 		return $cart_after;
// 	}

// 	public static function changeCard( $card_id, $cardid, $cartcd ){
// 		// print("<pre>");print_r($cartcd);print("</pre>");
// 		for( $j = 0; $j < count( $cartcd ); $j++ ){
// 			if( $cartcd[ $j ]->getGoodsId() == $card_id ){
// 				$card_index = $j;
// 			}
// 			$cartcd[ $j ]->setGiftCard( $cardid );
// 		}
// 		// print("<pre>");print("ind: " . $card_index);print("</pre>");
// 		// print("<pre>");print("id1: " . $card_id);print("</pre>");
// 		// print("<pre>");print("id2: " . $cardid);print("</pre>");
// 		// 		$cartcd[ $card_index ]->setGiftCard( $cardid );
// 		$cart_aft = $cartcd;
// 		// print("<pre>");print_r($cart_aft);print("</pre>");
// 		return $cart_aft;
// 	}

// 	static function delCart( $goods_id, $cart ){
// 		for( $i = 0; $i < count( $cart ); $i++ ){
// 			if( $cart[ $i ]->getGoodsId() == $goods_id ){
// 				$del_index = $i;
// 			}
// 		}
// 		unset( $cart[ $del_index ]);
// 		$cart_after = $cart;

// 		return $cart_after;
// 	}

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