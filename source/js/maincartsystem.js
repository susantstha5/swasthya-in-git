$(".add-to-cart").click(function(event){
    event.preventDefault();
    var name = $(this).attr("data-name");
    var price = Number($(this).attr("data-price"));
    shoppingCart.addItemToCart(name, price, 1);
    displayCart();
});
$("#clear-cart").click(function(event){
    shoppingCart.clearCart();
    displayCart();
});
function displayCart() {
    var cartArray = shoppingCart.listCart();
    // var name = (this).attr("data-name");
    console.log(cartArray);
    var output = "";
    var cartOutput="";
    var increment="";
    for (var i in cartArray) {
        output += "<tr>"
            +"<td>"+cartArray[i].name+"</td>"
            +"<td> <button class='plus' data-name='"+cartArray[i].name+"'>+</button></td>"
            +"<td> <button class='minus' data-name='"+cartArray[i].name+"'>-</button></td>"
            +"<td>"+cartArray[i].count+"</td>"
            +"</tr>";
    }
    for (var i in cartArray) {
        cartOutput +="<div class='CartLineItem__container___1w1IL' >"
            +"<div class='row'>"
            +"<div class='col-xs-9'>"
            +"<div class='CartLineItem__name___3JS5V'>"+cartArray[i].name+"</div>"
            +"</div>"
            +"<div class='col-xs-3 text-right'>"
            +"<div class='CartLineItem__price___1j-lm'>"+cartArray[i].price+"</div>"
            +"<div class='CartLineItem__actual-price___1Juw7'>"+cartArray[i].price+"</div>"
            +"</div>"
            +"</div>"
            +"<div class='row'>"
            +"<a class='button-text'>"
            +"<div class='col-xs-6'>"
            +"<i class='fa fa-trash-o fa-lg' aria-hidden='true'></i>"
            +"<span class='CartLineItem__txt-delete-medicine___2PC18 delete-item' data-name='"+cartArray[i].name+"'>remove</span>"
            +"</div>"
            +"</a>"
            +"<div class='col-xs-6 text-right'>"
            +"<div>"
            +"<div class='text-left'>"
            +"<div class='custom-snackbar' style='position: fixed; left: 0px; display: flex; right: 0px; bottom: 0px; z-index: 2900; visibility: hidden; transform: translate3d(0px, 48px, 0px); transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms, visibility 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;'>"
            +"<div width='3' style='background-color: rgb(255, 243, 193); padding: 0px 24px; height: 48px; line-height: 48px; border-radius: 2px; max-width: 568px; min-width: 288px; flex-grow: 0; margin: auto; color: rgba(33, 33, 33, 0.87);'>"
            +"<div style='font-size: 14px; color: rgb(255, 255, 255); opacity: 0; transition: opacity 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;'>"
            +"<span></span>"
            +"</div>"
            +"</div>"
            +"</div>"
            +"</div>"
            +"<div id='clicker' class='Quantity__quantity___3V97B'>"
            +"<a href='#'><i id='leftarrow' class='fa fa-minus fa-lg subtract-item' aria-hidden='true' data-name='"+cartArray[i].name+"'></i></a>"
            +"<span id='counter' class='Quantity__text___2EoLZ item-count' data-name='"+cartArray[i].name+"'>"+cartArray[i].count+"</span>"
            +"<a href='#'><i id='rightarrow' class='fa fa-plus fa-lg plus-item' aria-hidden='true' data-name='"+cartArray[i].name+"'></i></a>"
            +"</div>"
            +"</div>"
            +"</div>"
            +"</div>"
            +"</div>";
    }

    for(var i in cartArray){
        increment +="<a href='#'><i id='leftarrow' class='fa fa-minus fa-lg subtract-item' aria-hidden='true' data-name='"+cartArray[i].name+"'></i></a>"
            +"<span id='counter' class='Quantity__text___2EoLZ item-count' data-name='"+cartArray[i].name+"'>"+cartArray[i].count+"</span>"
            +"<a href='#'><i id='rightarrow' class='fa fa-plus fa-lg plus-item' aria-hidden='true' data-name='"+cartArray[i].name+"'></i></a>";

    }
    $("#cartTableBody").html(output);
    $("#cartContainerDetails").html(cartOutput);
    $(".counter").html(increment);
    $(".count-cart").html( shoppingCart.countCart() );
    $(".total-cart").html( shoppingCart.totalCart() );
    $(".discount-cart").html(shoppingCart.discountCart());
}
$("#cartContainerDetails").on("click", ".delete-item", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.removeItemFromCartAll(name);
    console.log('deleted');
    displayCart();
});
$("#cartContainerDetails").on("click", ".subtract-item", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.removeItemFromCart(name);
    displayCart();
});
$("#cartContainerDetails").on("click", ".plus-item", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.addItemToCart(name, 0, 1);
    displayCart();
});
$("#cartTableBody").on("click", ".plus", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.addItemToCart(name, 0, 1);
    displayCart();
});
$("#cartTableBody").on("click", ".minus", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.removeItemFromCart(name);
    displayCart();
});
$("#cartContainerDetails").on("change", ".item-count", function(event){
    var name = $(this).attr("data-name");
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
});


//product display section
$(".counter").on("click", ".subtract-item", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.removeItemFromCart(name);
    displayCart();
});
$(".counter").on("click", ".plus-item", function(event){
    var name = $(this).attr("data-name");
    shoppingCart.addItemToCart(name, 0, 1);
    displayCart();
});
$(".counter").on("change", ".item-count", function(event){
    var name = $(this).attr("data-name");
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
});
$(document).ready(function(){

});
