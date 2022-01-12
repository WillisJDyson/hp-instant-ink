{% set prices = {
    "15":"0.99",
    "50":"1.99",
    "100":"3.49",
    "300":"9.99",
    "700":"22.49"
} %}

{% set data = [
  {
    "family":"62",
    "qf":"659335",
    "partNo":"C2P06AE#UUS",
    "pages":"165",
    "yield":"S",
    "title":"HP 62 Ink Cartridge - Tri-colour - Inkjet"
  },
  {
    "family":"62",
    "qf":"666632",
    "partNo":"C2P06AE",
    "pages":"165",
    "yield":"S",
    "title":"HP 62 Tri-Colour Original&nbsp;Ink Cartridge - Standard Yield 165 Pages - C2P06AE"
  },
  {
    "family":"62",
    "qf":"666633",
    "partNo":"C2P04AE",
    "pages":"200",
    "yield":"S",
    "title":"HP 62 Black Original Ink Cartridge - Standard Yield 200 Pages - C2P04AE"
  },
  {
    "family":"62",
    "qf":"667798",
    "partNo":"C2P05AE",
    "pages":"600",
    "yield":"H",
    "title":"HP 62XL Black Original&nbsp;Ink Cartridge - High Yield 600 Pages - C2P05AE"
  },
  {
    "family":"62",
    "qf":"670263",
    "partNo":"C2P07AE",
    "pages":"415",
    "yield":"H",
    "title":"HP 62XL Tri-Colour Original&nbsp;Ink Cartridge - High Yield 415 Pages - C2P07AE"
  },
  {
    "family":"62",
    "qf":"738630",
    "partNo":"N9J71AE",
    "pages":"365",
    "yield":"S",
    "title":"HP 62 Multi-pack 1x Black, 1x Tri-Colour Original&nbsp;Ink Cartridge - Standard Yield 200/165 Pages - N9J71AE"
  },
  {
    "family":"62",
    "qf":"738635",
    "partNo":"N9J71AE#301",
    "pages":"165",
    "yield":"S",
    "title":"HP 62 Ink Cart Combo 2-Pack Blistered"
  },
  {
    "family":"303",
    "qf":"798227",
    "partNo":"T6N02AE#301",
    "pages":"200",
    "yield":"S",
    "title":"HP 303 Black Original&nbsp;Ink Cartridge - Standard Yield 200 Pages - T6N02AE"
  },
  {
    "family":"303",
    "qf":"798229",
    "partNo":"T6N04AE#UUS",
    "pages":"600",
    "yield":"H",
    "title":"HP 303XL Black Original&nbsp; Ink Cartridge - High Yield 600 Pages - T6N04AE"
  },
  {
    "family":"303",
    "qf":"798230",
    "partNo":"Z4B62EE",
    "pages":"365",
    "yield":"S",
    "title":"HP 303 Multi-pack 1x Black, 1x Tri-Colour Original&nbsp;Ink Cartridge - Standard Yield 200 Pages/165 Pages - Z4B62EE"
  },
  {
    "family":"303",
    "qf":"798232",
    "partNo":"T6N01AE#UUS",
    "pages":"165",
    "yield":"S",
    "title":"HP 303 Tri-Colour Original&nbsp;Ink Cartridge - Standard Yield 200 Pages - T6N01AE"
  },
  {
    "family":"303",
    "qf":"798238",
    "partNo":"T6N03AE#UUS",
    "pages":"415",
    "yield":"H",
    "title":"HP 303XL Tri-Colour Original&nbsp;Ink Cartridge - High Yield 415 Pages - T6N03AE"
  },
  {
    "family":"303",
    "qf":"859053",
    "partNo":"3YN10AE",
    "pages":"1015",
    "yield":"H",
    "title":"HP 303XL Black &amp; Tri-Colour Ink Cartridges"
  },
  {
    "family":"303",
    "qf":"859057",
    "partNo":"3YM92AE",
    "pages":"600",
    "yield":"S",
    "title":"HP 303 Ink Cartridge Combo 2-Pack"
  },
  {
    "family":"304",
    "qf":"745245",
    "partNo":"N9K07AE#301",
    "pages":"300",
    "yield":"H",
    "title":"HP 304XL Tri-Colour Original Ink Cartridge (Cyan, Magenta, Yellow) High Yield - N9K07AE"
  },
  {
    "family":"304",
    "qf":"747326",
    "partNo":"N9K05AE",
    "pages":"120",
    "yield":"S",
    "title":"HP 304 Tri-Colour Original&nbsp;Ink Cartridge - Standard Yield 100 Pages - N9K05AE"
  },
  {
    "family":"304",
    "qf":"747839",
    "partNo":"N9K07AE",
    "pages":"300",
    "yield":"H",
    "title":"HP 304XL Tri-Colour Original&nbsp;Ink Cartridge - High Yield 300 Pages - N9K07AE"
  },
  {
    "family":"304",
    "qf":"747840",
    "partNo":"N9K06AE",
    "pages":"120",
    "yield":"S",
    "title":"HP 304 Black Original&nbsp;Ink Cartridge - Standard Yield 120 Pages - N9K06AE"
  },
  {
    "family":"304",
    "qf":"859056",
    "partNo":"3JB05AE",
    "pages":"220",
    "yield":"S",
    "title":"HP 304 Original Ink Cartridges, Black &amp; Tri-Colour Multi Pack - 3JB05AE"
  },
  {
    "family":"305",
    "qf":"981833",
    "partNo":"3YM60AE#UUS",
    "pages":"120",
    "yield":"S",
    "title":"HP 305 Tri-color Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"981834",
    "partNo":"3YM61AE#UUS",
    "pages":"120",
    "yield":"S",
    "title":"HP 305 Black Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"981835",
    "partNo":"3YM63AE#UUS",
    "pages":"120",
    "yield":"H",
    "title":"HP 305XL High Yield Tri-color Original I"
  },
  {
    "family":"305",
    "qf":"981836",
    "partNo":"3YM62AE#UUS",
    "pages":"120",
    "yield":"H",
    "title":"HP 305XL High Yield Black Original Ink C"
  },
  {
    "family":"305",
    "qf":"983029",
    "partNo":"3YM62AE#301",
    "pages":"120",
    "yield":"H",
    "title":"HP 305XL High Yield Black Original Ink C"
  },
  {
    "family":"305",
    "qf":"983030",
    "partNo":"3YM60AE#301",
    "pages":"165",
    "yield":"S",
    "title":"HP 305 Tri-color Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"983031",
    "partNo":"3YM63AE#301",
    "pages":"600",
    "yield":"H",
    "title":"HP 305XL High Yield Tri-color Original I"
  },
  {
    "family":"305",
    "qf":"983032",
    "partNo":"3YM61AE#301",
    "pages":"200",
    "yield":"S",
    "title":"HP 305 Black Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"983333",
    "partNo":"3YM61AE",
    "pages":"100",
    "yield":"S",
    "title":"HP 305 Black Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"983336",
    "partNo":"3YM60AE",
    "pages":"600",
    "yield":"S",
    "title":"HP 305 Tri-color Original Ink Cartridge"
  },
  {
    "family":"305",
    "qf":"989947",
    "partNo":"3YM63AE",
    "pages":"200",
    "yield":"H",
    "title":"HP 305XL High Yield Tri-colour Original Ink"
  },
  {
    "family":"305",
    "qf":"989948",
    "partNo":"3YM62AE",
    "pages":"240",
    "yield":"H",
    "title":"HP 305XL High Yield Black Original Ink"
  },
  {
    "family":"305",
    "qf":"990114",
    "partNo":"3YM62AE#ABE",
    "pages":"240",
    "yield":"H",
    "title":"HP 305XL High Yield Black Original Ink C"
  },
  {
    "family":"912",
    "qf":"886954",
    "partNo":"3YL84AE",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL High Yield Ink Cartridge Black 3YL84AE"
  },
  {
    "family":"912",
    "qf":"886955",
    "partNo":"3YL83AE#301",
    "pages":"825",
    "yield":"H",
    "title":"Hp 912xl High Yield Yellow - Original Ink Cartridge"
  },
  {
    "family":"912",
    "qf":"886958",
    "partNo":"3YL82AE#301",
    "pages":"825",
    "yield":"H",
    "title":"Hp 912xl High Yield Magenta - Original Ink Cartridge"
  },
  {
    "family":"912",
    "qf":"886965",
    "partNo":"3YL80AE",
    "pages":"300",
    "yield":"S",
    "title":"HP 912 Ink Cartridge Black - 3YL80AE"
  },
  {
    "family":"912",
    "qf":"913505",
    "partNo":"3YL78AE#BGX",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 Magenta Original Ink Cartridge"
  },
  {
    "family":"912",
    "qf":"913507",
    "partNo":"3YL83AE",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL High Yield Ink Cartridge Yellow 9.9ml 3YL83AE"
  },
  {
    "family":"912",
    "qf":"913508",
    "partNo":"3YL80AE#BGX",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 Black Original Ink Cartridge"
  },
  {
    "family":"912",
    "qf":"913509",
    "partNo":"3YL81AE#BGX",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL - 9.9 ml - High Yield - cyan - original - ink cartridge - for Officejet 8012, 8013, 8014, 8015, Officejet Pro 8022, 8024, 8025, 8035"
  },
  {
    "family":"912",
    "qf":"965507",
    "partNo":"6JR41AE",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 Officejet Value Pack - Yellow, cyan, magenta"
  },
  {
    "family":"912",
    "qf":"973355",
    "partNo":"3YL84AE#301",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL - High Yield - black - original - ink cartridge - for Officejet 8012, 8013, 8014, 8015, Officejet Pro 8020, 8022, 8023, 8024, 8025, 8035"
  },
  {
    "family":"912",
    "qf":"989711",
    "partNo":"3YL79AE",
    "pages":"315",
    "yield":"S",
    "title":"Hp 912 Yellow Ink"
  },
  {
    "family":"912",
    "qf":"991615",
    "partNo":"3YL81AE#301",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL - 9.9 ml - High Yield - cyan - original - ink cartridge - for Officejet 80XX, Officejet Pro 80XX"
  },
  {
    "family":"912",
    "qf":"992280",
    "partNo":"6ZC74AE",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 CMYK Cartridge 4-Pack"
  },
  {
    "family":"912",
    "qf":"992289",
    "partNo":"6ZC74AE#301",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 CMYK Cartridge 4-Pack"
  },
  {
    "family":"912",
    "qf":"1128805",
    "partNo":"3YL81AE",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL High Yield Cyan Original Ink Cartridge"
  },
  {
    "family":"912",
    "qf":"1128814",
    "partNo":"3YL77AE",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 Cyan Original Ink Cartridges"
  },
  {
    "family":"912",
    "qf":"1128818",
    "partNo":"3YL82AE",
    "pages":"825",
    "yield":"H",
    "title":"HP 912XL High Yield MGN Original Ink Crt"
  },
  {
    "family":"912",
    "qf":"1128825",
    "partNo":"3YL78AE",
    "pages":"315",
    "yield":"S",
    "title":"HP 912 Magenta Original Ink Cartridge"
  }
] %}

