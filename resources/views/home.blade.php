<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search Api</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="techie/img/favicon.png" rel="icon"> -->
  <!-- <link href="techie/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="techie/vendor/aos/aos.css" rel="stylesheet">
  <link href="techie/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="techie/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="techie/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="techie/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="techie/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Template Main CSS File -->
  <link href="techie/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.1.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="javascript:void()">Search Api</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="techie/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#integrations">Integrations</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#usecase">Use Cases</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Document</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://docs.dataforseo.com/v3/serp/google/overview/?php" target="_blank" >Google Search Api</a></li>
              <li><a href="#">Playground</a></li>
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a class="getstarted" href="{{url('signin')}}">Sign In</a></li>
          <li><a class="getstarted" href="{{url('signup')}}">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Google Search API</h1>
          <h2>Scrape Google and other search engines from our fast, easy, and complete API.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="techie/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="integrations" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Easy Integration</h2>
        </div>

        <div class="codeWrapper">
          <div class="codeHeader">
            <div class="codeType">
              <i class="fa fa-code"></i>&nbsp;&nbsp;
              Get
            </div>
          </div>
          <div class="codeBody">
            <pre><code class="" id="">https://serpapi.com/search.<span class="token keyword">json</span>?q=<span class="token function">Coffee</span>&amp;location=<span class="token function">Austin%2C+Texas%2C+United+States</span>&amp;hl=<span class="token function">en</span>&amp;gl=<span class="token function">us</span>&amp;google_domain=<span class="token function">google.com</span>&amp;api_key=<span class="token function">a216f4b385baeaec2dbb731b987be2e2f525411ff28ef338e1ecc10099dbfbd4</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre>
          </div>
        </div>
        <br>
        <p class="text-center">Or by using one of our libraries in your preferred language:</p>
        <div class="codeWrapper">
          <div class="codeHeader">
            <div class="codeType">
              <i class="fa fa-code"></i>&nbsp;&nbsp;
              Code to integrate
            </div>
            <div class="codeNav">
              <span>|</span>
              <button type="button" value="curl" class="">cURL</button>
              <button type="button" value="ruby" class="active-lang">Ruby</button>
              <button type="button" value="python" class="">Python</button>
              <button type="button" value="node" class="">Node.js</button>
              <button type="button" value="php" class="">PHP</button>
              <button type="button" value="dotnet" class="">.NET</button>
              <button type="button" value="java" class="">Java</button>
              <button type="button" value="go" class="">Go</button>
              <button type="button" value="sheet" class="">Google Sheets</button>
            </div>
          </div>
          <div class="codeBody multiPre">

  <pre class="d-hidden curl"><code class="  language-bash" id="language-bash"><span class="token function">curl</span> --get https://serpapi.com/search <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">q</span><span class="token operator">=</span><span class="token string">"Coffee"</span> <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">location</span><span class="token operator">=</span><span class="token string">"Austin%2C+Texas%2C+United+States"</span> <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">hl</span><span class="token operator">=</span><span class="token string">"en"</span> <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">gl</span><span class="token operator">=</span><span class="token string">"us"</span> <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">google_domain</span><span class="token operator">=</span><span class="token string">"google.com"</span> <span class="token punctuation">\</span>
  -d <span class="token assign-left variable">api_key</span><span class="token operator">=</span><span class="token string">"secret_api_key"</span>
  <span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden ruby"><code class=" language-ruby" id="language-ruby"><span class="token keyword">require</span> <span class="token string">'google_search_results'</span> 
  params <span class="token operator">=</span> <span class="token punctuation">{</span>
  q<span class="token punctuation">:</span> <span class="token string">"Coffee"</span><span class="token punctuation">,</span>
  location<span class="token punctuation">:</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">,</span>
  hl<span class="token punctuation">:</span> <span class="token string">"en"</span><span class="token punctuation">,</span>
  gl<span class="token punctuation">:</span> <span class="token string">"us"</span><span class="token punctuation">,</span>
  google_domain<span class="token punctuation">:</span> <span class="token string">"google.com"</span><span class="token punctuation">,</span>
  api_key<span class="token punctuation">:</span> <span class="token string">"secret_api_key"</span>
  <span class="token punctuation">}</span>
  search <span class="token operator">=</span> <span class="token constant">GoogleSearch</span><span class="token punctuation">.</span><span class="token keyword">new</span><span class="token punctuation">(</span>params<span class="token punctuation">)</span>
  hash_results <span class="token operator">=</span> client<span class="token punctuation">.</span>get_hash
  <span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden python"><code class="  language-python" id="language-python"><span class="token keyword">from</span> serpapi <span class="token keyword">import</span> GoogleSearch
  params <span class="token operator">=</span> <span class="token punctuation">{</span>
  <span class="token string">"q"</span><span class="token punctuation">:</span> <span class="token string">"Coffee"</span><span class="token punctuation">,</span>
  <span class="token string">"location"</span><span class="token punctuation">:</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">,</span>
  <span class="token string">"hl"</span><span class="token punctuation">:</span> <span class="token string">"en"</span><span class="token punctuation">,</span>
  <span class="token string">"gl"</span><span class="token punctuation">:</span> <span class="token string">"us"</span><span class="token punctuation">,</span>
  <span class="token string">"google_domain"</span><span class="token punctuation">:</span> <span class="token string">"google.com"</span><span class="token punctuation">,</span>
  <span class="token string">"api_key"</span><span class="token punctuation">:</span> <span class="token string">"secret_api_key"</span>
  <span class="token punctuation">}</span>
  search <span class="token operator">=</span> GoogleSearch<span class="token punctuation">(</span>params<span class="token punctuation">)</span>
  results <span class="token operator">=</span> search<span class="token punctuation">.</span>get_dict<span class="token punctuation">(</span><span class="token punctuation">)</span>
  <span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden node"><code class=" language-javascript" id="language-javascript"><span class="token keyword">const</span> <span class="token maybe-class-name">SerpApi</span> <span class="token operator">=</span> <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'google-search-results-nodejs'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token keyword">const</span> search <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">SerpApi<span class="token punctuation">.</span>GoogleSearch</span><span class="token punctuation">(</span><span class="token string">"secret_api_key"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token keyword">const</span> params <span class="token operator">=</span> <span class="token punctuation">{</span>
    q<span class="token operator">:</span> <span class="token string">"Coffee"</span><span class="token punctuation">,</span>
    <span class="token dom variable">location</span><span class="token operator">:</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">,</span>
    hl<span class="token operator">:</span> <span class="token string">"en"</span><span class="token punctuation">,</span>
    gl<span class="token operator">:</span> <span class="token string">"us"</span><span class="token punctuation">,</span>
    google_domain<span class="token operator">:</span> <span class="token string">"google.com"</span>
  <span class="token punctuation">}</span><span class="token punctuation">;</span>
  <span class="token keyword">const</span> <span class="token function-variable function">callback</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">data</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token console class-name">console</span><span class="token punctuation">.</span><span class="token method function property-access">log</span><span class="token punctuation">(</span>data<span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span><span class="token punctuation">;</span>
  <span class="token comment">// Show result as JSON</span>
  search<span class="token punctuation">.</span><span class="token method function property-access">json</span><span class="token punctuation">(</span>params<span class="token punctuation">,</span> callback<span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden php"><code class=" language-php" id="language-php"><span class="token keyword">require</span> <span class="token single-quoted-string string">'path/to/google_search_results'</span><span class="token punctuation">;</span>
  <span class="token variable">$query</span> <span class="token operator">=</span> <span class="token punctuation">[</span>
  <span class="token double-quoted-string string">"q"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"Coffee"</span><span class="token punctuation">,</span>
  <span class="token double-quoted-string string">"location"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"Austin, Texas, United States"</span><span class="token punctuation">,</span>
  <span class="token double-quoted-string string">"hl"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"en"</span><span class="token punctuation">,</span>
  <span class="token double-quoted-string string">"gl"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"us"</span><span class="token punctuation">,</span>
  <span class="token double-quoted-string string">"google_domain"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"google.com"</span><span class="token punctuation">,</span>
  <span class="token double-quoted-string string">"api_key"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token double-quoted-string string">"secret_api_key"</span>
  <span class="token punctuation">]</span><span class="token punctuation">;</span>
  <span class="token variable">$search</span> <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">GoogleSearch</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token variable">$results</span> <span class="token operator">=</span> <span class="token variable">$search</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">json</span><span class="token punctuation">(</span><span class="token variable">$query</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden dotnet"><code class=" language-dotnet" id="language-dotnet"><span class="token class-name">String</span> apiKey <span class="token operator">=</span> <span class="token string">"secret_api_key"</span><span class="token punctuation">;</span>
  <span class="token class-name">Hashtable</span> ht <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token constructor-invocation class-name">Hashtable</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  ht<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"q"</span><span class="token punctuation">,</span> <span class="token string">"Coffee"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  ht<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"location"</span><span class="token punctuation">,</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  ht<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"hl"</span><span class="token punctuation">,</span> <span class="token string">"en"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  ht<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"gl"</span><span class="token punctuation">,</span> <span class="token string">"us"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  ht<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"google_domain"</span><span class="token punctuation">,</span> <span class="token string">"google.com"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token keyword">try</span>
  <span class="token punctuation">{</span>
    <span class="token class-name">GoogleSearch</span> search <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token constructor-invocation class-name">GoogleSearch</span><span class="token punctuation">(</span>ht<span class="token punctuation">,</span> apiKey<span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token class-name">JObject</span> data <span class="token operator">=</span> search<span class="token punctuation">.</span><span class="token function">GetJson</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token class-name">JArray</span> results <span class="token operator">=</span> <span class="token punctuation">(</span>JArray<span class="token punctuation">)</span>data<span class="token punctuation">[</span><span class="token string">"organic_results"</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
    <span class="token keyword">foreach</span> <span class="token punctuation">(</span><span class="token class-name">JObject</span> result <span class="token keyword">in</span> results<span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
      Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Found: "</span> <span class="token operator">+</span> result<span class="token punctuation">[</span><span class="token string">"title"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>
  <span class="token keyword">catch</span> <span class="token punctuation">(</span><span class="token class-name">SerpApiClientException</span> ex<span class="token punctuation">)</span>
  <span class="token punctuation">{</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Exception:"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>ex<span class="token punctuation">.</span><span class="token function">ToString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden java"><code class=" language-java" id="language-java"><span class="token class-name">Map</span><span class="token generics"><span class="token punctuation">&lt;</span><span class="token class-name">String</span><span class="token punctuation">,</span> <span class="token class-name">String</span><span class="token punctuation">&gt;</span></span> parameter <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">HashMap</span><span class="token generics"><span class="token punctuation">&lt;</span><span class="token punctuation">&gt;</span></span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"q"</span><span class="token punctuation">,</span> <span class="token string">"Coffee"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"location"</span><span class="token punctuation">,</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"hl"</span><span class="token punctuation">,</span> <span class="token string">"en"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"gl"</span><span class="token punctuation">,</span> <span class="token string">"us"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"google_domain"</span><span class="token punctuation">,</span> <span class="token string">"google.com"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  parameter<span class="token punctuation">.</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token string">"api_key"</span><span class="token punctuation">,</span> <span class="token string">"secret_api_key"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token class-name">GoogleSearch</span> search <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">GoogleSearch</span><span class="token punctuation">(</span>parameter<span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token keyword">try</span>
  <span class="token punctuation">{</span>
    <span class="token class-name">JsonObject</span> results <span class="token operator">=</span> search<span class="token punctuation">.</span><span class="token function">getJson</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
  <span class="token keyword">catch</span> <span class="token punctuation">(</span><span class="token class-name">SerpApiClientException</span> ex<span class="token punctuation">)</span>
  <span class="token punctuation">{</span>
    <span class="token class-name">Console</span><span class="token punctuation">.</span><span class="token class-name">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Exception:"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token class-name">Console</span><span class="token punctuation">.</span><span class="token class-name">WriteLine</span><span class="token punctuation">(</span>ex<span class="token punctuation">.</span><span class="token class-name">ToString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden go"><code class=" language-go" id="language-go"><span class="token keyword">package</span> main
  <span class="token keyword">import</span> <span class="token punctuation">(</span>
    g <span class="token string">"github.com/serpapi/google-search-results-golang"</span>
  <span class="token punctuation">)</span>
  <span class="token keyword">func</span> <span class="token function">main</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span>
    parameter <span class="token operator">:=</span> <span class="token keyword">map</span><span class="token punctuation">[</span><span class="token builtin">string</span><span class="token punctuation">]</span><span class="token builtin">string</span><span class="token punctuation">{</span>
      <span class="token string">"q"</span><span class="token punctuation">:</span> <span class="token string">"Coffee"</span><span class="token punctuation">,</span>
      <span class="token string">"location"</span><span class="token punctuation">:</span> <span class="token string">"Austin, Texas, United States"</span><span class="token punctuation">,</span>
      <span class="token string">"hl"</span><span class="token punctuation">:</span> <span class="token string">"en"</span><span class="token punctuation">,</span>
      <span class="token string">"gl"</span><span class="token punctuation">:</span> <span class="token string">"us"</span><span class="token punctuation">,</span>
      <span class="token string">"google_domain"</span><span class="token punctuation">:</span> <span class="token string">"google.com"</span><span class="token punctuation">,</span>
      <span class="token string">"api_key"</span><span class="token punctuation">:</span> <span class="token string">"secret_api_key"</span><span class="token punctuation">,</span>
    <span class="token punctuation">}</span>

    search <span class="token operator">:=</span> g<span class="token punctuation">.</span><span class="token function">NewGoogleSearch</span><span class="token punctuation">(</span>parameter<span class="token punctuation">,</span> <span class="token string">"secret_api_key"</span><span class="token punctuation">)</span>
    results<span class="token punctuation">,</span> err <span class="token operator">:=</span> search<span class="token punctuation">.</span><span class="token function">GetJSON</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">}</span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>

  <pre class="d-hidden sheet"><code class=" language-markup">Install SerpApi Google Sheets <a class="token md-link" href="https://gsuite.google.com/marketplace/app/serpapi_search_engine_results_and_ranks/562749385480" target="_blank">add-on</a>
Use the formula below

  =SERPAPI_RESULT("q=Coffee&location=Austin, Texas, United States&hl=en&gl=us&google_domain=google.com", "organic_results.0.title")
  </code></pre>

          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Advanced Features</h2>
          <p>Leverage our infrastructure (IPs across the globe, full browser cluster, and CAPTCHA solving technology), and exploit our structured SERP data in the way you want.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-time-five"></i>
              <h4>Real Time and Real Results</h4>
              <p>Each API request runs immediately – no waiting for results.<br><br>In addition, each API request runs in a full browser, and we'll even solve all CAPTCHAs. Mimicking completely what a human will do. This guarantees that you get what users truly see.
              </p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-location-plus"></i>
              <h4>Accurate Locations</h4>
              <p>Get Google results from anywhere in the world with our "location" parameter.<br><br>Serp Api uses Google’s geolocated, encrypted params and routes your request through the proxy server nearest to your desired location to ensure accuracy. Get locations at our locations endpoint.
              </p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-layer"></i>
              <h4>JSON Results</h4>
              <p>Regular organic results are available as well as Maps, Local, Stories, Shopping, Direct Answer, and Knowledge Graph.<br><br>Lots of structured data is available for each result, including links, addresses, tweets, prices, thumbnails, ratings, reviews, rich snippets, and more
              </p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-shield"></i>
              <h4>Legal US Shield</h4>
              <p>The crawling and parsing of public data is protected by the First Amendment of the United States Constitution. We value tremendously freedom of speech. We assume scraping and parsing liabilities for both domestic and foreign companies unless your usage is otherwise illegal. (Including but are not limited to: acts of cyber criminality, terrorism, pedopornography, denial of service attacks, and war crimes.)</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
            <img src="techie/img/features.svg" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="usecase" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Use Cases</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">SEO</a></h4>
              <p>SerpApi provides rankings and makes sense of organic search results and other search results for any domain, any keyword, any country, and any language for various search engines.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Local SEO</a></h4>
              <p>By bringing SERPs Local Pack and Maps results, SerpApi allows businesses to go Local in their research and seek reliable stats to base their local marketing decisions on.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Background Check Automation</a></h4>
              <p>Use SerpApi to pull up information for personal or company Background Checks. All in real-time. Used by banks, law firms and law enforcement departments, among others.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">AI Models</a></h4>
              <p>Search results data is the best source to build large dataset for Machine Learning models. SerpApi provides multiple APIs to make these data extraction easy.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">News Monitoring</a></h4>
              <p>By utilizing News results from various search engines, SerpApi will supply you with a valuable set of data to analyze News trends, predict the future based on patterns, and monitor mentions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Voice Assistant</a></h4>
              <p>Building a Voice Assistant from scratch is hard. SerpApi allows a blazing fast JSON access to direct answers and knowledge graph results.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Questions, get a quote, special needs, or just say hi.<br>
              We would love to hear from you!</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Techie</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="techie/vendor/aos/aos.js"></script>
  <script src="techie/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="techie/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="techie/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="techie/vendor/php-email-form/validate.js"></script>
  <script src="techie/vendor/purecounter/purecounter.js"></script>
  <script src="techie/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="techie/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(".ruby").show()

      $(".codeNav button").click(function() {
        $(".codeNav .active-lang").attr("class", '')

        const value = $(this).val()
        $(this).attr('class', 'active-lang')

        $(".multiPre pre").hide()
        $("."+ value).show()
      })
    })
  </script>

</body>

</html>