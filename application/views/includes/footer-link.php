<!-- Latest jQuery -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<!-- popper js -->
<script src="assets/bootstrap/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- meanmenu min js  -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- Sticky JS -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- gijgo js  -->
<script src="assets/js/gijgo.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- jquery appear js  -->
<script src="assets/js/jquery.appear.js"></script>
<!-- countTo js -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- jquery mixitup js -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- venobox js -->
<script src="assets/venobox/js/venobox.min.js"></script>
<!-- scrolltopcontrol js -->
<script src="assets/js/scrolltopcontrol.js"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="assets/js/wow.min.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/main.js"></script>
<div id="snackbar">Item Added Successfully</div>

<script>
  function fetchdata() {
    $.ajax({
      url: '<?= base_url("Home/fetch_cart") ?>',
      success: function (response) {
        $('#cartlist').html(response);
        load_product();
        load_cart_list();
        load_checkout_list();
      }
    });
  }
  fetchdata();

  function load_product() {
    $.ajax({
      url: '<?= base_url("Home/fetch_data_cart") ?>',
      success: function (response) {
        $('#cart').html(response);

      }
    });


    $.ajax({
      url: '<?= base_url("fetch_totalitems") ?>',
      method: 'POST',
      success: function (response) {
        $('.totalitem').html(response);
      }
    });

    $.ajax({
      url: '<?= base_url("fetch_totalamount") ?>',
      method: 'POST',
      success: function (response) {
        console.log(response);
        $('.totalamount').text(response);

      }
    });


    load_checkoutbar();
    // promo();
  }
  load_product();
  load_cart_list();

  function mySanckbar() {
    x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function () {
      x.className = x.className.replace("show", "");
    }, 4000);
  }

  $(document).on('click', '.addCart', function() {
    var pid = $(this).data('id');
    var qty = $('#qtysidecart').val();
    $(".addCart").attr('disabled', true);

    $.ajax({
      method: "POST",
      url: "<?= base_url('addToCart') ?>",
      data: {
        pid: pid,
        qty: qty
      },
      beforeSend: function () {
        $('.cartbtn' + pid).html('<i class="fa fa-spinner fa-spin"></i> Loading...');
      },
      success: function (response) {
        console.log("cart response =" + response);
        load_product();
        mySanckbar();
        $(".addCart").attr('disabled', false);
        $('#cartbtn' + pid).html('Add');
        // $("#cart").click();
      }
    });
  });
  $(document).on('click', '.buynow', function () {
    var pid = $(this).data('id');
    var qty = $('#qtysidecart' + pid).val();
    $.ajax({
      method: "POST",
      url: "<?= base_url('addToCart') ?>",
      data: {
        pid: pid,
        qty: qty
      },
      success: function (response) {
        window.location = "";
      }
    });
  });

  $(document).on('click', '.qty', function () {
    var numberField = jQuery(this).parent().find('[type="number"]');
    var currentVal = numberField.val();
    var sign = jQuery(this).val();
    if (sign === '-') {
      if (currentVal > 1) {
        numberField.val(parseFloat(currentVal) - 1);
      }
    } else {
      numberField.val(parseFloat(currentVal) + 1);
    }

    var rowid = jQuery(this).data('rowid');
    var price = jQuery(this).data('price');
    var qty = numberField.val();

    $.ajax({
      method: "POST",
      url: "<?= base_url("Home/update_qty") ?>",
      data: {
        rowid: rowid,
        qty: qty
      },
      success: function (response) {
        load_product();
        $('#item_total' + rowid).text((qty * price));
      }
    });
  });


  function load_checkoutbar() {
    var referalpoint = $('#referalpointcheck').data('point');

    var shipping = $('#shipping_charges').val();


    var tamt = $('#totalamount').val();
    var promocode_amt = $('#promocode_amt').val();
    if (promocode_amt == '') {
      console.log(parseInt(tamt));
      $('#cartgrandprice').text('₹ ' + parseInt(tamt) + parseInt(shipping));
      $('#grand_total').val(parseInt(tamt) + parseInt(shipping));
      $('#cartprice').text('₹ ' + (parseInt(tamt) + parseInt(shipping)) + '/-');
      console.log('4');
    } else {
      $('#cartgrandprice').text('₹ ' + parseInt(tamt) - parseInt(promocode_amt) + parseInt(shipping));
      $('#grand_total').val(parseInt(tamt) - parseInt(promocode_amt) + parseInt(shipping));
      $('#cartprice').text('₹ ' + (parseInt(tamt) - parseInt(promocode_amt) + parseInt(shipping)) + '/-');
      console.log('3');

    }
  }

  // function promo() {
  //   var promocode = $('#promocode').val();
  //   console.log(promocode);
  //   $.ajax({
  //     method: "POST",
  //     url: "<?= base_url('UserHome/checkPromo') ?>",
  //     data: {
  //       promocode: promocode
  //     },
  //     success: function(response) {
  //       console.log(response);
  //       if (response == 'false') {
  //         $('#deducamt').text('');
  //         $('#promomsg').text('');
  //         $('#promocode_amt').val('0');
  //         var tamt = $('#totalamount').val();
  //         var referalpoint = $('#referalpoint').val();

  //         $('#cartprice').text('₹ ' + parseInt(tamt) + '/-');
  //         var sc = $('#shipping_charges').val();
  //         $('#cartgrandprice').text('₹ ' + ((parseInt(tamt)) + parseFloat(sc)).toFixed(2));
  //         $('#grand_total').val(parseInt(tamt));

  //       } else {
  //         var obj = JSON.parse(response);
  //         console.log("amount" + obj[0]['amount']);
  //         $('#promocode_amt').val(obj[0]['amount']);
  //         var tamt = $('#totalamount').val();
  //         var lastamt = $('#grand_total').val();
  //         if (parseInt(lastamt) >= obj[0]['minimum_order']) {

  //           $('#promomsg').html('<span style="color:#28a745 "><b>Applied !Promo code Offer amount - ₹ ' + obj[0]['amount'] + '</b></span>');
  //           $('#cartprice').text('₹ ' + (tamt - obj[0]['amount']) + '/-');
  //           $('#deducamt').html('<h6>Coupon Discount</h6> <p for="free-shipping" class="color-dark free">- ₹ ' + obj[0]['amount'] + '</p>');

  //           var sc = $('#shipping_charges').val();
  //           $('#cartgrandprice').text('₹ ' + (parseInt(tamt) - (parseInt(obj[0]['amount']) + parseFloat(sc)).toFixed(2)));

  //           $('#grand_total').val((parseInt(tamt) - (parseInt(obj[0]['amount']) + parseFloat(sc)).toFixed(2)));
  //         } else {
  //           alert('This Promocode is not applicable for your order');
  //           location.reload();
  //         }

  //       }
  //     }
  //   });
  // }


  function load_cart_list() {
    $.ajax({
      url: '<?= base_url("fetch_data_cart") ?>',
      method: 'POST',
      success: function (response) {
        $('#cart_items_preview').html(response);
      }
    });

  }

  function load_checkout_list() {
    $.ajax({
      url: '<?= base_url("Home/fetch_checkout_cart") ?>',
      method: 'POST',
      success: function (response) {
        $('#checkout_items_preview').html(response);
      }
    });
  }

  $(document).on('click', '.removeCarthm', function () {
    var pid = $(this).data('id');
    var rowId = $(this).data('id');
    $.ajax({
      method: "POST",
      url: "<?= base_url('Home/delete_item') ?>",
      data: {
        pid: pid,
        rowId:rowId
      },
      success: function (response) {
        $('.product-item[data-id="' + rowId + '"]').remove();
        if ($('.product-item').length === 0) {
          $('.product-cart').html('<p>No product available</p>');
        }
        load_product();
        load_cart_list();
        fetchdata();
        load_checkout_list();
      }
    });
  });

  function load_cart_list() {
    $.ajax({
      url: '<?= base_url("Home/cart") ?>',
      method: 'POST',
      success: function (response) {
        $('#cart_items_preview').html(response);
      }
    });

  }

  load_checkoutbar();

  $(document).ready(function () {
    setTimeout(function () {
      $('.alert').fadeTo(200, 0).slideUp(200, function () {
        $(this).remove();
      });
    }, 4000);
  });
