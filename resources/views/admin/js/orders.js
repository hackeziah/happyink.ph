 // delivery
                $(document).on('click', '#delOrder', function(){
                var order_id = $(this).find('#order_id').val();
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't delever the order?!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Deliver this order it!'
                }).then((willDelete) => {
                if (willDelete.value) {

                    $.ajax({
                    url: "{{ route('deliveryorder')}}",
                    method: 'post',
                    data: {order_id: order_id},
                    success: function(data){
                    Swal.fire(
                        'Delivered!',
                        'Has been approve for delivery of Order.',
                        'success'
                        )
                        window.location.reload();
                    }
                    });
                }
                });
                });
            //delivery
                $(document).on('click', '#cancelOrder', function(){
                var order_id = $(this).find('#order_id').val();
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't delever the order?!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Cancel this order!'
                }).then((willDelete) => {
                if (willDelete.value) {

                    $.ajax({
                    url: "{{ route('cancelorder')}}",
                    method: 'post',
                    data: {order_id: order_id},
                    success: function(data){
                    Swal.fire(
                        'Cancel!',
                        'Order has been cancel',
                        'success'
                        )
                        window.location.reload();
                    }
                    });
                }
                });
                });
            //cancelOrder

