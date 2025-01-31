<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Maria Hony Company</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.39.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.39.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-categories-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="categories-management">
                    <a href="#categories-management">Categories management</a>
                </li>
                                    <ul id="tocify-subheader-categories-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="categories-management-GETapi-categories">
                                <a href="#categories-management-GETapi-categories">Get all categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-management-GETapi-categories--category_id-">
                                <a href="#categories-management-GETapi-categories--category_id-">Get specific category info.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-management-POSTapi-categories">
                                <a href="#categories-management-POSTapi-categories">Create new category (Admin)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-management-POSTapi-categories--category_id-">
                                <a href="#categories-management-POSTapi-categories--category_id-">Update specific category info.(Admin)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-management-DELETEapi-categories--category_id-">
                                <a href="#categories-management-DELETEapi-categories--category_id-">Delete category (Admin)</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-order-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="order-management">
                    <a href="#order-management">Order management</a>
                </li>
                                    <ul id="tocify-subheader-order-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="order-management-POSTapi-orders-make">
                                <a href="#order-management-POSTapi-orders-make">Create new order</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-products-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="products-management">
                    <a href="#products-management">Products management</a>
                </li>
                                    <ul id="tocify-subheader-products-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="products-management-GETapi-products">
                                <a href="#products-management-GETapi-products">Get all products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-management-GETapi-products--product_id-">
                                <a href="#products-management-GETapi-products--product_id-">Get a specific product info .</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-management-POSTapi-products">
                                <a href="#products-management-POSTapi-products">Create new product (Admin).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-management-POSTapi-products--product_id-">
                                <a href="#products-management-POSTapi-products--product_id-">Update specific product (Admin)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-management-DELETEapi-products--product_id-">
                                <a href="#products-management-DELETEapi-products--product_id-">Delete product (Admin)</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-POSTapi-users-login">
                                <a href="#user-management-POSTapi-users-login">User login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-users-signup">
                                <a href="#user-management-POSTapi-users-signup">User sign up (Create new account)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-users-request-otp-code">
                                <a href="#user-management-POSTapi-users-request-otp-code">Request OTP code to reset password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-users-reset-password">
                                <a href="#user-management-POSTapi-users-reset-password">Reset password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETapi-users">
                                <a href="#user-management-GETapi-users">Get all users (Just admin can do this request)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETapi-users--user_id-">
                                <a href="#user-management-GETapi-users--user_id-">Get specifc user info.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-users--user_id-">
                                <a href="#user-management-POSTapi-users--user_id-">Update user info</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-DELETEapi-users--user_id-">
                                <a href="#user-management-DELETEapi-users--user_id-">Delete user</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 31, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>API for Maria Honey Company</p>
<aside>
    <strong>Base URL</strong>: <code>https://maria-api-production.up.railway.app/</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="categories-management">Categories management</h1>

    <p>APIs for managing categories</p>

                                <h2 id="categories-management-GETapi-categories">Get all categories</h2>

<p>
</p>



