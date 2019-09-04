$(document).ready(function () {

    $(".form-control").submit(function () {
        var name = $(".name").val();
        listPerson(name);
        return false;
    });


    function listPerson(name) {
        if (name == 'sukhrob'){
            $(".result").html('Shadiyarov Sukhrob Suratovich');

            return false;
        }
        if (name == 'Jon'){
            $(".result").html('Hello Jon!, How are you?');
            return false;
        }
        if (name == 'Max'){
            $(".result").html('Hello Max!,  How are you?');

            return false;

        }
    }



});