<script>

    function editContent(elementName) {

        console.log(elementName);

        if (elementName=='logo'){
            $(".edit_"+elementName).fadeIn("slow");
        }
        return false;
    }

    if (document.addEventListener) {
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        }, false);
    } else {
        document.attachEvent('oncontextmenu', function() {
            window.event.returnValue = false;
        });
    }
</script>
</body>
</html>