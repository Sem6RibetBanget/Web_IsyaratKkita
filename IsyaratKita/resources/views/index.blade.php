<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IsyaratKita: Sign Language Learning Platform</title>
    <meta name="description" content="Prism is a beautiful Bootstrap 4 template for open-source landing pages."/>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=K2D:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

</head>
<body>

<!--Header Section-->
<section class="bg-gradient pt-5 pb-6">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                <div class="heading-brand">IsyaratKita</div>
                <a href="https://prismjs.com/download.html" class="btn btn-dark" target="_blank">Download</a>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-8 mx-auto text-center">
                <h1>IsyaratKita: Sign Language Learning Platform</h1>
                <p class="lead mb-5">IsyaratKita is a children-friendly application that can help deaf children learn sign language. This project includes an AI feature that uses a camera to detect sign language, allowing children to interact and be creative with it. This feature encourages children to demonstrate their sign language learning. Our project specifically uses the Indonesian sign language standard called BISINDO.</p>
                <a href="https://github.com/LeaVerou/prism/" class="btn btn-success svg-icon">
                    <em class="mr-2" data-feather="github"></em>
                    Contribute
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9 mx-auto">
            <div class="code-window">
            <div class="dots">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                        </div>
                        <h1>Our Model Demo</h1>
                <div id="webcam-window" class="webcam-window"></div>
                <p class="lead mb-5">IsyaratKita Sign Language detection has been trained over 13.000 images to 
                    detect BISNDO alphabet image. We look forward to improve this model into video recognition which
                    can detect words in the future. Try it out yourself!
                </p>
                <div class="col-md-8 mx-auto text-center">
                <video autoplay playsinline muted id="wc" width="500" height="400"></video>
                <div class="col-md-8 mx-auto text-center">
	<button type="button" id="startPredicting" onclick="startPredicting()" >Start Predicting</button>
     <h1><div id="prediction"></div></h1>             
	
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"> </script>
<script src="{{ asset('js/webcam.js') }}"></script>
<script src="{{ asset('js/rps-dataset.js') }}"></script>

<script src="{{ asset('js/index.js') }}"></script>


<!--Features Section-->
<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">Features of <span class="text-success">IsyaratKita</span></h2>
                <div class="row feature-grid">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="check-circle" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                BISINDO alphabet detection
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="command" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Children friendly
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="feather" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Free to download
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="zap" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Open-source sign language API services
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="git-pull-request" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Big developer comunity
                            </div>
                        </div>
                    </div><div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="droplet" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Sign language video recognition (coming soon)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Used By Section-->
<section class="pb-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">Used by Thousands of Companies</h2>
                <p class="lead text-muted">Prism.js is used on several websites, small and large.</p>
                <div class="mt-5 d-flex flex-row justify-content-md-between flex-wrap press-icons">
                    <img src="https://logo.clearbit.com/google.com?size=60" alt="Google"/>
                    <img src="https://logo.clearbit.com/twitter.com?size=60" alt="Twitter"/>
                    <img src="https://logo.clearbit.com/vuejs.org?size=60" alt="Veu.js"/>
                    <img src="https://logo.clearbit.com/stripe.com?size=60" alt="Stripe"/>
                </div>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://prismjs.com/test.html">Test Drive</a></li>
                    <li class="list-inline-item"><a href="https://prismjs.com/extending.html">API Docs</a></li>
                    <li class="list-inline-item"><a href="https://github.com/LeaVerou/prism/">Fork IsyaratKita on GitHub</a></li>
                </ul>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-4 mx-auto text-muted text-center small-xl">
                &copy; 2019 Prism - All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