<span id="example-requests-GETapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;categories&quot;: [
            {
                &quot;category_id&quot;: 2,
                &quot;category_name&quot;: &quot;porro&quot;
            },
            {
                &quot;category_id&quot;: 4,
                &quot;category_name&quot;: &quot;qui&quot;
            },
            {
                &quot;category_id&quot;: 5,
                &quot;category_name&quot;: &quot;nobis&quot;
            },
            {
                &quot;category_id&quot;: 6,
                &quot;category_name&quot;: &quot;eaque&quot;
            },
            {
                &quot;category_id&quot;: 7,
                &quot;category_name&quot;: &quot;dolore&quot;
            },
            {
                &quot;category_id&quot;: 8,
                &quot;category_name&quot;: &quot;numquam&quot;
            },
            {
                &quot;category_id&quot;: 9,
                &quot;category_name&quot;: &quot;et&quot;
            },
            {
                &quot;category_id&quot;: 10,
                &quot;category_name&quot;: &quot;consequuntur&quot;
            },
            {
                &quot;category_id&quot;: 11,
                &quot;category_name&quot;: &quot;non&quot;
            },
            {
                &quot;category_id&quot;: 12,
                &quot;category_name&quot;: &quot;asperiores&quot;
            },
            {
                &quot;category_id&quot;: 13,
                &quot;category_name&quot;: &quot;voluptatem&quot;
            },
            {
                &quot;category_id&quot;: 14,
                &quot;category_name&quot;: &quot;dolor&quot;
            },
            {
                &quot;category_id&quot;: 15,
                &quot;category_name&quot;: &quot;molestiae&quot;
            },
            {
                &quot;category_id&quot;: 16,
                &quot;category_name&quot;: &quot;aut&quot;
            },
            {
                &quot;category_id&quot;: 17,
                &quot;category_name&quot;: &quot;neque&quot;
            },
            {
                &quot;category_id&quot;: 18,
                &quot;category_name&quot;: &quot;non&quot;
            },
            {
                &quot;category_id&quot;: 19,
                &quot;category_name&quot;: &quot;consequatur&quot;
            },
            {
                &quot;category_id&quot;: 20,
                &quot;category_name&quot;: &quot;ipsam&quot;
            },
            {
                &quot;category_id&quot;: 21,
                &quot;category_name&quot;: &quot;et&quot;
            },
            {
                &quot;category_id&quot;: 22,
                &quot;category_name&quot;: &quot;accusamus&quot;
            },
            {
                &quot;category_id&quot;: 23,
                &quot;category_name&quot;: &quot;accusamus&quot;
            },
            {
                &quot;category_id&quot;: 24,
                &quot;category_name&quot;: &quot;voluptas&quot;
            },
            {
                &quot;category_id&quot;: 25,
                &quot;category_name&quot;: &quot;dolor&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories" data-method="GET"
      data-path="api/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories"
                    onclick="tryItOut('GETapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories"
                    onclick="cancelTryOut('GETapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="categories-management-GETapi-categories--category_id-">Get specific category info.</h2>

<p>
</p>



<span id="example-requests-GETapi-categories--category_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/categories/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/categories/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--category_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;category_id&quot;: 2,
        &quot;category_name&quot;: &quot;porro&quot;,
        &quot;products&quot;: [
            {
                &quot;product_id&quot;: 19,
                &quot;prodcut_name&quot;: &quot;repellendus&quot;,
                &quot;cost&quot;: 88058,
                &quot;description&quot;: &quot;Consequuntur voluptas et aspernatur sit. Magni qui doloremque possimus ut sequi. Totam a occaecati assumenda est. Veritatis voluptatum voluptatum earum quo. Placeat nihil a rem in.&quot;,
                &quot;discount&quot;: 98.36,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 55,
                &quot;prodcut_name&quot;: &quot;incidunt&quot;,
                &quot;cost&quot;: 71021,
                &quot;description&quot;: &quot;Nihil voluptates soluta maxime in sequi occaecati neque. Alias dolores earum est et molestiae omnis. Ut quis alias illum et libero. Qui sit ratione officiis consequatur commodi aut eum.&quot;,
                &quot;discount&quot;: 74.39,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 79,
                &quot;prodcut_name&quot;: &quot;facilis&quot;,
                &quot;cost&quot;: 55844,
                &quot;description&quot;: &quot;Similique ipsa qui et quia. Aut officia voluptates reprehenderit repellat eum quia illo.&quot;,
                &quot;discount&quot;: 92.04,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 92,
                &quot;prodcut_name&quot;: &quot;officiis&quot;,
                &quot;cost&quot;: 36881,
                &quot;description&quot;: &quot;Ratione ab qui harum eos. Totam et eveniet eaque et eaque saepe possimus cupiditate. Dolores molestiae sunt sed incidunt.&quot;,
                &quot;discount&quot;: 86.85,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 99,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 11633,
                &quot;description&quot;: &quot;Sed laboriosam eaque nihil vel dicta. Eos aut officia rerum consectetur. Sint et est eveniet et qui beatae. Aut sed et laudantium voluptas et ut.&quot;,
                &quot;discount&quot;: 56.77,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--category_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--category_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--category_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--category_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--category_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--category_id-" data-method="GET"
      data-path="api/categories/{category_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--category_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--category_id-"
                    onclick="tryItOut('GETapi-categories--category_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--category_id-"
                    onclick="cancelTryOut('GETapi-categories--category_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--category_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{category_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="GETapi-categories--category_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="categories-management-POSTapi-categories">Create new category (Admin)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_name\": \"qui\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_name": "qui"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-categories">
</span>
<span id="execution-results-POSTapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-categories" data-method="POST"
      data-path="api/categories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-categories"
                    onclick="tryItOut('POSTapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-categories"
                    onclick="cancelTryOut('POSTapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_name"                data-endpoint="POSTapi-categories"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
        </form>

                    <h2 id="categories-management-POSTapi-categories--category_id-">Update specific category info.(Admin)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-categories--category_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/categories/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/categories/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-categories--category_id-">
</span>
<span id="execution-results-POSTapi-categories--category_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-categories--category_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories--category_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-categories--category_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories--category_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-categories--category_id-" data-method="POST"
      data-path="api/categories/{category_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories--category_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-categories--category_id-"
                    onclick="tryItOut('POSTapi-categories--category_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-categories--category_id-"
                    onclick="cancelTryOut('POSTapi-categories--category_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-categories--category_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/categories/{category_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="POSTapi-categories--category_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_category_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_category_name"                data-endpoint="POSTapi-categories--category_id-"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="categories-management-DELETEapi-categories--category_id-">Delete category (Admin)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-categories--category_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://maria-api-production.up.railway.app/api/categories/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/categories/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-categories--category_id-">
</span>
<span id="execution-results-DELETEapi-categories--category_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-categories--category_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-categories--category_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-categories--category_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-categories--category_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-categories--category_id-" data-method="DELETE"
      data-path="api/categories/{category_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-categories--category_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-categories--category_id-"
                    onclick="tryItOut('DELETEapi-categories--category_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-categories--category_id-"
                    onclick="cancelTryOut('DELETEapi-categories--category_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-categories--category_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/categories/{category_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-categories--category_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="DELETEapi-categories--category_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>2</code></p>
            </div>
                    </form>

                <h1 id="order-management">Order management</h1>

    <p>APIs for managing orders</p>

                                <h2 id="order-management-POSTapi-orders-make">Create new order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-orders-make">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/orders/make" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/orders/make"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-orders-make">
</span>
<span id="execution-results-POSTapi-orders-make" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-orders-make"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-make"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-orders-make" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-make">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-orders-make" data-method="POST"
      data-path="api/orders/make"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-make', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-orders-make"
                    onclick="tryItOut('POSTapi-orders-make');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-orders-make"
                    onclick="cancelTryOut('POSTapi-orders-make');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-orders-make"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/orders/make</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-orders-make"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-orders-make"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="products-management">Products management</h1>

    <p>APIs for managing products</p>

                                <h2 id="products-management-GETapi-products">Get all products</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;products&quot;: [
            {
                &quot;product_id&quot;: 2,
                &quot;prodcut_name&quot;: &quot;cumque&quot;,
                &quot;cost&quot;: 87379,
                &quot;description&quot;: &quot;Tempore illo possimus sunt sed placeat sed. Commodi velit amet labore ratione eos modi sit ea. Quo dignissimos sit provident tempore voluptatem et ut.&quot;,
                &quot;discount&quot;: 35.07,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 3,
                &quot;prodcut_name&quot;: &quot;blanditiis&quot;,
                &quot;cost&quot;: 32494,
                &quot;description&quot;: &quot;Aut praesentium esse consequatur aut illo sed velit. Sequi at et aut ea qui et. Est velit pariatur non dolor quae ex voluptas dolorem. Quis ipsam sunt saepe vel aut minima repellat dolores.&quot;,
                &quot;discount&quot;: 57.41,
                &quot;category_id&quot;: 17,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 4,
                &quot;prodcut_name&quot;: &quot;dolores&quot;,
                &quot;cost&quot;: 88065,
                &quot;description&quot;: &quot;Numquam sapiente necessitatibus dolores vero et officiis et. Dolor doloribus sint cumque ipsa alias. Deserunt ut eaque est qui quia et. Temporibus et asperiores vel sint.&quot;,
                &quot;discount&quot;: 13.78,
                &quot;category_id&quot;: 20,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 5,
                &quot;prodcut_name&quot;: &quot;tempore&quot;,
                &quot;cost&quot;: 89181,
                &quot;description&quot;: &quot;Sunt sapiente quia ut et optio. Corporis earum omnis enim similique voluptatem nulla. Ut et quo et voluptatum doloribus. Atque quis commodi exercitationem placeat corporis incidunt.&quot;,
                &quot;discount&quot;: 64.75,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 6,
                &quot;prodcut_name&quot;: &quot;exercitationem&quot;,
                &quot;cost&quot;: 89814,
                &quot;description&quot;: &quot;Incidunt est illo et possimus debitis sit quisquam. Sit recusandae numquam quo reprehenderit illum enim eos. Voluptate asperiores iste ut quis ipsam.&quot;,
                &quot;discount&quot;: 43.37,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 7,
                &quot;prodcut_name&quot;: &quot;voluptate&quot;,
                &quot;cost&quot;: 15386,
                &quot;description&quot;: &quot;Et iste quia sunt vero rerum. Non expedita facere voluptatem. In in eius dolore excepturi molestiae et consequuntur. Et architecto rerum tenetur velit. Quia recusandae labore ea sit atque.&quot;,
                &quot;discount&quot;: 8.39,
                &quot;category_id&quot;: 25,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 8,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 28771,
                &quot;description&quot;: &quot;Et quia velit commodi non et possimus hic. Incidunt ducimus doloremque odio sed est ab possimus. Et suscipit facilis atque consequatur ipsum sed.&quot;,
                &quot;discount&quot;: 45.56,
                &quot;category_id&quot;: 25,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 9,
                &quot;prodcut_name&quot;: &quot;perspiciatis&quot;,
                &quot;cost&quot;: 72095,
                &quot;description&quot;: &quot;Fuga molestiae veniam nostrum voluptas. Impedit eius ut blanditiis fugit earum magnam. Voluptates temporibus enim ratione quia molestiae. Non adipisci velit molestiae sapiente magni fugiat.&quot;,
                &quot;discount&quot;: 86.36,
                &quot;category_id&quot;: 23,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 10,
                &quot;prodcut_name&quot;: &quot;inventore&quot;,
                &quot;cost&quot;: 25080,
                &quot;description&quot;: &quot;Accusantium consectetur beatae molestiae blanditiis. Iure rerum ea consectetur et repudiandae sit doloremque. Exercitationem voluptatem non ad sed quis tempore.&quot;,
                &quot;discount&quot;: 27.26,
                &quot;category_id&quot;: 19,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 11,
                &quot;prodcut_name&quot;: &quot;totam&quot;,
                &quot;cost&quot;: 65194,
                &quot;description&quot;: &quot;Veniam ut saepe libero fugiat. Voluptatum esse perspiciatis quam recusandae alias placeat. Placeat ut aut ad perferendis. Non neque corporis porro quas error ut aliquid odit.&quot;,
                &quot;discount&quot;: 82.83,
                &quot;category_id&quot;: 15,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 13,
                &quot;prodcut_name&quot;: &quot;cupiditate&quot;,
                &quot;cost&quot;: 87557,
                &quot;description&quot;: &quot;Numquam excepturi harum distinctio similique. Dolorem ab voluptate accusamus molestiae voluptatem eos. Ut ea quibusdam consectetur omnis ex dolores voluptatem.&quot;,
                &quot;discount&quot;: 41.45,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 15,
                &quot;prodcut_name&quot;: &quot;eveniet&quot;,
                &quot;cost&quot;: 74415,
                &quot;description&quot;: &quot;Vero aut et possimus consequuntur ad doloribus. Harum voluptas et reiciendis porro molestiae ipsam. Temporibus molestias nihil inventore aperiam nihil quae.&quot;,
                &quot;discount&quot;: 57.89,
                &quot;category_id&quot;: 14,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 16,
                &quot;prodcut_name&quot;: &quot;sit&quot;,
                &quot;cost&quot;: 77296,
                &quot;description&quot;: &quot;Vitae molestias odit accusantium adipisci. Est alias voluptas et id ipsam veritatis voluptates maiores. Explicabo illo omnis dolor occaecati laboriosam officia.&quot;,
                &quot;discount&quot;: 51.66,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 17,
                &quot;prodcut_name&quot;: &quot;est&quot;,
                &quot;cost&quot;: 31668,
                &quot;description&quot;: &quot;Animi dolor porro labore nihil. Perspiciatis qui laborum sunt vitae itaque. Id enim est autem aut quisquam accusamus minima error.&quot;,
                &quot;discount&quot;: 13.47,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 18,
                &quot;prodcut_name&quot;: &quot;laborum&quot;,
                &quot;cost&quot;: 71426,
                &quot;description&quot;: &quot;Quis porro quia explicabo. Deleniti dolorem non dolores non cumque et a voluptas. Quia ipsa laboriosam optio sint et quia.&quot;,
                &quot;discount&quot;: 53.28,
                &quot;category_id&quot;: 14,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 19,
                &quot;prodcut_name&quot;: &quot;repellendus&quot;,
                &quot;cost&quot;: 88058,
                &quot;description&quot;: &quot;Consequuntur voluptas et aspernatur sit. Magni qui doloremque possimus ut sequi. Totam a occaecati assumenda est. Veritatis voluptatum voluptatum earum quo. Placeat nihil a rem in.&quot;,
                &quot;discount&quot;: 98.36,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 20,
                &quot;prodcut_name&quot;: &quot;tenetur&quot;,
                &quot;cost&quot;: 93582,
                &quot;description&quot;: &quot;Quia nostrum mollitia quisquam in voluptates consequatur. Iure in odit recusandae qui. Sint fugit quibusdam expedita rerum impedit aperiam.&quot;,
                &quot;discount&quot;: 15.53,
                &quot;category_id&quot;: 15,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 21,
                &quot;prodcut_name&quot;: &quot;provident&quot;,
                &quot;cost&quot;: 92100,
                &quot;description&quot;: &quot;Numquam nobis molestiae aut nam quisquam quia. Hic incidunt et et quis molestias temporibus ipsa. Commodi laborum illo blanditiis adipisci.&quot;,
                &quot;discount&quot;: 22.65,
                &quot;category_id&quot;: 17,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 22,
                &quot;prodcut_name&quot;: &quot;nemo&quot;,
                &quot;cost&quot;: 97265,
                &quot;description&quot;: &quot;Aspernatur voluptatibus qui officia illo aut. Commodi delectus aut cum non. Non quo amet eaque dignissimos cum aperiam ut.&quot;,
                &quot;discount&quot;: 32.68,
                &quot;category_id&quot;: 24,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 23,
                &quot;prodcut_name&quot;: &quot;reiciendis&quot;,
                &quot;cost&quot;: 29395,
                &quot;description&quot;: &quot;Nobis maiores sequi corporis autem ut est. Porro explicabo totam numquam voluptates voluptas. Odio ipsam officia ipsa deserunt. Perspiciatis et doloremque inventore asperiores.&quot;,
                &quot;discount&quot;: 56.15,
                &quot;category_id&quot;: 23,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 24,
                &quot;prodcut_name&quot;: &quot;aperiam&quot;,
                &quot;cost&quot;: 24409,
                &quot;description&quot;: &quot;Ea fuga nulla suscipit quo. Velit possimus veritatis sapiente. Ipsam eaque dolores hic ea et libero.&quot;,
                &quot;discount&quot;: 86.12,
                &quot;category_id&quot;: 14,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 25,
                &quot;prodcut_name&quot;: &quot;animi&quot;,
                &quot;cost&quot;: 58011,
                &quot;description&quot;: &quot;Fugiat cum dolores labore. Inventore odio rem aliquam. Voluptatem debitis accusamus eius quia. Hic aut alias rerum est.&quot;,
                &quot;discount&quot;: 82.18,
                &quot;category_id&quot;: 12,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 26,
                &quot;prodcut_name&quot;: &quot;ut&quot;,
                &quot;cost&quot;: 58495,
                &quot;description&quot;: &quot;Dolores rerum impedit aut maxime non et. Reprehenderit nemo deserunt et voluptas voluptatem dolore aliquam. Quo iste aut cum. Nulla quia voluptates officiis dolor veritatis.&quot;,
                &quot;discount&quot;: 64.24,
                &quot;category_id&quot;: 7,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 27,
                &quot;prodcut_name&quot;: &quot;voluptatem&quot;,
                &quot;cost&quot;: 50503,
                &quot;description&quot;: &quot;Reiciendis illum iste dolores molestiae aspernatur facere eveniet. Quasi voluptatem totam aut sed saepe. Dolorum error ut ab occaecati minima dolorum dolores repellat.&quot;,
                &quot;discount&quot;: 46.76,
                &quot;category_id&quot;: 15,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 28,
                &quot;prodcut_name&quot;: &quot;expedita&quot;,
                &quot;cost&quot;: 99117,
                &quot;description&quot;: &quot;Corporis et delectus doloribus et ut. Et ex voluptatem perferendis suscipit. Doloribus aut hic fugit vero neque velit enim. Maiores corporis suscipit temporibus deleniti.&quot;,
                &quot;discount&quot;: 40.71,
                &quot;category_id&quot;: 13,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 29,
                &quot;prodcut_name&quot;: &quot;earum&quot;,
                &quot;cost&quot;: 89071,
                &quot;description&quot;: &quot;Voluptatem dolorem ea suscipit ut dicta. Voluptatum quia at officia natus eum. Adipisci est amet odit nulla voluptas. Ut qui occaecati quo perferendis suscipit sit et.&quot;,
                &quot;discount&quot;: 28.78,
                &quot;category_id&quot;: 23,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 30,
                &quot;prodcut_name&quot;: &quot;aut&quot;,
                &quot;cost&quot;: 76063,
                &quot;description&quot;: &quot;Vero exercitationem soluta ut et. Qui iusto in sed qui reiciendis. Debitis qui ipsam est et beatae. Quis et ab et nesciunt numquam.&quot;,
                &quot;discount&quot;: 66.01,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 31,
                &quot;prodcut_name&quot;: &quot;harum&quot;,
                &quot;cost&quot;: 9644,
                &quot;description&quot;: &quot;Omnis ipsa cum porro. Perspiciatis ut dolorum totam quia dignissimos quia. Quo odit quia in eum nobis nisi quia vitae. A voluptatum recusandae dolores quae quibusdam reprehenderit.&quot;,
                &quot;discount&quot;: 52.59,
                &quot;category_id&quot;: 15,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 32,
                &quot;prodcut_name&quot;: &quot;molestiae&quot;,
                &quot;cost&quot;: 82218,
                &quot;description&quot;: &quot;Tenetur quasi ut alias odio voluptas ut veritatis. Enim ut ut cumque molestias. Et qui magnam molestias non asperiores.&quot;,
                &quot;discount&quot;: 30.82,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 33,
                &quot;prodcut_name&quot;: &quot;ducimus&quot;,
                &quot;cost&quot;: 62701,
                &quot;description&quot;: &quot;Corporis voluptatem et doloribus. Maiores vero molestiae quod sed et. Aspernatur earum rerum iure eius corporis. Dicta quo tenetur minus ipsum vitae.&quot;,
                &quot;discount&quot;: 38.41,
                &quot;category_id&quot;: 13,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 34,
                &quot;prodcut_name&quot;: &quot;quis&quot;,
                &quot;cost&quot;: 18320,
                &quot;description&quot;: &quot;Ad consequatur dignissimos officia nesciunt. Aperiam alias ipsa minima laboriosam. Dolor voluptas autem est qui fugiat quasi tenetur.&quot;,
                &quot;discount&quot;: 7.32,
                &quot;category_id&quot;: 22,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 35,
                &quot;prodcut_name&quot;: &quot;non&quot;,
                &quot;cost&quot;: 96638,
                &quot;description&quot;: &quot;Voluptates blanditiis sit officiis maiores. Quod ab animi provident commodi. Debitis incidunt veniam qui aut dignissimos amet harum pariatur.&quot;,
                &quot;discount&quot;: 76.09,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 37,
                &quot;prodcut_name&quot;: &quot;eum&quot;,
                &quot;cost&quot;: 41757,
                &quot;description&quot;: &quot;Facere totam culpa numquam. Voluptatem nostrum quo voluptate nostrum et non. In voluptatem ut vitae eos voluptatibus dicta impedit. Id qui totam facilis eum autem voluptate omnis aliquam.&quot;,
                &quot;discount&quot;: 22.72,
                &quot;category_id&quot;: 13,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 38,
                &quot;prodcut_name&quot;: &quot;totam&quot;,
                &quot;cost&quot;: 11173,
                &quot;description&quot;: &quot;Praesentium est sint eos saepe et quis quo veniam. Porro molestiae neque suscipit assumenda. Qui qui laborum quibusdam dolorum itaque. Enim blanditiis incidunt iure eum voluptatem.&quot;,
                &quot;discount&quot;: 33.87,
                &quot;category_id&quot;: 20,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 39,
                &quot;prodcut_name&quot;: &quot;accusamus&quot;,
                &quot;cost&quot;: 44103,
                &quot;description&quot;: &quot;Aliquam iste totam repudiandae ut repellat voluptatibus. Esse et aliquam consequatur qui aut est dicta. Inventore cum culpa est eum molestiae placeat mollitia. In eius quos at alias mollitia.&quot;,
                &quot;discount&quot;: 16.76,
                &quot;category_id&quot;: 19,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 40,
                &quot;prodcut_name&quot;: &quot;cupiditate&quot;,
                &quot;cost&quot;: 62967,
                &quot;description&quot;: &quot;Nostrum deleniti dolore ducimus dolore sint. Aliquid hic consequuntur unde ipsam. Illo magni labore ab natus magni. Maiores atque eius dolorem.&quot;,
                &quot;discount&quot;: 29.12,
                &quot;category_id&quot;: 7,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 41,
                &quot;prodcut_name&quot;: &quot;aut&quot;,
                &quot;cost&quot;: 84004,
                &quot;description&quot;: &quot;Placeat aperiam nulla temporibus iusto labore iure. Voluptas voluptatum laudantium qui nobis quia.&quot;,
                &quot;discount&quot;: 22.88,
                &quot;category_id&quot;: 18,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 42,
                &quot;prodcut_name&quot;: &quot;impedit&quot;,
                &quot;cost&quot;: 5889,
                &quot;description&quot;: &quot;Voluptatem et voluptas cumque ut. Esse impedit sit consequatur nemo. Asperiores et reiciendis aliquid autem modi autem.&quot;,
                &quot;discount&quot;: 5.37,
                &quot;category_id&quot;: 25,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 45,
                &quot;prodcut_name&quot;: &quot;quas&quot;,
                &quot;cost&quot;: 2433,
                &quot;description&quot;: &quot;Molestiae consectetur non magnam sed aperiam ipsum eaque. Reprehenderit nam qui facilis ducimus sed.&quot;,
                &quot;discount&quot;: 84.48,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 46,
                &quot;prodcut_name&quot;: &quot;velit&quot;,
                &quot;cost&quot;: 86586,
                &quot;description&quot;: &quot;Molestiae facere laudantium temporibus et nobis fugit aut. Sed sunt velit dolores placeat nihil. Numquam dolorem voluptatibus quaerat provident itaque enim qui blanditiis.&quot;,
                &quot;discount&quot;: 89.44,
                &quot;category_id&quot;: 11,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 48,
                &quot;prodcut_name&quot;: &quot;molestiae&quot;,
                &quot;cost&quot;: 18596,
                &quot;description&quot;: &quot;Molestias tempora deserunt dolores earum. Deleniti libero ab perspiciatis soluta dolor vel. Veritatis iure facere ducimus consectetur temporibus autem fugit.&quot;,
                &quot;discount&quot;: 15.09,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 49,
                &quot;prodcut_name&quot;: &quot;vitae&quot;,
                &quot;cost&quot;: 62036,
                &quot;description&quot;: &quot;Iusto esse veritatis unde soluta ut veritatis sequi. Vel expedita necessitatibus eos reiciendis sed dignissimos ad. Nihil voluptas et sit est aut excepturi et. Vel maxime rem autem similique.&quot;,
                &quot;discount&quot;: 98.88,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 50,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 88349,
                &quot;description&quot;: &quot;Eum et repudiandae aut voluptatem quibusdam vel. Voluptatum sunt repudiandae est dolorem inventore voluptatibus. Odit qui et asperiores placeat.&quot;,
                &quot;discount&quot;: 94.83,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 51,
                &quot;prodcut_name&quot;: &quot;architecto&quot;,
                &quot;cost&quot;: 60087,
                &quot;description&quot;: &quot;Expedita enim nesciunt nihil. Velit sunt sit porro ullam in ipsam quis. Voluptas eum inventore nulla. Amet ullam omnis omnis reiciendis.&quot;,
                &quot;discount&quot;: 55.6,
                &quot;category_id&quot;: 23,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 52,
                &quot;prodcut_name&quot;: &quot;consequatur&quot;,
                &quot;cost&quot;: 43897,
                &quot;description&quot;: &quot;Est illo ab est dolores. Perspiciatis nobis dolorem voluptas fugit dolorem corporis sed maiores. Officiis recusandae commodi in autem. Vel voluptatem quo dolores et.&quot;,
                &quot;discount&quot;: 10.01,
                &quot;category_id&quot;: 20,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 53,
                &quot;prodcut_name&quot;: &quot;velit&quot;,
                &quot;cost&quot;: 28489,
                &quot;description&quot;: &quot;Laudantium est aut et rerum eius placeat provident. Sint illum veniam illum nam. Commodi soluta omnis odio est illum.&quot;,
                &quot;discount&quot;: 19.93,
                &quot;category_id&quot;: 7,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 54,
                &quot;prodcut_name&quot;: &quot;aut&quot;,
                &quot;cost&quot;: 31499,
                &quot;description&quot;: &quot;Sunt tempora eligendi beatae et aut. Sit modi possimus dignissimos corrupti consequatur voluptatem aperiam autem. Eius ullam error officiis sequi. Omnis placeat dicta placeat harum distinctio.&quot;,
                &quot;discount&quot;: 82.99,
                &quot;category_id&quot;: 15,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 55,
                &quot;prodcut_name&quot;: &quot;incidunt&quot;,
                &quot;cost&quot;: 71021,
                &quot;description&quot;: &quot;Nihil voluptates soluta maxime in sequi occaecati neque. Alias dolores earum est et molestiae omnis. Ut quis alias illum et libero. Qui sit ratione officiis consequatur commodi aut eum.&quot;,
                &quot;discount&quot;: 74.39,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 56,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 64731,
                &quot;description&quot;: &quot;Autem et voluptatem in. Aut vitae tempora quidem eligendi aut id non. Dolor vel molestias assumenda sequi praesentium omnis porro.&quot;,
                &quot;discount&quot;: 86.61,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 57,
                &quot;prodcut_name&quot;: &quot;dolore&quot;,
                &quot;cost&quot;: 60186,
                &quot;description&quot;: &quot;Quia accusamus porro numquam error. Ab odit fugiat id id. Voluptates omnis itaque sed.&quot;,
                &quot;discount&quot;: 24.07,
                &quot;category_id&quot;: 18,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 58,
                &quot;prodcut_name&quot;: &quot;id&quot;,
                &quot;cost&quot;: 12611,
                &quot;description&quot;: &quot;Aut nobis autem velit vel at iusto. Occaecati eos illum ipsum voluptatem. Numquam rem numquam rem autem doloremque. Nam alias natus vel sunt.&quot;,
                &quot;discount&quot;: 89.62,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 59,
                &quot;prodcut_name&quot;: &quot;sequi&quot;,
                &quot;cost&quot;: 31327,
                &quot;description&quot;: &quot;Recusandae ut et est numquam quia. Autem maxime voluptas quo ratione quibusdam voluptatibus. Dolores nulla nostrum similique ea at.&quot;,
                &quot;discount&quot;: 5.97,
                &quot;category_id&quot;: 21,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 60,
                &quot;prodcut_name&quot;: &quot;iure&quot;,
                &quot;cost&quot;: 23534,
                &quot;description&quot;: &quot;Dignissimos sunt adipisci molestiae dolores non aut. Dolor veniam eveniet quia neque eos nam quia. Eligendi ex placeat debitis.&quot;,
                &quot;discount&quot;: 55.36,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 62,
                &quot;prodcut_name&quot;: &quot;quisquam&quot;,
                &quot;cost&quot;: 75925,
                &quot;description&quot;: &quot;Provident praesentium animi id eius repellendus. Magni quos perferendis nesciunt quia. Et aut eius ipsa et aut voluptatem voluptates consequatur. Ad quae est culpa omnis amet iste.&quot;,
                &quot;discount&quot;: 15.27,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 63,
                &quot;prodcut_name&quot;: &quot;consequuntur&quot;,
                &quot;cost&quot;: 74625,
                &quot;description&quot;: &quot;Qui voluptatem ut autem ratione et. Reprehenderit pariatur omnis tempore et et et aliquam. Voluptatem et blanditiis ad debitis. Distinctio delectus magni est rem blanditiis molestiae minima esse.&quot;,
                &quot;discount&quot;: 80.61,
                &quot;category_id&quot;: 12,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 64,
                &quot;prodcut_name&quot;: &quot;vel&quot;,
                &quot;cost&quot;: 46335,
                &quot;description&quot;: &quot;Qui officiis velit iusto necessitatibus fugiat adipisci enim. Et pariatur aut modi temporibus adipisci pariatur id officia. Accusantium omnis alias ducimus earum quas deserunt.&quot;,
                &quot;discount&quot;: 39.6,
                &quot;category_id&quot;: 14,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 65,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 94390,
                &quot;description&quot;: &quot;Dicta error et in blanditiis sapiente nihil. Quos ullam omnis molestiae voluptas modi. Natus odio velit velit nobis ut libero. Dolore totam blanditiis blanditiis deserunt.&quot;,
                &quot;discount&quot;: 4.34,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 66,
                &quot;prodcut_name&quot;: &quot;optio&quot;,
                &quot;cost&quot;: 49552,
                &quot;description&quot;: &quot;Dolores excepturi fuga aut quo qui molestiae atque sed. Modi qui corrupti dolorem voluptatibus a facere repellendus. Eos recusandae unde amet sed iste molestias.&quot;,
                &quot;discount&quot;: 73.46,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 67,
                &quot;prodcut_name&quot;: &quot;autem&quot;,
                &quot;cost&quot;: 47359,
                &quot;description&quot;: &quot;Odit et voluptates unde cumque sequi. Quia ipsam ullam laborum omnis veritatis molestias. Cupiditate distinctio distinctio assumenda quo quia.&quot;,
                &quot;discount&quot;: 35.66,
                &quot;category_id&quot;: 16,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 68,
                &quot;prodcut_name&quot;: &quot;quia&quot;,
                &quot;cost&quot;: 43435,
                &quot;description&quot;: &quot;Dignissimos eum at quos tenetur rerum adipisci. Doloribus occaecati qui nesciunt vitae sit. Consequatur quae sit temporibus animi ut. Culpa est ut expedita eos quo atque qui.&quot;,
                &quot;discount&quot;: 4.2,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 69,
                &quot;prodcut_name&quot;: &quot;earum&quot;,
                &quot;cost&quot;: 70176,
                &quot;description&quot;: &quot;Quae dicta blanditiis debitis delectus qui quo. Nulla sequi ducimus ipsam possimus et iure. Et soluta voluptas necessitatibus non suscipit esse aut. Optio natus placeat iste nemo est nihil nihil.&quot;,
                &quot;discount&quot;: 57.5,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 70,
                &quot;prodcut_name&quot;: &quot;dolorem&quot;,
                &quot;cost&quot;: 99158,
                &quot;description&quot;: &quot;Molestias temporibus quia quidem. Dicta et corrupti ut minima ut voluptas.&quot;,
                &quot;discount&quot;: 28.55,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 71,
                &quot;prodcut_name&quot;: &quot;nisi&quot;,
                &quot;cost&quot;: 29422,
                &quot;description&quot;: &quot;Voluptatum odit reprehenderit tenetur et quisquam. Possimus optio in dolor repellendus. Nisi molestiae earum ut modi atque.&quot;,
                &quot;discount&quot;: 57.06,
                &quot;category_id&quot;: 19,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 72,
                &quot;prodcut_name&quot;: &quot;voluptatem&quot;,
                &quot;cost&quot;: 46149,
                &quot;description&quot;: &quot;Nesciunt aliquid molestias qui quisquam. Et aut reiciendis est ex et dolorem aspernatur. Sunt vel eum saepe consequatur sequi non consequuntur.&quot;,
                &quot;discount&quot;: 55.31,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 73,
                &quot;prodcut_name&quot;: &quot;distinctio&quot;,
                &quot;cost&quot;: 47673,
                &quot;description&quot;: &quot;Eius vero exercitationem inventore facilis nostrum. Nihil aspernatur non culpa. Dolor ut non excepturi voluptatum. Cupiditate temporibus ab asperiores fugit optio.&quot;,
                &quot;discount&quot;: 97.85,
                &quot;category_id&quot;: 11,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 74,
                &quot;prodcut_name&quot;: &quot;incidunt&quot;,
                &quot;cost&quot;: 76387,
                &quot;description&quot;: &quot;Nihil et eaque sed quaerat ut. Ratione iure officia ut minus saepe beatae rerum. Rerum consequatur voluptates et cumque perspiciatis rerum. Eaque magnam dignissimos sunt dolore unde ea.&quot;,
                &quot;discount&quot;: 78.93,
                &quot;category_id&quot;: 25,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 75,
                &quot;prodcut_name&quot;: &quot;possimus&quot;,
                &quot;cost&quot;: 88098,
                &quot;description&quot;: &quot;Deserunt autem vel inventore est nisi. Minima facere dignissimos sapiente. Sint quaerat iste sint ipsam quaerat.&quot;,
                &quot;discount&quot;: 5.84,
                &quot;category_id&quot;: 17,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 76,
                &quot;prodcut_name&quot;: &quot;eum&quot;,
                &quot;cost&quot;: 48622,
                &quot;description&quot;: &quot;Quia quam omnis necessitatibus sed veritatis. Quod aliquid deserunt voluptatem dicta et fugit ut. Et ut aperiam est similique voluptatibus est voluptas.&quot;,
                &quot;discount&quot;: 12.13,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 77,
                &quot;prodcut_name&quot;: &quot;illum&quot;,
                &quot;cost&quot;: 90380,
                &quot;description&quot;: &quot;Dolor quas nostrum ipsum eveniet. Consequatur dolor enim sed corrupti est. Dolores sunt vel qui quia officiis. Deleniti reiciendis quo possimus accusamus.&quot;,
                &quot;discount&quot;: 78.33,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 78,
                &quot;prodcut_name&quot;: &quot;qui&quot;,
                &quot;cost&quot;: 38437,
                &quot;description&quot;: &quot;Et occaecati eum quos saepe fuga quos. Enim eligendi distinctio sequi architecto temporibus dolore error.&quot;,
                &quot;discount&quot;: 75.09,
                &quot;category_id&quot;: 13,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 79,
                &quot;prodcut_name&quot;: &quot;facilis&quot;,
                &quot;cost&quot;: 55844,
                &quot;description&quot;: &quot;Similique ipsa qui et quia. Aut officia voluptates reprehenderit repellat eum quia illo.&quot;,
                &quot;discount&quot;: 92.04,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 81,
                &quot;prodcut_name&quot;: &quot;voluptas&quot;,
                &quot;cost&quot;: 4260,
                &quot;description&quot;: &quot;Dolorem eum error voluptatem et. Voluptatum delectus nobis totam et. Voluptas laboriosam veniam explicabo sint quia. Et unde dolorum beatae aspernatur tempora dolore.&quot;,
                &quot;discount&quot;: 86.4,
                &quot;category_id&quot;: 17,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 82,
                &quot;prodcut_name&quot;: &quot;suscipit&quot;,
                &quot;cost&quot;: 77030,
                &quot;description&quot;: &quot;Inventore et rerum vero qui sint non animi. Temporibus impedit aliquid aut veritatis. Qui ea dolores et magnam libero eum. Qui est eaque possimus qui dolor.&quot;,
                &quot;discount&quot;: 74.48,
                &quot;category_id&quot;: 20,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 83,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 22025,
                &quot;description&quot;: &quot;Debitis placeat nihil non. Ipsa atque consequatur sit. Velit numquam corrupti sed magnam dolore aperiam. Ducimus aliquid expedita aut et.&quot;,
                &quot;discount&quot;: 28.48,
                &quot;category_id&quot;: 16,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 84,
                &quot;prodcut_name&quot;: &quot;perspiciatis&quot;,
                &quot;cost&quot;: 56483,
                &quot;description&quot;: &quot;Ipsa saepe eligendi nemo quis. Optio reiciendis quos pariatur voluptatem. Omnis dolorum vitae quos nostrum. Qui omnis blanditiis tempore temporibus voluptates.&quot;,
                &quot;discount&quot;: 82.4,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 85,
                &quot;prodcut_name&quot;: &quot;doloremque&quot;,
                &quot;cost&quot;: 3892,
                &quot;description&quot;: &quot;Ea totam qui veniam atque voluptas. Voluptatem quo et voluptate et reiciendis quo. Aspernatur voluptatem maxime dolores enim doloribus veritatis. Nemo inventore doloribus autem et aut et.&quot;,
                &quot;discount&quot;: 13.16,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 86,
                &quot;prodcut_name&quot;: &quot;laborum&quot;,
                &quot;cost&quot;: 37856,
                &quot;description&quot;: &quot;Distinctio ratione omnis ipsa vero. Id rerum exercitationem quidem quod. Suscipit esse maxime magni totam tempore sit minus voluptatem. Ea qui hic qui.&quot;,
                &quot;discount&quot;: 13.3,
                &quot;category_id&quot;: 7,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 87,
                &quot;prodcut_name&quot;: &quot;sint&quot;,
                &quot;cost&quot;: 90102,
                &quot;description&quot;: &quot;Unde dolor quidem eos veniam a. Impedit fugiat hic et cupiditate qui. Ut aut fuga esse atque iure consequatur.&quot;,
                &quot;discount&quot;: 82.6,
                &quot;category_id&quot;: 4,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 88,
                &quot;prodcut_name&quot;: &quot;quo&quot;,
                &quot;cost&quot;: 33522,
                &quot;description&quot;: &quot;Dolor consectetur minima esse rerum voluptatem quisquam vel. Aspernatur aliquid labore dolor pariatur explicabo consequatur quia ratione. Magni omnis consectetur occaecati omnis nihil placeat sint.&quot;,
                &quot;discount&quot;: 54.01,
                &quot;category_id&quot;: 18,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 89,
                &quot;prodcut_name&quot;: &quot;minima&quot;,
                &quot;cost&quot;: 47025,
                &quot;description&quot;: &quot;Sequi quod est nisi soluta nihil ea nam quos. Ex et beatae sunt cupiditate.&quot;,
                &quot;discount&quot;: 41.05,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 90,
                &quot;prodcut_name&quot;: &quot;exercitationem&quot;,
                &quot;cost&quot;: 81819,
                &quot;description&quot;: &quot;Ex sed voluptas rerum et autem sunt iure. Est natus ut adipisci ullam. Et minima porro et quaerat aut repudiandae vel.&quot;,
                &quot;discount&quot;: 84.31,
                &quot;category_id&quot;: 12,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 91,
                &quot;prodcut_name&quot;: &quot;mollitia&quot;,
                &quot;cost&quot;: 56280,
                &quot;description&quot;: &quot;Ad reprehenderit cupiditate quae aperiam dolorem accusantium ratione a. Tempora tempora incidunt vel nihil quia est magnam.&quot;,
                &quot;discount&quot;: 48.37,
                &quot;category_id&quot;: 11,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 92,
                &quot;prodcut_name&quot;: &quot;officiis&quot;,
                &quot;cost&quot;: 36881,
                &quot;description&quot;: &quot;Ratione ab qui harum eos. Totam et eveniet eaque et eaque saepe possimus cupiditate. Dolores molestiae sunt sed incidunt.&quot;,
                &quot;discount&quot;: 86.85,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 93,
                &quot;prodcut_name&quot;: &quot;facilis&quot;,
                &quot;cost&quot;: 12439,
                &quot;description&quot;: &quot;Occaecati ipsum beatae omnis dolorum asperiores modi. Inventore provident et aperiam aut fuga et ut aut. Officiis mollitia voluptatem sequi.&quot;,
                &quot;discount&quot;: 41.89,
                &quot;category_id&quot;: 12,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 94,
                &quot;prodcut_name&quot;: &quot;asperiores&quot;,
                &quot;cost&quot;: 64656,
                &quot;description&quot;: &quot;Et dolores quia ut. Minus et ad a soluta qui vel quidem.&quot;,
                &quot;discount&quot;: 38.66,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 95,
                &quot;prodcut_name&quot;: &quot;delectus&quot;,
                &quot;cost&quot;: 99349,
                &quot;description&quot;: &quot;Iusto amet quibusdam ab quae quod voluptatum. Consequatur voluptatem voluptatibus voluptas vero voluptatem et deserunt et. Totam sunt ea non maiores ea.&quot;,
                &quot;discount&quot;: 54.88,
                &quot;category_id&quot;: 12,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 96,
                &quot;prodcut_name&quot;: &quot;ea&quot;,
                &quot;cost&quot;: 1557,
                &quot;description&quot;: &quot;Quis nisi dignissimos atque rem. Voluptatem totam expedita saepe sed sint. Voluptatem architecto quo iure voluptates ratione. Vel quo quo velit accusantium corporis.&quot;,
                &quot;discount&quot;: 35.73,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 97,
                &quot;prodcut_name&quot;: &quot;debitis&quot;,
                &quot;cost&quot;: 39093,
                &quot;description&quot;: &quot;Nisi non ea autem labore cupiditate ut. Tempore impedit nihil necessitatibus nihil sed.&quot;,
                &quot;discount&quot;: 65.53,
                &quot;category_id&quot;: 5,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 98,
                &quot;prodcut_name&quot;: &quot;minima&quot;,
                &quot;cost&quot;: 39917,
                &quot;description&quot;: &quot;Fugiat et nulla similique distinctio iste sed. Maxime placeat at repellat ipsum minima quod. Odit ut inventore quia officia cumque architecto non.&quot;,
                &quot;discount&quot;: 54.04,
                &quot;category_id&quot;: 22,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 99,
                &quot;prodcut_name&quot;: &quot;et&quot;,
                &quot;cost&quot;: 11633,
                &quot;description&quot;: &quot;Sed laboriosam eaque nihil vel dicta. Eos aut officia rerum consectetur. Sint et est eveniet et qui beatae. Aut sed et laudantium voluptas et ut.&quot;,
                &quot;discount&quot;: 56.77,
                &quot;category_id&quot;: 2,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 100,
                &quot;prodcut_name&quot;: &quot;autem&quot;,
                &quot;cost&quot;: 21066,
                &quot;description&quot;: &quot;Repudiandae unde itaque in ullam. Porro sint alias vitae dolorem qui. Est non magnam dolorem. Architecto vero quam ea repudiandae.&quot;,
                &quot;discount&quot;: 15.82,
                &quot;category_id&quot;: 8,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 102,
                &quot;prodcut_name&quot;: &quot;kabbar hon hony kabbar&quot;,
                &quot;cost&quot;: 2230,
                &quot;description&quot;: &quot;This is kabbar&quot;,
                &quot;discount&quot;: null,
                &quot;category_id&quot;: 6,
                &quot;product_image&quot;: null
            },
            {
                &quot;product_id&quot;: 103,
                &quot;prodcut_name&quot;: &quot;kabbar hon hony kabbar&quot;,
                &quot;cost&quot;: 2230,
                &quot;description&quot;: &quot;This is kabbar&quot;,
                &quot;discount&quot;: 26.6,
                &quot;category_id&quot;: 10,
                &quot;product_image&quot;: &quot;http://localhost/storage/images/products/1738314257_kabbar_hon_hony_kabbar.png&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="products-management-GETapi-products--product_id-">Get a specific product info .</h2>

<p>
</p>



<span id="example-requests-GETapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/products/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/products/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--product_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;product_id&quot;: 2,
        &quot;prodcut_name&quot;: &quot;cumque&quot;,
        &quot;cost&quot;: 87379,
        &quot;description&quot;: &quot;Tempore illo possimus sunt sed placeat sed. Commodi velit amet labore ratione eos modi sit ea. Quo dignissimos sit provident tempore voluptatem et ut.&quot;,
        &quot;discount&quot;: 35.07,
        &quot;category_id&quot;: 8,
        &quot;product_image&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--product_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--product_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products--product_id-" data-method="GET"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--product_id-"
                    onclick="tryItOut('GETapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--product_id-"
                    onclick="cancelTryOut('GETapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--product_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="GETapi-products--product_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="products-management-POSTapi-products">Create new product (Admin).</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_name\": \"quia\",
    \"cost\": 2,
    \"description\": \"accusamus\",
    \"category_id\": \"a\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_name": "quia",
    "cost": 2,
    "description": "accusamus",
    "category_id": "a"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
</span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="POSTapi-products"
               value="quia"
               data-component="body">
    <br>
<p>Example: <code>quia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="cost"                data-endpoint="POSTapi-products"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-products"
               value="accusamus"
               data-component="body">
    <br>
<p>Example: <code>accusamus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>discount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="discount"                data-endpoint="POSTapi-products"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="POSTapi-products"
               value="a"
               data-component="body">
    <br>
<p>Example: <code>a</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="product_image"                data-endpoint="POSTapi-products"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="products-management-POSTapi-products--product_id-">Update specific product (Admin)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/products/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"new_cost\": 8
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/products/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "new_cost": 8
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products--product_id-">
</span>
<span id="execution-results-POSTapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products--product_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products--product_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products--product_id-" data-method="POST"
      data-path="api/products/{product_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products--product_id-"
                    onclick="tryItOut('POSTapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products--product_id-"
                    onclick="cancelTryOut('POSTapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products--product_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="POSTapi-products--product_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_product_name"                data-endpoint="POSTapi-products--product_id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_cost</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="new_cost"                data-endpoint="POSTapi-products--product_id-"
               value="8"
               data-component="body">
    <br>
<p>Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_description"                data-endpoint="POSTapi-products--product_id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_discount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_discount"                data-endpoint="POSTapi-products--product_id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_category_id"                data-endpoint="POSTapi-products--product_id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_product_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="new_product_image"                data-endpoint="POSTapi-products--product_id-"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="products-management-DELETEapi-products--product_id-">Delete product (Admin)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://maria-api-production.up.railway.app/api/products/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/products/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product_id-">
</span>
<span id="execution-results-DELETEapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-products--product_id-" data-method="DELETE"
      data-path="api/products/{product_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product_id-"
                    onclick="tryItOut('DELETEapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product_id-"
                    onclick="cancelTryOut('DELETEapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-products--product_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="DELETEapi-products--product_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>2</code></p>
            </div>
                    </form>

                <h1 id="user-management">User management</h1>

    <p>APIs for managing users</p>

                                <h2 id="user-management-POSTapi-users-login">User login</h2>

<p>
</p>



<span id="example-requests-POSTapi-users-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/users/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"wdibbert@example.org\",
    \"password\": \"dolor\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "wdibbert@example.org",
    "password": "dolor"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users-login">
</span>
<span id="execution-results-POSTapi-users-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users-login" data-method="POST"
      data-path="api/users/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-login"
                    onclick="tryItOut('POSTapi-users-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-login"
                    onclick="cancelTryOut('POSTapi-users-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users-login"
               value="wdibbert@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. The <code>email</code> of an existing record in the users table. Example: <code>wdibbert@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users-login"
               value="dolor"
               data-component="body">
    <br>
<p>Example: <code>dolor</code></p>
        </div>
        </form>

                    <h2 id="user-management-POSTapi-users-signup">User sign up (Create new account)</h2>

<p>
</p>



<span id="example-requests-POSTapi-users-signup">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/users/signup" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"facere\",
    \"email\": \"lauren33@example.org\",
    \"password\": \"officia\",
    \"role\": \"admin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/signup"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "facere",
    "email": "lauren33@example.org",
    "password": "officia",
    "role": "admin"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users-signup">
</span>
<span id="execution-results-POSTapi-users-signup" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-signup"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-signup"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users-signup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-signup">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users-signup" data-method="POST"
      data-path="api/users/signup"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-signup', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-signup"
                    onclick="tryItOut('POSTapi-users-signup');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-signup"
                    onclick="cancelTryOut('POSTapi-users-signup');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-signup"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/signup</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users-signup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users-signup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users-signup"
               value="facere"
               data-component="body">
    <br>
<p>Example: <code>facere</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users-signup"
               value="lauren33@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>lauren33@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users-signup"
               value="officia"
               data-component="body">
    <br>
<p>Example: <code>officia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-users-signup"
               value="admin"
               data-component="body">
    <br>
<p>Example: <code>admin</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>user</code></li> <li><code>admin</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_image"                data-endpoint="POSTapi-users-signup"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="user-management-POSTapi-users-request-otp-code">Request OTP code to reset password</h2>

<p>
</p>



<span id="example-requests-POSTapi-users-request-otp-code">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/users/request-otp-code" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"hillard31@example.org\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/request-otp-code"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "hillard31@example.org"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users-request-otp-code">
</span>
<span id="execution-results-POSTapi-users-request-otp-code" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-request-otp-code"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-request-otp-code"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users-request-otp-code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-request-otp-code">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users-request-otp-code" data-method="POST"
      data-path="api/users/request-otp-code"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-request-otp-code', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-request-otp-code"
                    onclick="tryItOut('POSTapi-users-request-otp-code');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-request-otp-code"
                    onclick="cancelTryOut('POSTapi-users-request-otp-code');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-request-otp-code"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/request-otp-code</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users-request-otp-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users-request-otp-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users-request-otp-code"
               value="hillard31@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. The <code>email</code> of an existing record in the users table. Example: <code>hillard31@example.org</code></p>
        </div>
        </form>

                    <h2 id="user-management-POSTapi-users-reset-password">Reset password</h2>

<p>
</p>



<span id="example-requests-POSTapi-users-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/users/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users-reset-password">
</span>
<span id="execution-results-POSTapi-users-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users-reset-password" data-method="POST"
      data-path="api/users/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-reset-password"
                    onclick="tryItOut('POSTapi-users-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-reset-password"
                    onclick="cancelTryOut('POSTapi-users-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-management-GETapi-users">Get all users (Just admin can do this request)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-management-GETapi-users--user_id-">Get specifc user info.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://maria-api-production.up.railway.app/api/users/dignissimos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/dignissimos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--user_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--user_id-" data-method="GET"
      data-path="api/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--user_id-"
                    onclick="tryItOut('GETapi-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--user_id-"
                    onclick="cancelTryOut('GETapi-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="GETapi-users--user_id-"
               value="dignissimos"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>dignissimos</code></p>
            </div>
                    </form>

                    <h2 id="user-management-POSTapi-users--user_id-">Update user info</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://maria-api-production.up.railway.app/api/users/laborum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/laborum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users--user_id-">
</span>
<span id="execution-results-POSTapi-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users--user_id-" data-method="POST"
      data-path="api/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users--user_id-"
                    onclick="tryItOut('POSTapi-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users--user_id-"
                    onclick="cancelTryOut('POSTapi-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-users--user_id-"
               value="laborum"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>laborum</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_new_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_new_name"                data-endpoint="POSTapi-users--user_id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_image"                data-endpoint="POSTapi-users--user_id-"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="user-management-DELETEapi-users--user_id-">Delete user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://maria-api-production.up.railway.app/api/users/ratione" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://maria-api-production.up.railway.app/api/users/ratione"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--user_id-">
</span>
<span id="execution-results-DELETEapi-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--user_id-" data-method="DELETE"
      data-path="api/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--user_id-"
                    onclick="tryItOut('DELETEapi-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--user_id-"
                    onclick="cancelTryOut('DELETEapi-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="DELETEapi-users--user_id-"
               value="ratione"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>ratione</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
