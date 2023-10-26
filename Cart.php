<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
  Get more snippet on https://bootstraptor.com/snippets
-->

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold">3</i> items in your cart</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="img/APSU.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>ASUS ROG THOR 850P</h4>
                                    <p class="font-weight-light">ASUS ROG Thor 850W Platinum (Fully Modular Power Supply, 80+ Platinum, Lambda A++ Certified, ROG heatsinks, 135mm PWM Fan, 0dB Mode, OLED Panel, Sleeved Cables, Aura Sync, 10 Year Warranty)</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$240</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="img/LQCM.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>COOLER MASTER MASTER LIQUID ML240L RGB V2</h4>
                                    <p class="font-weight-light">Cooler Master Master Liquid ML240L RGB V2, Close-Loop AIO CPU Liquid Cooler, Gen3 Dual Chamber Pump, 240mm Radiator, SickleFlow 120 PWM ARGB, AMD Ryzen AM5/AM4, Intel LGA1700/1200 (MLW-D24M-A18PC-R2)</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$100</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="img/MAINI5.jpg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>ASUS ROG STRIX B760-F GAMING WIFI</h4>
                                    <p class="font-weight-light">ASUS ROG Strix B760-F Gaming WiFi Intel® B760(13th and 12th Gen) LGA 1700 ATX Motherboard,16 + 1 Power Stages,DDR5 up to 7800 MT/s,PCIe 5.0,3xM.2 Slots,WiFi 6E,USB 3.2 Gen 2x2 Type-C®,Aura Sync RGB</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$270</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1>$610</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a class="btn btn-primary mb-4 btn-lg pl-5 pr-5" style="background-color:#99C4D2;color:red">Purchase</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="index.php">
                <i class="fas fa-arrow-left mr-2"  style="background-color:#99C4D2;color:red" ></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>