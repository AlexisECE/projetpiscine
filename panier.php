<!DOCTYPE html> 
<html>
    <head>
        <title>Mon Panier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="panier.css">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head> 
    <body> 
        <div class="container">
            <nav class="navbar navbar-expand">
              <a class="navbar-brand" href="index2.php"><img src="poire2.png" alt="logo" width="120px" height="60px"/></a>
              <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
               </button>


              <div class="dropdown">
                <a1 class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégories</a1>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ferraille.php">Ferraille ou Trésor</a>
                  <a class="dropdown-item" href="bpmusee.php">Bon pour le Musée</a>
                  <a class="dropdown-item" href="accessoirevip.php">Accessoire VIP</a>
                </div>
              </div>

              
            <form class="form-inline">
                <input class="form-control " type="search" placeholder="Rechercher un item" aria-label="Search" size="63px">
                <button class="btn btn-outline-light" type="submit">Rechercher</button>
              </form>
              
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="sell.php">Vendre</a></li>
            <div class="dropdown">
            <a1 class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mon compte</a1>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="panier.php">Mon panier</a>
                  <a class="dropdown-item" href="annonce.php">Mes annonces</a>
                  <a class="dropdown-item" href="logout.php">Déconnexion</a>
                </div>
</div>
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="help.html">Aide</a></li>
            </ul> 
          </div>
          </div> 
          </nav> 
          <html lang="en">

            <head>
              <meta charset="utf-8">
              <meta http-equiv="x-ua-compatible" content="ie=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Panier</title>
            </head>
            <body>
              <main>
                <div class="basket">
                  <div class="basket-module">
                    <label for="promo-code">Entrer un code promotionnel</label>
                    <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                    <button class="promo-code-cta">Appliquer</button>
                  </div>
                  <div class="basket-labels">
                    <ul>
                      <li class="item item-heading">Produit</li>
                      <li class="price">Prix</li>
                      <li class="quantity">Quantité</li>
                      <li class="subtotal">Sous-total</li>
                    </ul>
                  </div>
                  
<!--Supprime a partir d'ici, si tu veux enlever les Objets-->

                  <div class="basket-product">
                    <div class="item">
                      <div class="product-image">
                        <img src="Vase1.jpg" alt="Placholder Image 2" class="product-frame">
                      </div>
                      <div class="product-details">
                        <h5><strong><span class="item-quantity">4</span> x Vase antique</strong> Date de fabrication : 1866</h5>
                        <p><strong>Vase ornée, Lyre</strong></p>
                        <p>Code produit - 001</p>
                      </div>
                    </div>
                    <div class="price">26.00</div>
                    <div class="quantity">
                      <input type="number" value="4" min="1" class="quantity-field">
                    </div>
                    <div class="subtotal">104.00</div>
                    <div class="remove">
                      <button>Supprimer</button>
                    </div>
                  </div>
                  <div class="basket-product">
                    <div class="item">
                      <div class="product-image">
                        <img src="Piece1.jpg" alt="Placholder Image 2" class="product-frame">
                      </div>
                      <div class="product-details">
                        <h5><strong><span class="item-quantity">1</span> Piece d'or</strong> Napoléon 20 Frs</h5>
                        <p><strong>Poids : 10g</strong></p>
                        <p>Code produit - 002</p>
                      </div>
                    </div>
                    <div class="price">350.00</div>
                    <div class="quantity">
                      <input type="number" value="1" min="1" class="quantity-field">
                    </div>
                    <div class="subtotal">350.00</div>
                    <div class="remove">
                      <button>Supprimer</button>
                    
                    </div>
                  </div>
                </div>
                
