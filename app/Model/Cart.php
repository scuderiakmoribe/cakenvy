<?php
class Cart extends AppModel{

	public $useTable = FALSE;

// 	var $name = "Cart";

	var $order_id;
	var $goods_id;
	var $amount;
	var $isGift;
	var $price;
	var $note;

	#------------------------------------------#
	# メソッド: Cart
	# 説明: コンストラクタ
	# 入力値  : なし
	# 注意点  :
	#------------------------------------------#
	function Cart() {
		$this->order_id = sprintf("%4d%02d%02d%02d%02d%02d",
				date("Y"), date("m"), date("d"),
				date("H"), date("i"), date("s"));
		$this->goods_id = '';
		$this->amount = '0';
		$this->isGift = 'FALSE';
		$this->price = '0';
		$this->note = 'このたびはベリトランス取扱店をご利用いただきましてまことにありがとうございます。';
	}

	#------------------------------------------#
	# メソッド: getOrderId
	# 説明: 取引ＩＤを取得する
	# 入力値  : なし
	# 戻り値  : 取引ＩＤ(YYYYMMDD-HHMISS)文字列
	# 注意点  :
	#------------------------------------------#
	function getOrderId() {
	return $this->order_id;
	}

	#------------------------------------------#
	# メソッド: setOrderId
	# 説明: 取引ＩＤを取得する
	# 入力値  : 取引ＩＤ(YYYYMMDD-HHMISS)文字列
	# 戻り値  : なし
	# 注意点  :
	#------------------------------------------#
	function setOrderId($id) {
	$this->order_id = $id;
	}

	#------------------------------------------#
	# メソッド: getPrice
	# 説明: 支払金額を取得する
	# 入力値  : なし
	# 戻り値  : 支払金額
	# 注意点  :
	#------------------------------------------#
	function getPrice() {
	return $this->price;
	}

		#------------------------------------------#
		# メソッド: setPrice
		# 説明: 支払金額を設定する
		# 入力値  : 支払金額
		# 戻り値  : なし
		# 注意点  :
		#------------------------------------------#
		function setPrice($price) {
		$this->price = $price;
		}

		#------------------------------------------#
		# メソッド: getNote
		# 説明: 注記を取得する
		# 入力値  : なし
		# 戻り値  : 注記
		# 注意点  :
		#------------------------------------------#
		function getNote() {
		return $this->note;
	}

	#------------------------------------------#
	# メソッド: setNote
	# 説明: 注記を設定する
	# 入力値  : 注記
	# 戻り値  : なし
	# 注意点  :
	#------------------------------------------#
	function setNote($note) {
	$this->note = $note;
	}

	function getGoodsId(){
	return $this->goods_id;
	}

	function setGoodsId($id){
	$this->goods_id = $id;
	}

	function getAmount(){
	return $this->amount;
	}

	function setAmount($amount){
	$this->amount = $amount;
	}

	function getIsGift(){
		return $this->isGift;
	}

	function setIsGift($flg){
		$this->isGift = $flg;
	}

}
?>