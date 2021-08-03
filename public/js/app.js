$(document).ready(function() {
 
    $('#banner_top').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        responsive:{
            1000:{
                items:1
            }
        }
    })
   

    $('#Top_sales').owlCarousel({
        loop:true,
        dots:false,
        margin:10,
        nav:true,
        responsive:{
            1000:{
                items:5
            }
        }
    })

    $('#new_phones').owlCarousel({
        loop:true,
        margin:10,
        responsive:{
            1000:{
                items:5
            }
        }
    })

    $('.blogs').owlCarousel({
        loop:true,
        dots:false,
        margin:10,
        responsive:{
            1000:{
                items:3
            }
        }
    })


       let x = 0;
       let y = 0;
      $(".qty-up").click(function (e) {
        e.preventDefault();
        let input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let val = input.val();
        let value = parseInt(val) + 1;
        let price = $(`.product_price[data-id='${$(this).data("id")}']`);
        let price1 = price.data('price');
        let price2 = parseInt(price1);

        let final = price2 * value;

        let total = $("#deal-price");
        let total1 = parseInt(total.html());

        let subtotal = $("#subtotal");
        let subtotal1 = parseInt(subtotal.html());

    
        $.ajax({
          url: "/ShowCart",
          type: "get",
          success: function (data) {
            input.val(value);
            price.html(final);
            total.html((total1-price2)+final);
            subtotal.html(subtotal1+1);
            
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });


    

  });