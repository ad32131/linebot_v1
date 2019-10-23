<html>
    <head>
        <script>
        
        function send_frm(){
            var coupon = $("#coupon")[0];
            var coupon_name = $("#coupon_name")[0];
            var frm = $("#frm")[0];

            if(coupon.value.length < 1 ){
                alert("plz input coupon count");
                return 0;
            }
            else if(coupon_name.value.length < 1 ){
                alert("plz input coupon_name");
                return 0;
            }
            else{
            frm.submit();
            }
        }
        </script>
    </head>
    <body>
        <form id="frm" name="frm" method="POST" action="win_create_action.php">
        coupon:<input type="text" value="0" id="coupon" name="coupon"/><br>
        coupon name:<input type="text" value="" id="coupon_name" name="coupon_name"/><br>
           <input type="button" value="ok" onclick="send_frm();"/>
        </form>
    </body>
</html>