<!--Supprime jusqu'ici, si tu veux enlever les Objets-->
            
                <aside>
                  <div class="summary">
                    <div class="summary-total-items"><span class="total-items"></span> Votre panier</div>
                    <div class="summary-subtotal">
                      <div class="subtotal-title">Sous-total</div>
                      <div class="subtotal-value final-value" id="basket-subtotal">0.00</div>
                      <div class="summary-promo hide">
                        <div class="promo-title">Promotion</div>
                        <div class="promo-value final-value" id="basket-promo"></div>
                      </div>
                    </div>
                    <div class="summary-delivery">
                      <select name="delivery-collection" class="summary-delivery-selection">
                          <option value="0" selected="selected">Choix de la livraison</option>
                         <option value="collection">En Point relais</option>
                         <option value="first-class">Livraison à domicile</option>
                         <option value="signed-for">Livraison en 1 jour ouvré</option>
                      </select>
                    </div>
                    <div class="summary-total">
                      <div class="total-title">Total</div>
                      <div class="total-value final-value" id="basket-total">0.00</div>
                    </div>

                    </form>
                        <form method="POST" action="payer.php">
                        <table>
                         <tr>
                        <td colspan="2" align="center">
                        <input type="submit"  class="summary-checkout" name="button3" value="Payer">
                        </tr>
                        </form>
                  
                  </div>
                </aside>
              </main>
            </body>
            
            </html>
         

            
            
           <script>
              $('a1').mouseover(function() {
                $(this).dropdown('toggle')
              })
              $('.visibility-cart').on('click',function(){
       
                * Set values + misc */
var promoCode;
var promoPrice;
var fadeTime = 300;

/* Assign actions */
$('.quantity input').change(function() {
  updateQuantity(this);
});

$('.remove button').click(function() {
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
});

$('.promo-code-cta').click(function() {

  promoCode = $('#promo-code').val();

  if (promoCode == '10off' || promoCode == '10OFF') {
    //Si PromoPrice n'a pas de valeur affecté, effectue une réduction de 10%
    if (!promoPrice) {
      promoPrice = 10;
    } else if (promoCode) {
      promoPrice = promoPrice * 1;
    }
  } else if (promoCode != '') {
    alert("Invalid Promo Code");
    promoPrice = 0;
  }
  //Si un code de promo valide est rentré, applique la promotion
  if (promoPrice) {
    $('.summary-promo').removeClass('hide');
    $('.promo-value').text(promoPrice.toFixed(2));
    recalculateCart(true);
  }
});

/* Calcul du total du panier */
function recalculateCart(onlyTotal) {
  var subtotal = 0;

  /* Addition des totaux */
  $('.basket-product').each(function() {
    subtotal += parseFloat($(this).children('.subtotal').text());
  });

  /* Calcul du total */
  var total = subtotal;

  //Applique la promotion au sous-total
  var promoPrice = parseFloat($('.promo-value').text());
  if (promoPrice) {
    if (subtotal >= 10) {
      total -= promoPrice;
    } else {
      alert('Order must be more than £10 for Promo code to apply.');
      $('.summary-promo').addClass('hide');
    }
  }

  /*Recalcul le total*/
  if (onlyTotal) {
    /* Met a jour l'affichage */
    $('.total-value').fadeOut(fadeTime, function() {
      $('#basket-total').html(total.toFixed(2));
      $('.total-value').fadeIn(fadeTime);
    });
  } else {
    /* Met a jour le résumé */
    $('.final-value').fadeOut(fadeTime, function() {
      $('#basket-subtotal').html(subtotal.toFixed(2));
      $('#basket-total').html(total.toFixed(2));
      if (total == 0) {
        $('.checkout-cta').fadeOut(fadeTime);
      } else {
        $('.checkout-cta').fadeIn(fadeTime);
      }
      $('.final-value').fadeIn(fadeTime);
    });
  }
}

/* Met a jour la quantité */
function updateQuantity(quantityInput) {
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;

  /* Met a jour la ligne des prix */
  productRow.children('.subtotal').each(function() {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });

  productRow.find('.item-quantity').text(quantity);
  updateSumItems();
}

function updateSumItems() {
  var sumItems = 0;
  $('.quantity input').each(function() {
    sumItems += parseInt($(this).val());
  });
  $('.total-items').text(sumItems);
}

/* Supprime un objet du panier */
function removeItem(removeButton) {
  
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
    updateSumItems();
  });
}

            </script>
            <script>
              $('a1').mouseover(function() {
                $(this).dropdown('toggle')
              })
            </script>

    </body>
</html>
