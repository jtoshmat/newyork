$(function () {
    var id = '';
    $(".items").click(function () {
        id = $(this).data('id');
        $(this).addClass('items_clicked');
        print(id);
    });
});
var total = 0;
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
var itemcount = 0;
function print_table(id, total) {
    var product_name = $("#product_name" + id).val();
    itemcount++;
    var tr = "          <tr class='mytr" + id + "'>\n" +
        "                    <td>" + itemcount + "</td>\n" +
        "                    <td>" + product_name + "</td>\n" +
        "                    <td>" + total + "</td>\n" +
        "                    <td>$6.60</td>\n" +
        "                    <td><button class='btnremove' data-id='" + id + "'>X</button></td>\n" +
        "                </tr>";
    $("#displaytable").append(tr);
}
$(document).on('click', '.btnremove', function (event) {
    var id = $(this).data('id');
    removeTableItem(id);
    return false;
});
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