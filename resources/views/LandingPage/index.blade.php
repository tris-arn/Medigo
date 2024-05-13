@extends('Structure.main')

@section('container')
    <img src="{{ asset("image\BannerMain.png") }}" style="width:100%;height:auto;"alt="">
    <div style="margin-top: 100px">
        <h1 class="text-center" style="font-size: 40px;font-weight:600" id="chopin">Categories</h1>

        <section class="mt-5">
            <div class="col">
                <div class="row text-center d-flex justify-content-center" style="width: 100%">
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">About us</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Call Us</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Promo</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">FAQ</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Terms and Conditions</a>
                        </h6>
                    </div>
                </div>
            
                <div class="row text-center d-flex justify-content-center" style="margin-top: 50px;width:100%">
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">About us</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Call Us</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Promo</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">FAQ</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Terms and Conditions</a>
                        </h6>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div style="margin-top:115px">
        <div class="row text-center d-flex justify-content-around" style="margin-top: 50px;width:100%">
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Discount 50%</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">For minimal spend RP 50.000</h6>
                    </div>
                </div>
            </div>
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Buy 1 Get 1</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">For new user only</h6>
                    </div>
                </div>
            </div>
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Free Delivery</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">Only for Jabodetabek user</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="tabs" style="width: 100%;margin-top:100px;margin-bottom:100px">
              

        <input type="radio" class="tabs__radio" name="tabs-div" id="Best_Seller" checked>
        <label for="Best_Seller" class="tabs__label">Best</label>
        <div class="tabs__content">
              <div class="row text-center d-flex justify-content-center" style="width: 100%">
                    <div class="col-md-1  card">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>                
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                </div>
        </div>
        <input type="radio" class="tabs__radio" name="tabs-div" id="sale">
        <label for="sale" class="tabs__label">Sale</label>
        <div class="tabs__content">
            <div class="row text-center d-flex justify-content-center" style="width: 100%">
                    <div class="col-md-1  card">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>                
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Botak</h5>
                            <label class="card-desc">Per Strip</label>
                            <h5 class="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection

