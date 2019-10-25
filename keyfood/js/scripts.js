$(function () {

    /*
    1) Click on items
    2) keep track of items quantities
    3) create print, total, grantotal, taxes
     */
    var id = '';
    $(".items").click(function () {
        id = $(this).data('id');
        $(this).addClass('items_clicked');
        print(id);
    });

    $('.btnremove').css({
        'background': '#bdb9cb',
        'color': '#B1040D',
        'border': '#bdb9cb',
        'font-size':'20px'
    });
    $('#add').css({
        'background': '#bdb9cb',
        'color': '#B1040D',
        'border': '#bdb9cb',
        'font-size':'20px'
    });
    $('#minus').css({
        'background': '#bdb9cb',
        'color': '#B1040D',
        'border': '#bdb9cb',
        'font-size':'20px'
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
        "                    <td><button id='minus'>-</button>" + total + "<button id='add'>+</button></td>\n" +
        "                    <td>$6.60</td>\n" +
        "                    <td><button class='btnremove' data-id='" + id + "'><span class='fa fa-trash'></span></button></td>\n" +
        "                </tr>";

    $("#displaytable").append(tr);

}
$(document).on('click', '.btnremove', function (event) {
    var id = $(this).data('id');
    removeTableItem(id);
    return false;
});
function addAndSubstract() {

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