</script>

<script>


  $(".form")
    .find("input, textarea")
    .on("keyup blur focus", function (e) {
      var $this = $(this),
        label = $this.prev("label");

      if (e.type === "keyup") {
        if ($this.val() === "") {
          label.removeClass("active highlight");
        } else {
          label.addClass("active highlight");
        }
      } else if (e.type === "blur") {
        if ($this.val() === "") {
          label.removeClass("active highlight");
        } else {
          label.removeClass("highlight");
        }
      } else if (e.type === "focus") {
        if ($this.val() === "") {
          label.removeClass("highlight");
        } else if ($this.val() !== "") {
          label.addClass("highlight");
        }
      }
    });

  $(".tab a").on("click", function (e) {
    e.preventDefault();

    $(this).parent().addClass("active");
    $(this).parent().siblings().removeClass("active");

    target = $(this).attr("href");

    $(".tab-content > div").not(target).hide();

    $(target).fadeIn(600);
  });

</script>
<script>
  $(document).ready(function () {
    $('#tabsJustified .nav-item a').click(function (e) {
      e.preventDefault();
      // Get the src of the clicked thumbnail
      var newSrc = $(this).find('img').attr('src');
      // Update the main image src
      $('#zoom_01').attr('src', newSrc);
    });
  });
</script>

