var cart = {};

$('document').ready(function() {
    loadGoods();
    checkCart();
    showMiniCart();
}); 

function loadGoods() {
    $.getJSON('assets/jsons/goods.json', function(data) {
        console.log(data);
        var out = '';
        for (var key in data) {
            out+='<div class=" single-goods ">';
            out+='<button class="baton bg_fff add-to-cart" data-art="'+key+'">Купить</button>';
            out+='</div>';
        }
        $('#goods').html(out);
        $('button.add-to-cart').on('click', addToCart);
    }); 
}

function addToCart() {
    var articul = $(this).attr('data-art');
    if (cart[articul]!=undefined) {
        cart[articul]++;
    }
    else {
        cart[articul] = 1;
    }
    localStorage.setItem('cart', JSON.stringify(cart) );
    //console.log(cart);
    showMiniCart();
}

function checkCart(){
    if(localStorage.getItem('cart') !=null) {
        cart = JSON.parse (localStorage.getItem('cart'));
    }
}

function showMiniCart(){
    var out = '';
    for (var w in cart){
        out += w + ' --- ' +cart[w]+'<br>';
    }
    out+='<br><a href="cart.html">Корзина</a>';
    $('#mini-cart').html(out);
}