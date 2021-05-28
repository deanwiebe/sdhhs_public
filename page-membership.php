<?php
get_header();
?>
<div class="top-of-banner-asl">
    <div class="access-button">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                .st1{fill:#003c4f;}
                .st2{font-family:''Open Sans', sans-serif';}
                .st3{font-size:2.7px; font-weight: bold;}
                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
            </style>
            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
        </svg>
    </div>
</div>
<div class="top-of-banner-access">
    <div class="access-button">
        <i class="fas fa-universal-access"></i>
    </div>
</div>
<div class="page-asl">
    <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="accessControls">
    <h1>Access Controls</h1>
    <div class="font-size col">
        <h2>Text Size</h2>
        <div class="text-options default"><h3>Default</h3></div>
        <div class="text-options medium"><h3>Medium</h3></div>
        <div class="text-options large"><h3>Large</h3></div>
    </div>
    <div class="contrast col">
        <h2>Colour Contrast</h2>
        <div class="text-options contrast-default"><h3>Default</h3></div>
        <div class="text-options inverted"><h3>Inverted</h3></div>
        <div class="text-options high-contrast"><h3>High Contrast</h3></div>
    </div>
</div>
<div class="banner page-banner">
    <div class="banner-image">
        <img src="<?php the_post_thumbnail_url('banner-left-image'); ?>" alt="">       
    </div>
    <div class="tagline">
        <h1 class="page-title"><?php the_title() ?></h1>
    </div>
</div>
<div class="green-divider">

</div>
<div class="content">
    <div class="block-one">
        <?php the_content() ?>
    </div>
</div>
<div class="membership-columns">
  <div class="membership-col">
    <?php the_field('column_1') ?>
  </div>
  <div class="membership-col">
    <?php the_field('column_2') ?>
  </div>
  <div class="membership-col">
    <?php the_field('column_3') ?>
  </div>
</div>
<div class="blue-row">
  <div class="membership-button">
    <h2>Membership Application Form</h2>
    <h2><i class="fas fa-users"></i></h2>
  </div>
  <div class="show-hide">
    <?php echo(do_shortcode('[wpforms id="748"]')) ?>
  </div>
</div>
<div class="blue-row">
  <div class="membership-button">
    <h2>Membership Payment</h2>
    <h2><i class="fas fa-credit-card"></i></h2>
  </div>
  <div class="show-hide">
    <div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <h2>Payment Options</h2>
          <select id="item-options"><option value="Single" price="5.00">Single - 5.00 CAD</option><option value="Group" price="15.00">Group - 15.00 CAD</option></select>
          <select style="visibility: hidden" id="quantitySelect"></select>
        </div>
      <div id="paypal-button-container"></div>
      </div>
    </div>
    <div class="e-transfer">
      <h2>E-Transfer</h2>
      <p>Send your FULL NAME and the word MEMBERSHIP</p>
      <p>with your e-transfer</p>
      <br>
      <h2>E-Transfer to:</h2>
      <p>finance@sdhhs.com</p>
  </div>
  </div>
</div>
<div class="container">
  <div class="questions">
  <a href="<?php echo esc_url(site_url('/contact')) ?>">
    <h2>Still have questions?</h2>
    <h2>Click here to contact us</h2>
    <h2><i class="far fa-question-circle"></i></h2>
  </a>
  </div>
</div>

    <script src="https://www.paypal.com/sdk/js?client-id=Acr4OudxmSuExhW-uXGSaVk0Eo8fbfZ2tToQLnyThdBxzEYfCxeNh-qVFwPRhGJpZCqvbfuD7IN3fajL&currency=CAD" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        var shipping = 0;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
    var quantity = parseInt();
    var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
    if (!isNaN(quantity)) {
      quantitySelect.style.visibility = "visible";
    }
    var orderDescription = 'Membership Payment Form';
    if(orderDescription === '') {
      orderDescription = 'Item';
    }
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',
        
      },
      createOrder: function(data, actions) {
        var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
        var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
        var tax = (0 === 0) ? 0 : (selectedItemPrice * (parseFloat(0)/100));
        if(quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        tax *= quantity;
        tax = Math.round(tax * 100) / 100;
        var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
        priceTotal = Math.round(priceTotal * 100) / 100;
        var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

        return actions.order.create({
          purchase_units: [{
            description: orderDescription,
            amount: {
              currency_code: 'CAD',
              value: priceTotal,
              breakdown: {
                item_total: {
                  currency_code: 'CAD',
                  value: itemTotalValue,
                },
                shipping: {
                  currency_code: 'CAD',
                  value: shipping,
                },
                tax_total: {
                  currency_code: 'CAD',
                  value: tax,
                }
              }
            },
            items: [{
              name: selectedItemDescription,
              unit_amount: {
                currency_code: 'CAD',
                value: selectedItemPrice,
              },
              quantity: quantity
            }]
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },
      onError: function(err) {
        console.log(err);
      },
    }).render('#paypal-button-container');
  }
  initPayPalButton();
    </script>
<?php
get_footer();
?>