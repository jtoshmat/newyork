var total = 0;
var itemcount = 0;
var grandtax = '';
var sum = '';
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
    });
    $(document).on('click', '.btnremove', function (event) {
        var id = $(this).data('id');
        removeTableItem(id);
        sub_total();
        tax();
        return false;
    });

    var uzbekistan = [];
    $(document).on('click', '.shopping_btns', function (event) {
        var realid = $(this).data('realid');
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
        uzbekistan[realid]={realid:quantity2};
        $("#api_realids").val(uzbekistan);
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
            return false;
        }
    });
    $(document).on('click', '#mycheckout_button', function (event) {
        var mydata = { "first-name": 'Jon', "last-name": 'Toshmatov' } ;
        var result = callHttp('api/checkout.php', mydata, 'post');
    });
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
    var realid = $("#id"+id).val();
    var quantity = $("#quantity"+id).val();
    var product_name = $("#product_name" + id).val();
    var tr = "          <tr data-id='"+id+"' class='myitems mytr" + id + "'>\n" +
        "                    <td>" + product_name + "</td>\n" +
        "                    <td><a data-realid='"+realid+"' data-id='"+id+"' class='shopping_btns'>-</a><span class='shopping_total'>1</span><a data-realid='"+realid+"' data-id='"+id+"' class='shopping_btns'>+</a></td>\n" +
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
function sub_total() {
    var result = '';
    var totaltax = '';
    $(".myitems").each(function(index, value){
        var id = $(this).data('id');
        var price = $(".price"+id).text();
        result = eval(result+"+"+price);
        result = result.toFixed(2);
        $("#checkout_total").text(result);
        var id = $(this).data('id');
        var price = $(".price" +id).text();
        totaltax = eval(totaltax+"+"+price * (0.0875));
        totaltax = totaltax.toFixed(2);
        $("#checkout_tax").text(totaltax);
    });
    grandtax = totaltax;
    var jon = grandtotal(grandtax, result);

    $("#api_total").val(result);
    $("#api_tax").val(grandtax);

}
function grandtotal(grandtax, sum){
   var grantotal = eval(grandtax+"+"+sum);
   grantotal = grantotal.toFixed(2);
   $("#checkout_grand_total").html(grantotal);
   $("#api_grandtotal").val(grantotal);
}
function startover() {
}
function callHttp(url, mydata, method='get') {
      var url = 'http://newyork.local/lathis/api/checkout.php';
      var tax = $("#api_tax").val();
      var total = $("#api_total").val();
      var grandtotal = $("#api_grandtotal").val();
      var realids = $("#api_realids").val();

    var jqxhr = $.post( url, { tax: tax, total: total, grandtotal:grandtotal, realids:realids}, function(data) {
        alert( "success:"+data );
    }).fail(function() {
            alert( "error" );
        })
}