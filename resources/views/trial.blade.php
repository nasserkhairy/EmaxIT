<style>
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

body {
    font-family: 'Muli', sans-serif;
    height: 100% !important;
    background-color: #fff !important;
    padding: 0 !important;
    margin: 0 !important;
}


.container-fluid {
    margin-top: 101px;
    color: #000 !important;
}

.card {
    color: #757575 !important;
    background-color: #fff !important;
    align-items: center !important;
    background: url('https://i.imgur.com/9djv5sH.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right calc(110px + (150 - 110) * ((100vw - 360px) / (1600 - 360))) bottom !important;

}

h2 {
    font-size: calc(25px + (45 - 25) * ((100vw - 360px) / (1600 - 360))) !important;
}

h5 {
    font-size: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
}


.fa {
    cursor: pointer;
    font-size: 21px;
    margin: 5px 10px 5px 10px !important;
}


button {
    font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
    padding-left: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
    padding-right: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
    padding-top: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important;
    padding-bottom: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}


li {
    margin-top: 10px;
    margin-bottom: 10px;
}

input {
    border: 2px solid green !important;
}


.input-group-lg>.custom-select,
.input-group-lg>.form-control:not(textarea) {
    height: calc(40px + (48 - 40) * ((100vw - 360px) / (1600 - 360))) !important;
}


input::-webkit-input-placeholder {
    padding-left: 5px !important;
    transform: translate3d(0, -4px, 0)
}

input::placeholder {
    vertical-align: middle !important;
    font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 360))) !important;
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

img {
    vertical-align: middle !important;
    width: 100%;
    height: auto;
    width: calc(17px + 6 * ((100vw - 320px) / 680));
}

li:first-child {
    font-size: 21px !important;
    font-weight: bold;
    margin-bottom: calc(40px + (48 - 40) * ((100vw - 360px) / (1600 - 360))) !important;
    color: #757575 !important;

}

footer {
    color: #757575 !important;
}

.social {
    position: relative;
    left: -10px;
}

.cursor-pointer {
    cursor: pointer !important;
    color: green;
    font-weight: bold;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container-fluid justify-content-center">
    <div class="row py-5">
        <div class="col">
            <div class="card border-0">
                <div class="card-body text-center ">
                    <h2><b>Let `s have a chat !</b></h2>
                    <p class="pl-0 ml-0 mb-5">Find out what we can do for your business or home.</p>
                    <div class="row text-center justify-content-center">
                        <div class="col-auto">
                            <div class="input-group-lg input-group mb-3 "><input type="text" class="form-control"
                                    placeholder="Enter your e-mail address" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append"><button class="btn btn-success" type="button"
                                        id="button-addon2"> <b>Submit</b></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mx-0 px-0">
    <footer>
        <div class="row justify-content-around mb-0 pt-5 pb-0 ">
            <div class=" col-11">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-12 font-italic align-items-center  mt-md-3 mt-4">
                        <h5><span> <img src="https://extendthemes.com/wp-content/uploads/2018/06/xbox-green-min.png"
                                    class="img-fluid mb-1 "></span><b class="text-dark"> Key<span class="text-muted">
                                    Pass</span></b></h5>
                        <p class="social mt-md-3 mt-2"> <span><i class="fa fa-facebook " aria-hidden="true"></i></span>
                            <span><i class="fa fa-linkedin" aria-hidden="true"></i></span> <span><i
                                    class="fa fa-twitter" aria-hidden="true"></i></span> </p>
                        <small class="copy-rights cursor-pointer">&#9400; 2019 EasyGo Digital Technologies</small><br>
                        <small>Copyright.All Rights Resered. </small>

                    </div>
                    <div class="col-md-3 col-12  my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Our Solution</li>
                            <li>Intergrated Security Platform</li>
                            <li>Core Features</li>
                            <li>Product Features</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Your needs</li>
                            <li>Intergrated Security Platform</li>
                            <li>Core Features</li>
                            <li>Product Features</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-3 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">Offer</li>
                            <li>Intergrated Security Platform</li>
                            <li>Core Features</li>
                            <li>Product Features</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>