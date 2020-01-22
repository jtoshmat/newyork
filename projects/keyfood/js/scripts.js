var total = 0;
var itemcount = 0;
$(function () {
    var id = '';
    click_functions();
});
function click_functions() {
    $(document).on('click', '.items', function (event) {
        $(".rightpanel").show();
        id = $(this).data('id');
        $(this).addClass('items_clicked');
        print(id);
        sub_total();
        tax();
        grandtotal();
    });
    $(document).on('click', '.btnremove', function (event) {
        var id = $(this).data('id');
        removeTableItem(id);
        sub_total();
        tax();
        grandtotal();
        return false;
    });
    $(document).on('click', '.shopping_btns', function (event) {
        var id = $(this).data('id');
        var sign = $(this).text();
        var total = $(this).siblings('span').text();
        var quantity = $("#quantity"+id).val();
        var quantity2 = eval($(this).siblings('span').text() +"+"+ 1);
        var price = $("#price"+id).val();
        if (sign == '-'){
            if (total==1){
                return false;
            }
            total--;
        }
        if (sign == '+'){
            if (total==quantity){
                return false;
            }
            total++;
        }
        // console.log(quantity2);
        var totalprice = quantity2 * price;
        totalprice = totalprice.toFixed(2);
        $(".price"+id).text(totalprice);
        $(this).siblings('span').text(total);
        sub_total();
        tax();
        grandtotal();
    });
    $(document).on('click', '#btnstartover', function (event) {
        total = 0;
        itemcount = 0;
        var ask = confirm("Are you sure you want to empty your shopping card?");
        if (ask) {
            $("#displaytable").find("tr").not("tr:first-child").remove();
            $(".items").removeClass("items_clicked");
            sub_total();
            tax();
            $(".items, .shopping_totals").removeClass("items_clicked");
            sub_total();
            tax();
            grandtotal();
            return false;
        }
    });
    $(document).on('click', '.btncheckout', function (event) {
        $("#fade").modal({
            fadeDuration: 100
        });

    })
}
function print(id) {
    var tr_exists = $("#displaytable tr");
    total++;
    if (tr_exists.hasClass("mytr" + id)) {
        //fergferfer
        return false;
    } else {
        print_table(id, total);
        return false;
    }
}
function print_table(id, total) {
    var price = $("#price"+id).val();
    var quantity = $("#quantity"+id).val();
    var product_name = $("#product_name" + id).val();
    var tr = "          <tr data-id='"+id+"' class='myitems mytr" + id + "'>\n" +
        "                    <td>" + product_name + "</td>\n" +
        "                    <td><a data-id='"+id+"' class='shopping_btns'>-</a><span class='shopping_total'>1</span><a data-id='"+id+"' class='shopping_btns'>+</a></td>\n" +
        "                    <td class='price"+id+"'>"+price+"</td>\n" +
        "                    <td><button class='btnremove' data-id='" + id + "'><span class='fa fa-trash'></span></button></td>\n" +
        "                </tr>";
    $("#displaytable").append(tr);
}
function substract() {

}
function removeTableItem(id) {
    $(".mytr" + id).remove();
    $("#item" + id).removeClass("items_clicked");
}
function tax() {
    var totaltax = 0;
    $(".myitems").each(function (index, value) {
        var id = $(this).data('id');
        var price = $(".price" +id).text();
        totaltax = eval(totaltax+"+"+price * (0.0875));
        totaltax = totaltax.toFixed(2);
        $("#checkout_tax").text(totaltax);
  })
}
function sub_total() {
//$("#checkout_total").text('working');
    //var id = $(this).data('id');
    var total = 0;
    $(".myitems").each(function(index, value){
        var id = $(this).data('id');
        var price = $(".price"+id).text();
        total = eval(total+"+"+price);
        total = total.toFixed(2);
        $("#checkout_total").text(total);
    });

}
function grandtotal(){
   }
function startover() {
    var mytax = 0;
    $(".myitems").each(function (index, value) {
        var id = $(this).data('id');
        var price = $(".price" +id).text();
        mytax = eval(mytax+"+"+price * (0.0875));
        mytax = mytax.toFixed(2);
        $("#checkout_tax").text(mytax);
    })
}
function sub_total() {
//$("#checkout_total").text('working');
    //var id = $(this).data('id');
    var total = 0;
    $(".myitems").each(function(index, value){
        var id = $(this).data('id');
        var price = $(".price"+id).text();
        total = eval(total+"+"+price);
        total = total.toFixed(2);
        $("#checkout_total").text(total);
    });

}
function grandtotal(){
    var gtotal = 0;
    $(".myitems").each(function(index, value){
        var id = $(this).data('id');
        var price = $(".price"+id).text();
        gtotal = eval(gtotal+"+"+price * (0.0875) + (total+"+"+price));
        gtotal = gtotal.toFixed(2);
        $("#checkout_grand_total").text(gtotal);
    });

}
function startover() {
}