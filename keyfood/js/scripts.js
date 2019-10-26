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
    });
    $(document).on('click', '.btnremove', function (event) {
        var id = $(this).data('id');
        removeTableItem(id);
        return false;
    });
    $(document).on('click', '.shopping_btns', function (event) {
        var id = $(this).data('id');
        var sign = $(this).text();
        var total = $(this).siblings('span').text();
        if (sign == '-'){
            if (total==1){
                return false;
            }
            total--;
        }
        if (sign == '+'){
            total++;
        }
        $(this).siblings('span').text(total);
    });
    $(document).on('click', '#btnstartover', function (event) {
        total = 0;
        itemcount = 0;
        var ask = confirm("Are you sure you want to empty your shopping card?");
        if (ask) {
            $("#displaytable").find("tr").not("tr:first-child").remove();
            $(".items").removeClass("items_clicked");
        }
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
    var product_name = $("#product_name" + id).val();
    var tr = "          <tr class='mytr" + id + "'>\n" +
        "                    <td>" + product_name + "</td>\n" +
        "                    <td><a data-id='"+id+"' class='shopping_btns'>-</a><span class='shopping_total'>" + total + "</span><a data-id='"+id+"' class='shopping_btns'>+</a></td>\n" +
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

}
function total() {

}
function grandtotal() {

}
function startover() {

}
//HOWDY