<!--  Start of family wrapper -->
  <div class='family'>
    <h2 class='family__name'>HP 62 Ink</h2>

  <!-- Hero banner start -->
    <div class='ii-banner'>
      <div class='ii-banner__text'>
        <img class='ii-banner__logo' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/hp__ii.png' alt='HP Instant Ink'>
        <h3 class='ii-banner__header'>HP's ink delivery service</h3>
        <p class='ii-banner__desc'>Get ink, plus hassle-free delivery and recycling all starting at £0.99 a month. Get £10 Instant Ink credit when you sign up today.</p>
        <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f' class='ii-banner__button-wrap'>
          <button class='ii-banner__button'>Join Instant Ink</button>
        </a>
      </div>
    </div>
  <!-- Hero banner end -->

  <!-- Cartridge yield selector start -->
    <div class="cartridges">
      <div class='cartridges__options'>
        <a id='hyBtn' class='cartridges__option cartridges__option--left'>High Yield Cartridges</a>
        <a id='syBtn' class='cartridges__option cartridges__option--right'>Standard-fill Cartridges</a>
      </div>
      <div id='hyDesc' class='cartridges__info-wrap'>
        <p class='cartridges__info'>High Yield Cartridges</p>
        <p class='cartridges__info cartridges__info--desc'>XL inks and XL Toners offer a lower cost per page for more frequent printing.</p>
      </div>
      <div id='syDesc' class='cartridges__info-wrap'>
        <p class='cartridges__info'>Standard Yield Cartridges</p>
        <p class='cartridges__info cartridges__info--desc'>Inks and Toners offering a standard cost per page.</p>
      </div>
    </div>
  <!-- Cartridge yield selector end -->
        
  <!-- Loop through and pull out all inks with high yield -->
    <div class="high-yields" id="highYields">
      {% for item in data %}
        {% if item.family == "62" %}
          {% if item.yield == "H" %}
          <div class='product'>

          <!-- Get name, price and part code -->
            <div class='product__column product__column--info'>
              <div class='product__img-wrap'>
                <img class='product__img' src='https://{{products[item.qf].images.200.main.url}}' alt='{{products[item.qf].name}}'>
              </div>
              <div class='product__text-wrap'>
                <h4 class='product__name'>{{products[item.qf].name}}</h4>
                <small class='product__small'>PART NUMBER {{item.partNo}}</small><br>
                <a href='https://ebuyer.com/{{item.qf}}'  class='product__learn'>Learn more</a>
                <p class='product__eta'>Delivery within 48 hrs *</p>
                <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                  <button class='product__free-credit'>Receive £10 credit with HP Instant Ink</button>
                </a>
              </div>
            </div>
          <!--  -->

          <!-- Pricing column start -->
            <div class='product__column product__column--pricing'>
              <div class='slice'>
                <div class='slice__col'>
                  <div class='product__colour black'>              
                  </div>
                </div>

              <!-- Show ink yield and pick quantity -->
                <div class='slice__col'>
                  <p class='product__pages'>~{{item.pages}} pages</p>
                  <select class='product__quant quantity' name="quant" id="quant">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
              <!--  -->

              <!-- Pull out product price -->
                <div class='slice__col'>
                  <p class='product__price price'>&pound;{{ price(products[item.qf].pricing.incVat.current) }}</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
              <!--  -->

              <!-- Generate URL for button, or disable button if out of stock -->
                <div class='slice__col slice__col--bottom'>
                  <a class='url atb' href='https://orders.ebuyer.com/customer/products/index.html?action=Y2FydF9tdWx0aV9hZGRfaXRlbQ==&pp[]={{item.qf}}&pq[]=1'>
                   {% if products[item.qf].stockLevel is defined and products[item.qf].stockLevel <= 0 %}             
                      <button class='product__button product__button--grey' disabled="disabled">
                          Out of stock
                      </button>
                  {% else %}
                      <button class='product__button'>ADD TO BASKET</button>
                  {% endif %}
                  </a>
                </div>
              <!--  -->

              </div>
                
            <!-- Mobile-only slice start -->
              <div class='slice mob'>

              <!-- Product colour(s) -->
                <div class='slice__col mob-col'>
                  <div class='product__colour black'>              
                  </div>
                </div>
              <!--  -->

              <!-- Quantity selection -->
                <div class='slice__col mob-col'>
                  <p class='product__pages'>~{{item.pages}} pages</p>
                  <select class='product__quant quantity' name="quant" id="quant">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
              <!--  -->

              <!-- Start of "Add To Basket" section -->
                <div class='slice__col mob-col'>
                  <p class='product__price price'>&pound;{{ price(products[item.qf].pricing.incVat.current) }}</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                <div class='slice__col slice__col--bottom mob-col--full'>
                  <a class='url atb' href='https://orders.ebuyer.com/customer/products/index.html?action=Y2FydF9tdWx0aV9hZGRfaXRlbQ==&pp[]={{item.qf}}&pq[]=1'>
                  {% if products[item.qf].stockLevel is defined and products[item.qf].stockLevel <= 0 %}              
                      <button class='product__button product__button--grey' disabled="disabled">
                          Out of stock
                      </button>
                  {% else %}
                          <button class='product__button'>ADD TO BASKET</button>
                  {% endif %}
                  </a>
                </div>
              <!-- End of "Add To Basket" section -->

              </div>
            <!-- Mobile-only slice end -->

            <!-- Start of "Join Instant Ink" section (desktop) -->
              <div class='slice slice--grey'>
                <div class='slice__col slice__col--logo'>
                  <img class='product__ii-logo' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/instant-ink-logo-2.png' alt='HP Instant Ink'>
                </div>

              <!-- Choose monthly page number -->
                <div class='slice__col'>
                  <select class='product__quant ii-quant' name="ii-quant" id="ii-quant">
                    <option value="15">15 pages/month</option>
                    <option value="50">50 pages/month</option>
                    <option value="100">100 pages/month</option>
                    <option value="300">300 pages/month</option>
                    <option value="700">700 pages/month</option>
                  </select>
                </div>
              <!--  -->

              <!-- Display monthly price -->
                <div class='slice__col slice__col--bottom'>
                  <p class='product__price price ii-price'>£0.99/month</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                <div class='slice__col slice__col--bottom'>
                  <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                    <button class='product__button product__button--basket'>JOIN INSTANT INK</button>
                  </a>
                </div>
              </div>
            <!--  -->
            <!-- End of "Join Instant Ink" section (desktop) -->

            <!-- Start of "Join Instant Ink" section (mobile) -->
              <div class='slice slice--grey mob'>
                  <div>
                <div>
                <div class='slice__col slice__col--logo mob-col--ii-logo'>
                  <img class='product__ii-logo' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/instant-ink-logo-2.png' alt='HP Instant Ink'>
                </div>
               </div>
                <div class='slice__col mob-col--ii'>
                  <select class='product__quant ii-quant' name="ii-quant" id="ii-quant">
                    <option value="15">15 pages/month</option>
                    <option value="50">50 pages/month</option>
                    <option value="100">100 pages/month</option>
                    <option value="300">300 pages/month</option>
                    <option value="700">700 pages/month</option>
                  </select>
                </div>
                <div class='slice__col slice__col--bottom mob-col--ii'>
                  <p class='product__price price ii-price'>£0.99/month</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                 </div>
                <div class='slice__col slice__col--bottom mob-col--full'>
                   <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                      <button class='product__button product__button--basket'>JOIN INSTANT INK</button>
                   </a>
                </div>
              </div>
            <!-- End of "Join Instant Ink" section (mobile) -->

            <!-- Instant Ink details section start -->
              <div class='ii-details'>

              <!-- Hide and show grid -->
                <a class='ii-details__button--hidden-text' id='hideGrid'><img class='icon'  src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowup.png' alt='Up arrow'> HIDE DETAILS <img class='icon' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowup.png' alt='Up arrow'></a>
                <a class='ii-details__button' id='showGrid'><img class='icon'  src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowdown.png'  alt='Down arrow'> SHOW DETAILS <img class='icon' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowdown.png' alt='Down arrow'></a>
              <!--  -->

              <!-- Instant ink details grid -->
                <div id='grid' class='ii-details__grid'>

                <!-- Grid col -->
                  <div class='ii-details__col'>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/order.svg' alt='Delivery'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Never Run Out</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Convenient ink replacements and smart delivery included</p>
                      </div>
                    </div>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/save.svg' alt='Save'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Save up to 70%</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Save when you pay monthly with Instant Ink, starting from only £0. 99 per month</p>
                      </div>
                    </div>
                  </div>
                <!-- Grid col end -->

                <!-- Grid col -->
                  <div class='ii-details__col'>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/worryfree.svg' alt='Worry free'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Worry-free Service</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Peace of mind with plan flexibility to change, pause, or cancel anytime at no cost 3</p>
                      </div>
                    </div>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/recycling.svg' alt='Recycling'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Responsible Recycling</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Help us put plastic back into printers with prepaid recycling service included</p>
                      </div>
                    </div>
                  </div>
                  <!-- Grid col end -->

                </div>
                <!-- End of Instant Ink details grid -->

              </div>
            <!-- End of Instant Ink section -->

            </div>
          <!-- End of pricing column -->

          </div>
         {% endif %}
       {% endif %}
     {% endfor %}
    </div>
  <!-- End of high yields loops -->
              
        
              
              
  <!-- Loop through and pull out all inks with standard yield -->
    <div class="standard-yields" id="standardYields">
      {% for item in data %}
        {% if item.family == "62" %}
          {% if item.yield == "S" %}
          <div class='product'>

          <!-- Get name, price and part code -->
            <div class='product__column product__column--info'>
              <div class='product__img-wrap'>
                <img class='product__img' src='https://{{products[item.qf].images.200.main.url}}' alt='{{products[item.qf].name}}'>
              </div>
              <div class='product__text-wrap'>
                <h4 class='product__name'>{{products[item.qf].name}}</h4>
                <small class='product__small'>PART NUMBER {{item.partNo}}</small><br>
                <a href='https://ebuyer.com/{{item.qf}}'  class='product__learn'>Learn more</a>
                <p class='product__eta'>Delivery within 48 hrs *</p>
                <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                  <button class='product__free-credit'>Receive £10 credit with HP Instant Ink</button>
                </a>
              </div>
            </div>
          <!--  -->

          <!-- Pricing column start -->
            <div class='product__column product__column--pricing'>
              <div class='slice'>
                <div class='slice__col'>
                  <div class='product__colour black'>              
                  </div>
                </div>

              <!-- Show ink yield and pick quantity -->
                <div class='slice__col'>
                  <p class='product__pages'>~{{item.pages}} pages</p>
                  <select class='product__quant quantity' name="quant" id="quant">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
              <!--  -->

              <!-- Pull out product price -->
                <div class='slice__col'>
                  <p class='product__price price'>&pound;{{ price(products[item.qf].pricing.incVat.current) }}</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
              <!--  -->

              <!-- Generate URL for button, or disable button if out of stock -->
                <div class='slice__col slice__col--bottom'>
                  <a class='url atb' href='https://orders.ebuyer.com/customer/products/index.html?action=Y2FydF9tdWx0aV9hZGRfaXRlbQ==&pp[]={{item.qf}}&pq[]=1'>
                   {% if products[item.qf].stockLevel is defined and products[item.qf].stockLevel <= 0 %}             
                      <button class='product__button product__button--grey' disabled="disabled">
                          Out of stock
                      </button>
                  {% else %}
                      <button class='product__button'>ADD TO BASKET</button>
                  {% endif %}
                  </a>
                </div>
              <!--  -->

              </div>
                
            <!-- Mobile-only slice start -->
              <div class='slice mob'>

              <!-- Product colour(s) -->
                <div class='slice__col mob-col'>
                  <div class='product__colour black'>              
                  </div>
                </div>
              <!--  -->

              <!-- Quantity selection -->
                <div class='slice__col mob-col'>
                  <p class='product__pages'>~{{item.pages}} pages</p>
                  <select class='product__quant quantity' name="quant" id="quant">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
              <!--  -->

              <!-- Start of "Add To Basket" section -->
                <div class='slice__col mob-col'>
                  <p class='product__price price'>&pound;{{ price(products[item.qf].pricing.incVat.current) }}</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                <div class='slice__col slice__col--bottom mob-col--full'>
                  <a class='url atb' href='https://orders.ebuyer.com/customer/products/index.html?action=Y2FydF9tdWx0aV9hZGRfaXRlbQ==&pp[]={{item.qf}}&pq[]=1'>
                  {% if products[item.qf].stockLevel is defined and products[item.qf].stockLevel <= 0 %}              
                      <button class='product__button product__button--grey' disabled="disabled">
                          Out of stock
                      </button>
                  {% else %}
                          <button class='product__button'>ADD TO BASKET</button>
                  {% endif %}
                  </a>
                </div>
              <!-- End of "Add To Basket" section -->

              </div>
            <!-- Mobile-only slice end -->

            <!-- Start of "Join Instant Ink" section (desktop) -->
              <div class='slice slice--grey'>
                <div class='slice__col slice__col--logo'>
                  <img class='product__ii-logo' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/instant-ink-logo-2.png' alt='HP Instant Ink'>
                </div>

              <!-- Choose monthly page number -->
                <div class='slice__col'>
                  <select class='product__quant ii-quant' name="ii-quant" id="ii-quant">
                    <option value="15">15 pages/month</option>
                    <option value="50">50 pages/month</option>
                    <option value="100">100 pages/month</option>
                    <option value="300">300 pages/month</option>
                    <option value="700">700 pages/month</option>
                  </select>
                </div>
              <!--  -->

              <!-- Display monthly price -->
                <div class='slice__col slice__col--bottom'>
                  <p class='product__price price ii-price'>£0.99/month</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                <div class='slice__col slice__col--bottom'>
                  <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                    <button class='product__button product__button--basket'>JOIN INSTANT INK</button>
                  </a>
                </div>
              </div>
            <!--  -->
            <!-- End of "Join Instant Ink" section (desktop) -->

            <!-- Start of "Join Instant Ink" section (mobile) -->
              <div class='slice slice--grey mob'>
                  <div>
                <div>
                <div class='slice__col slice__col--logo mob-col--ii-logo'>
                  <img class='product__ii-logo' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/instant-ink-logo-2.png' alt='HP Instant Ink'>
                </div>
               </div>
                <div class='slice__col mob-col--ii'>
                  <select class='product__quant ii-quant' name="ii-quant" id="ii-quant">
                    <option value="15">15 pages/month</option>
                    <option value="50">50 pages/month</option>
                    <option value="100">100 pages/month</option>
                    <option value="300">300 pages/month</option>
                    <option value="700">700 pages/month</option>
                  </select>
                </div>
                <div class='slice__col slice__col--bottom mob-col--ii'>
                  <p class='product__price price ii-price'>£0.99/month</p>
                  <small class='product__price product__price--vat'>VAT incl</small>
                </div>
                 </div>
                <div class='slice__col slice__col--bottom mob-col--full'>
                   <a href='https://cobranded.hpinstantink.com/cdvc?jumpid=af_b977fe015f'>
                      <button class='product__button product__button--basket'>JOIN INSTANT INK</button>
                   </a>
                </div>
              </div>
            <!-- End of "Join Instant Ink" section (mobile) -->

            <!-- Instant Ink details section start -->
              <div class='ii-details'>

              <!-- Hide and show grid -->
                <a class='ii-details__button--hidden-text' id='hideGrid'><img class='icon'  src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowup.png' alt='Up arrow'> HIDE DETAILS <img class='icon' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowup.png' alt='Up arrow'></a>
                <a class='ii-details__button' id='showGrid'><img class='icon'  src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowdown.png'  alt='Down arrow'> SHOW DETAILS <img class='icon' src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/arrowdown.png' alt='Down arrow'></a>
              <!--  -->

              <!-- Instant ink details grid -->
                <div id='grid' class='ii-details__grid'>

                <!-- Grid col -->
                  <div class='ii-details__col'>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/order.svg' alt='Delivery'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Never Run Out</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Convenient ink replacements and smart delivery included</p>
                      </div>
                    </div>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/save.svg' alt='Save'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Save up to 70%</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Save when you pay monthly with Instant Ink, starting from only £0. 99 per month</p>
                      </div>
                    </div>
                  </div>
                <!-- Grid col end -->

                <!-- Grid col -->
                  <div class='ii-details__col'>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/worryfree.svg' alt='Worry free'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Worry-free Service</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Peace of mind with plan flexibility to change, pause, or cancel anytime at no cost 3</p>
                      </div>
                    </div>
                    <div class='ii-details__item'>
                      <div class='ii-details__icon'>
                        <img src='https://image.ebuyer.com/customer/promos/custom-page-assets/hpinstantink/recycling.svg' alt='Recycling'>
                      </div>
                      <div class='ii-details__text'>
                        <p class='ii-details__detail ii-details__detail--header'>Responsible Recycling</p>
                        <p class='ii-details__detail ii-details__detail--desc'>Help us put plastic back into printers with prepaid recycling service included</p>
                      </div>
                    </div>
                  </div>
                  <!-- Grid col end -->

                </div>
                <!-- End of Instant Ink details grid -->

            </div>
          <!-- End of pricing column -->

          </div>
         {% endif %}
       {% endif %}
     {% endfor %}
    </div>
  <!-- End of standard yields loops -->

