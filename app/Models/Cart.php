<?php

namespace App\Models;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($item, $id)
    {

        $cart = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $cart = $this->items[$id];
            }
        }
        $cart['qty']++;
        $cart['price'] = $item->price * $cart['qty'];

        $this->items[$id] = $cart;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }
    //xóa 1
    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];
        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }
    //xóa nhiều
    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id], $this->totalPrice);
    }

    public function update($item, $id, $qty)
    {
        $this->items[$id]['qty'] = $qty;
        $this->items[$id]['price'] = $qty * $item->price;
        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id], $this->totalPrice);
        }
        $this->totalQty = 0;
        $this->totalPrice = 0;
        foreach ($this->items as $element) {
            $this->totalQty += $element['qty'];
            $this->totalPrice += $element['price'];
        }

    }
}
