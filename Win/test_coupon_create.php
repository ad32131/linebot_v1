<html>
    <head>
        
        <script src="./js/jquery-1.8.3.min.js"></script>
        <script src="./js/md5.js"></script>
        <script>
        function couponkeyencypt(){
            var couponkey = $("#couponkey")[0];

            couponkey.value = calcMD5(couponkey.value);
        }
        
        function send_frm(){
            var ticket = $("#ticket")[0];
            var couponkey = $("#couponkey")[0];
            var frm = $("#frm")[0];

            if(ticket.value.length < 1 ){
                alert("plz input ticket count");
                return 0;
            }
            else if(couponkey.value.length < 39 ){
                alert("plz input couponkey count");
                return 0;
            }
            else{
            frm.submit();
            }
        }
        </script>
    </head>
    <body>
        <form id="frm" name="frm" method="POST" action="test_coupon_create_action.php">
           ticket:<input type="text" value="0" id="ticket" name="ticket"/><br>
           couponkey:<input type="text" value="??" id="couponkey" name="couponkey"/><input type="button" value="encypt" onClick="couponkeyencypt();"/><br>
           <input type="button" value="ok" onclick="send_frm();"/>
        </form>
    </body>
</html>