</div>
<!-- End of family wrapper -->

<!-- Footer -->
<div class='foot'>
    <p class='foot__text'>
        1. Ordered by your printer when needed, subject to customer internet connection. Availability may vary in exceptional circumstances. Express deliveries available via Support Services, if you use more ink than anticipated. See <a href='https://support.hp.com/gb-en/product/hp-instant-ink-series/5264756/model/5401249'>hp.com/go/instantinksupport</a> for troubleshooting assistance and contact support options. <br>2. Based on monthly subscription cost of HP Instant Ink 700-page plans without purchase of additional sets of pages compared to cost per page to print ISO/IEC 24711 pages on most in-class, traditional A4 colour inkjet cartridge printers & MFPs using original standard capacity cartridges priced for: majority of EMEA countries 200 Euro; UK 200 GBP. Sale prices not considered for this study. HP Ink Advantage printers excluded due to non-standard hardware & supplies model. Buyers Lab July 2020 study commis¬sioned by HP, based on publicly available information as of June 1, 2020. Printers selected by market share in IDC Quarterly Hardcopy Peripherals Tracker - Final Historical 2020Q1. For details: <a href='https://www.keypointintelligence.com/hpinstantink/'>www.keypointintelligence.com/HPInstantInkROW</a> <br>3. Change or cancel your plan at any time online. If you decide to cancel your HP Instant Ink plan you can go back to using HP original Standard or XL cartridges. Plan upgrades are effective immediately and the charges will be applied retrospectively or in the next billing cycle, depending on user choice. Plan downgrades and cancellations are effective after the last day of the current billing period. For full details go to <a href='https://instantink.hpconnected.com/uk/en/terms'>instantink.hpconnected.com/terms.</a>
    </p>
</div>
<!--  -->