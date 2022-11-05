
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript"> 

        $('.modalbtn').click(function(){
            $(this).parent().prev().text('Read');
            let id=$(this).attr('data-id');
            $.post('functions/messages/editMessage.php',{id}
                ,function(data){
                $('.spandNum').text(data);
            })
        })




        $('.add_prodect').click(function(event){
           event.preventDefault();
           let name = $('input[name="name"]').val();
           let price = $('input[name="price"]').val();
           let description = $('input[name="description"]').val();
           let sale = $('input[name="sale"]').val();
           let cat = $('input[name="cat"]').val();

           console.log(name , price , description , sale , cat);

           $.post('functions/prodects/add_prodect_ajax.php',{name,price,description,sale,cat},function(data){
            $('.add').text(data);
            console.log(data);

           })


        })



    </script>

</body>

</html>