<script>
  <?php
  if (sessionId('success_status')) {
    ?>
    Swal.fire({
      title: '<?= sessionId('success_status') ?>!',
      text: '<?= sessionId('msg') ?>',
      icon: '<?= sessionId('success_status') ?>',
      confirmButtonText: 'Done'
    })
    <?php
  }
  ?>
</script>
<script>
  /*
 * Constants
 */

  const Default = {
    initialZoom: 3,
    minZoom: 1.25,
    maxZoom: 4,
    zoomSpeed: 0.01
  };

  /*
   * Class definition
   */

  class Zoomable {
    constructor(element, config) {
      this.element = element;
      this.config = this._mergeConfig(config);

      const { initialZoom, minZoom, maxZoom } = this.config;

      this.zoomed = false;
      this.initialZoom = Math.max(Math.min(initialZoom, maxZoom), minZoom);
      this.zoom = this.initialZoom;

      this.img = element.querySelector(".zoomable__img");
      this.img.draggable = false;
      this.element.style.setProperty("--zoom", this.initialZoom);

      this._addEventListeners();
    }

    static get Default() {
      return Default;
    }

    _addEventListeners() {
      this.element.addEventListener("mouseover", () =>
        this._handleMouseover()
      );
      this.element.addEventListener("mousemove", (evt) =>
        this._handleMousemove(evt)
      );
      this.element.addEventListener("mouseout", () => this._handleMouseout());
      this.element.addEventListener("wheel", (evt) => this._handleWheel(evt));

      this.element.addEventListener("touchstart", (evt) =>
        this._handleTouchstart(evt)
      );
      this.element.addEventListener("touchmove", (evt) =>
        this._handleTouchmove(evt)
      );
      this.element.addEventListener("touchend", () => this._handleTouchend());
    }

    _handleMouseover() {
      if (this.zoomed) {
        return;
      }

      this.element.classList.add("zoomable--zoomed");

      this.zoomed = true;
    }

    _handleMousemove(evt) {
      if (!this.zoomed) {
        return;
      }

      const elPos = this.element.getBoundingClientRect();

      const percentageX = `${((evt.clientX - elPos.left) * 100) / elPos.width
        }%`;
      const percentageY = `${((evt.clientY - elPos.top) * 100) / elPos.height
        }%`;

      this.element.style.setProperty("--zoom-pos-x", percentageX);
      this.element.style.setProperty("--zoom-pos-y", percentageY);
    }

    _handleMouseout() {
      if (!this.zoomed) {
        return;
      }

      this.element.style.setProperty("--zoom", this.initialZoom);
      this.element.classList.remove("zoomable--zoomed");

      this.zoomed = false;
    }

    _handleWheel(evt) {
      if (!this.zoomed) {
        return;
      }

      evt.preventDefault();

      const newZoom = this.zoom + evt.deltaY * (this.config.zoomSpeed * -1);
      const { minZoom, maxZoom } = this.config;

      this.zoom = Math.max(Math.min(newZoom, maxZoom), minZoom);
      this.element.style.setProperty("--zoom", this.zoom);
    }

    _handleTouchstart(evt) {
      evt.preventDefault();

      this._handleMouseover();
    }

    _handleTouchmove(evt) {
      if (!this.zoomed) {
        return;
      }

      const elPos = this.element.getBoundingClientRect();

      let percentageX =
        ((evt.touches[0].clientX - elPos.left) * 100) / elPos.width;
      let percentageY =
        ((evt.touches[0].clientY - elPos.top) * 100) / elPos.height;

      percentageX = Math.max(Math.min(percentageX, 100), 0);
      percentageY = Math.max(Math.min(percentageY, 100), 0);

      this.element.style.setProperty("--zoom-pos-x", `${percentageX}%`);
      this.element.style.setProperty("--zoom-pos-y", `${percentageY}%`);
    }

    _handleTouchend(evt) {
      this._handleMouseout();
    }

    _mergeConfig(config) {
      return {
        ...this.constructor.Default,
        ...(typeof config === "object" ? config : {})
      };
    }
  }

  /*
   * Implementation
   */

  const zoomables = document.querySelectorAll(".zoomable");

  for (const el of zoomables) {
    new Zoomable(el);
  }

</script>
</body>

</html>