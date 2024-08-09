<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>New SamSU Project Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/vendor/scribe/css/theme-default.style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/vendor/scribe/css/theme-default.print.css') }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
        body .content .bash-example code {
            display: none;
        }

        body .content .javascript-example code {
            display: none;
        }
    </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset('/vendor/scribe/js/tryitout-4.37.1.js') }}"></script>

    <script src="{{ asset('/vendor/scribe/js/theme-default-4.37.1.js') }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="{{ asset('/vendor/scribe/images/navbar.png') }}" alt="navbar-image" />
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
            <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                <ul id="tocify-subheader-auth" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="auth-POSTapi-login">
                        <a href="#auth-POSTapi-login">Login</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-jodit-browse">
                        <a href="#endpoints-POSTapi-jodit-browse">POST api/jodit/browse</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-jodit-upload">
                        <a href="#endpoints-POSTapi-jodit-upload">POST api/jodit/upload</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-menu" class="tocify-header">
                <li class="tocify-item level-1" data-unique="menu">
                    <a href="#menu">Menu</a>
                </li>
                <ul id="tocify-subheader-menu" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="menu-GETapi-menus">
                        <a href="#menu-GETapi-menus">Get all menu that level 3</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="menu-POSTapi-menus">
                        <a href="#menu-POSTapi-menus">Store Menu</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="menu-GETapi-menus--id-">
                        <a href="#menu-GETapi-menus--id-">Get menu by path</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="menu-PUTapi-menus--id-">
                        <a href="#menu-PUTapi-menus--id-">Update Menu</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="menu-DELETEapi-menus--id-">
                        <a href="#menu-DELETEapi-menus--id-">Delete menu</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-news" class="tocify-header">
                <li class="tocify-item level-1" data-unique="news">
                    <a href="#news">News</a>
                </li>
                <ul id="tocify-subheader-news" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="news-GETapi-news">
                        <a href="#news-GETapi-news">Get all news</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="news-POSTapi-news">
                        <a href="#news-POSTapi-news">Store news</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="news-GETapi-news--id-">
                        <a href="#news-GETapi-news--id-">Get News</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="news-PUTapi-news--id-">
                        <a href="#news-PUTapi-news--id-">Update news</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="news-DELETEapi-news--id-">
                        <a href="#news-DELETEapi-news--id-">Delete News</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-news-category" class="tocify-header">
                <li class="tocify-item level-1" data-unique="news-category">
                    <a href="#news-category">News Category</a>
                </li>
                <ul id="tocify-subheader-news-category" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="news-category-GETapi-news-categories">
                        <a href="#news-category-GETapi-news-categories">Get all news category</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-page" class="tocify-header">
                <li class="tocify-item level-1" data-unique="page">
                    <a href="#page">Page</a>
                </li>
                <ul id="tocify-subheader-page" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="page-GETapi-pages--menu_path-">
                        <a href="#page-GETapi-pages--menu_path-">Get Page</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="page-POSTapi-pages">
                        <a href="#page-POSTapi-pages">Store page</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="page-PUTapi-pages--menu_path-">
                        <a href="#page-PUTapi-pages--menu_path-">Update Page</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-permissions" class="tocify-header">
                <li class="tocify-item level-1" data-unique="permissions">
                    <a href="#permissions">Permissions</a>
                </li>
                <ul id="tocify-subheader-permissions" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="permissions-GETapi-permissions-personal">
                        <a href="#permissions-GETapi-permissions-personal">Get User permissions</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="permissions-GETapi-permissions">
                        <a href="#permissions-GETapi-permissions">Get Permissions</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="permissions-POSTapi-permissions-assign">
                        <a href="#permissions-POSTapi-permissions-assign">POST api/permissions/assign</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="permissions-POSTapi-permissions-remove">
                        <a href="#permissions-POSTapi-permissions-remove">POST api/permissions/remove</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-slide" class="tocify-header">
                <li class="tocify-item level-1" data-unique="slide">
                    <a href="#slide">Slide</a>
                </li>
                <ul id="tocify-subheader-slide" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="slide-GETapi-slides">
                        <a href="#slide-GETapi-slides">Get all slides</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="slide-POSTapi-slides">
                        <a href="#slide-POSTapi-slides">Store new Slide</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="slide-PUTapi-slides--id-">
                        <a href="#slide-PUTapi-slides--id-">Update slide</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="slide-DELETEapi-slides--id-">
                        <a href="#slide-DELETEapi-slides--id-">Delete slide</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-upload-file" class="tocify-header">
                <li class="tocify-item level-1" data-unique="upload-file">
                    <a href="#upload-file">Upload File</a>
                </li>
                <ul id="tocify-subheader-upload-file" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="upload-file-POSTapi-upload--type-">
                        <a href="#upload-file-POSTapi-upload--type-">Summary of store</a>
                    </li>
                </ul>
            </ul>
            <ul id="tocify-header-user" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user">
                    <a href="#user">User</a>
                </li>
                <ul id="tocify-subheader-user" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="user-GETapi-users-personal-details">
                        <a href="#user-GETapi-users-personal-details">GET api/users/personal-details</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="user-GETapi-users">
                        <a href="#user-GETapi-users">Display a listing of the resource.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="user-POSTapi-users">
                        <a href="#user-POSTapi-users">POST api/users</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="user-GETapi-users--id-">
                        <a href="#user-GETapi-users--id-">GET api/users/{id}</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="user-DELETEapi-users--id-">
                        <a href="#user-DELETEapi-users--id-">DELETE api/users/{id}</a>
                    </li>
                </ul>
            </ul>
        </div>

        <ul class="toc-footer" id="toc-footer">
            <li style="padding-bottom: 5px;"><a href="{{ route('scribe.postman') }}">View Postman collection</a></li>
            <li style="padding-bottom: 5px;"><a href="{{ route('scribe.openapi') }}">View OpenAPI spec</a></li>
            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
        </ul>

        <ul class="toc-footer" id="last-updated">
            <li>Last updated: August 6, 2024</li>
        </ul>
    </div>

    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1 id="introduction">Introduction</h1>
            <aside>
                <strong>Base URL</strong>: <code>http://172.16.4.97:8000</code>
            </aside>
            <p>This documentation aims to provide all the information you need to work with our API.</p>
            <aside>As you scroll, you'll see code examples for working with the API in different programming languages
                in the dark area to the right (or as part of the content on mobile).
                You can switch the language used with the tabs at the top right (or from the nav menu at the top left on
                mobile).</aside>

            <h1 id="authenticating-requests">Authenticating requests</h1>
            <p>This API is not authenticated.</p>

            <h1 id="auth">Auth</h1>



            <h2 id="auth-POSTapi-login">Login</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-login">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"illum\",
    \"password\": \"\\/0Q\\\"D2W\\/\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "illum",
    "password": "\/0Q\"D2W\/"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-login">
            </span>
            <span id="execution-results-POSTapi-login" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-login" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-login" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/login</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTapi-login"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-login"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="username" data-endpoint="POSTapi-login"
                        value="illum" data-component="body">
                    <br>
                    <p>Example: <code>illum</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTapi-login"
                        value="/0Q"D2W/" data-component="body">
                    <br>
                    <p>Must be at least 6 characters. Example: <code>/0Q"D2W/</code></p>
                </div>
            </form>

            <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-POSTapi-jodit-browse">POST api/jodit/browse</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-jodit-browse">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/jodit/browse" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"action\": \"quibusdam\",
    \"path\": \"nihil\",
    \"source\": \"consequuntur\",
    \"from\": \"eos\",
    \"name\": \"sed\",
    \"newname\": \"iure\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/jodit/browse"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "action": "quibusdam",
    "path": "nihil",
    "source": "consequuntur",
    "from": "eos",
    "name": "sed",
    "newname": "iure"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-jodit-browse">
            </span>
            <span id="execution-results-POSTapi-jodit-browse" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-jodit-browse"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-jodit-browse"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-jodit-browse" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-jodit-browse">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-jodit-browse" data-method="POST" data-path="api/jodit/browse" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-jodit-browse', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-jodit-browse" onclick="tryItOut('POSTapi-jodit-browse');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-jodit-browse" onclick="cancelTryOut('POSTapi-jodit-browse');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-jodit-browse" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/jodit/browse</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-jodit-browse" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-jodit-browse"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>action</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="action" data-endpoint="POSTapi-jodit-browse"
                        value="quibusdam" data-component="body">
                    <br>
                    <p>Example: <code>quibusdam</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="POSTapi-jodit-browse"
                        value="nihil" data-component="body">
                    <br>
                    <p>Example: <code>nihil</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>source</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="source" data-endpoint="POSTapi-jodit-browse"
                        value="consequuntur" data-component="body">
                    <br>
                    <p>Example: <code>consequuntur</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>from</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="from" data-endpoint="POSTapi-jodit-browse"
                        value="eos" data-component="body">
                    <br>
                    <p>Example: <code>eos</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="name" data-endpoint="POSTapi-jodit-browse"
                        value="sed" data-component="body">
                    <br>
                    <p>This field is required when <code>action</code> is <code>folderCreate</code> or
                        <code>folderRemove</code>. Example: <code>sed</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>newname</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="newname" data-endpoint="POSTapi-jodit-browse"
                        value="iure" data-component="body">
                    <br>
                    <p>This field is required when <code>action</code> is <code>folderRename</code>. Example:
                        <code>iure</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-jodit-upload">POST api/jodit/upload</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-jodit-upload">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/jodit/upload" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "path=qui"\
    --form "source=quia"\
    --form "url=http://pacocha.net/et-totam-ratione-amet-qui-amet-eaque-veritatis"\
    --form "files[]=@C:\OSPanel\temp\PHP-8.1\default\php36D1.tmp" </code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/jodit/upload"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('path', 'qui');
body.append('source', 'quia');
body.append('url', 'http://pacocha.net/et-totam-ratione-amet-qui-amet-eaque-veritatis');
body.append('files[]', document.querySelector('input[name="files[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-jodit-upload">
            </span>
            <span id="execution-results-POSTapi-jodit-upload" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-jodit-upload"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-jodit-upload"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-jodit-upload" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-jodit-upload">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-jodit-upload" data-method="POST" data-path="api/jodit/upload" data-authed="0"
                data-hasfiles="1" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-jodit-upload', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-jodit-upload" onclick="tryItOut('POSTapi-jodit-upload');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-jodit-upload" onclick="cancelTryOut('POSTapi-jodit-upload');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-jodit-upload" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/jodit/upload</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-jodit-upload" value="multipart/form-data" data-component="header">
                    <br>
                    <p>Example: <code>multipart/form-data</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-jodit-upload"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="POSTapi-jodit-upload"
                        value="qui" data-component="body">
                    <br>
                    <p>Example: <code>qui</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>source</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="source" data-endpoint="POSTapi-jodit-upload"
                        value="quia" data-component="body">
                    <br>
                    <p>Example: <code>quia</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>files</code></b>&nbsp;&nbsp;
                    <small>file[]</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="file" style="display: none" name="files[0]" data-endpoint="POSTapi-jodit-upload"
                        data-component="body">
                    <input type="file" style="display: none" name="files[1]" data-endpoint="POSTapi-jodit-upload"
                        data-component="body">
                    <br>
                    <p>Must be a file.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="url" data-endpoint="POSTapi-jodit-upload"
                        value="http://pacocha.net/et-totam-ratione-amet-qui-amet-eaque-veritatis"
                        data-component="body">
                    <br>
                    <p>Must be a valid URL. Example:
                        <code>http://pacocha.net/et-totam-ratione-amet-qui-amet-eaque-veritatis</code></p>
                </div>
            </form>

            <h1 id="menu">Menu</h1>



            <h2 id="menu-GETapi-menus">Get all menu that level 3</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-menus">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/menus?withChildren=" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/menus"
);

const params = {
    "withChildren": "0",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-menus">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully!&quot;,
    &quot;result&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Yangiliklar&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;news&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Tuzilma&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;structure&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ilmiy faoliyat&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;scientific-activity&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Xalqaro aloqalar&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;international-relations&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Madaniy-ma&rsquo;rifiy faoliyat&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;cultural-and-educational-activity&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Moliyaviy faoliyat&quot;,
                &quot;level&quot;: 1,
                &quot;path&quot;: &quot;financial-activity&quot;,
                &quot;externalLink&quot;: false,
                &quot;hasPage&quot;: null
            }
        ]
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-menus" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-menus"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-menus"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-menus" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-menus">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-menus" data-method="GET" data-path="api/menus" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-menus', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-menus" onclick="tryItOut('GETapi-menus');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-menus" onclick="cancelTryOut('GETapi-menus');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-menus" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/menus</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETapi-menus"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-menus"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>lang</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="lang" data-endpoint="GETapi-menus"
                        value="" data-component="query">
                    <br>

                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="number" style="display: none" step="any" name="level"
                        data-endpoint="GETapi-menus" value="" data-component="query">
                    <br>

                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>withChildren</code></b>&nbsp;&nbsp;
                    <small>boolean</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <label data-endpoint="GETapi-menus" style="display: none">
                        <input type="radio" name="withChildren" value="1" data-endpoint="GETapi-menus"
                            data-component="query">
                        <code>true</code>
                    </label>
                    <label data-endpoint="GETapi-menus" style="display: none">
                        <input type="radio" name="withChildren" value="0" data-endpoint="GETapi-menus"
                            data-component="query">
                        <code>false</code>
                    </label>
                    <br>
                    <p>Example: <code>false</code></p>
                </div>
            </form>

            <h2 id="menu-POSTapi-menus">Store Menu</h2>

            <p>
            </p>

            <p>Only spaadmin</p>

            <span id="example-requests-POSTapi-menus">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/menus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nameEn\": \"inventore\",
    \"nameUz\": \"quaerat\",
    \"nameRu\": \"ex\",
    \"nameKr\": \"nulla\",
    \"level\": 19,
    \"path\": \"omnis\",
    \"externalLink\": false
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/menus"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nameEn": "inventore",
    "nameUz": "quaerat",
    "nameRu": "ex",
    "nameKr": "nulla",
    "level": 19,
    "path": "omnis",
    "externalLink": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-menus">
            </span>
            <span id="execution-results-POSTapi-menus" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-menus"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-menus"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-menus" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-menus">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-menus" data-method="POST" data-path="api/menus" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-menus', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-menus" onclick="tryItOut('POSTapi-menus');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-menus" onclick="cancelTryOut('POSTapi-menus');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-menus" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/menus</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTapi-menus"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-menus"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameEn</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameEn" data-endpoint="POSTapi-menus"
                        value="inventore" data-component="body">
                    <br>
                    <p>Example: <code>inventore</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameUz</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameUz" data-endpoint="POSTapi-menus"
                        value="quaerat" data-component="body">
                    <br>
                    <p>Example: <code>quaerat</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameRu</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameRu" data-endpoint="POSTapi-menus"
                        value="ex" data-component="body">
                    <br>
                    <p>Example: <code>ex</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameKr</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameKr" data-endpoint="POSTapi-menus"
                        value="nulla" data-component="body">
                    <br>
                    <p>Example: <code>nulla</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="level"
                        data-endpoint="POSTapi-menus" value="19" data-component="body">
                    <br>
                    <p>Must be at least 1. Example: <code>19</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>parentId</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="parentId" data-endpoint="POSTapi-menus"
                        value="" data-component="body">
                    <br>
                    <p>This field is required unless <code>level</code> is in <code>1</code>.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="POSTapi-menus"
                        value="omnis" data-component="body">
                    <br>
                    <p>Example: <code>omnis</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>externalLink</code></b>&nbsp;&nbsp;
                    <small>boolean</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <label data-endpoint="POSTapi-menus" style="display: none">
                        <input type="radio" name="externalLink" value="true" data-endpoint="POSTapi-menus"
                            data-component="body">
                        <code>true</code>
                    </label>
                    <label data-endpoint="POSTapi-menus" style="display: none">
                        <input type="radio" name="externalLink" value="false" data-endpoint="POSTapi-menus"
                            data-component="body">
                        <code>false</code>
                    </label>
                    <br>
                    <p>Example: <code>false</code></p>
                </div>
            </form>

            <h2 id="menu-GETapi-menus--id-">Get menu by path</h2>

            <p>
            </p>

            <p>@urlParam id int required The ID of the post</p>

            <span id="example-requests-GETapi-menus--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/menus/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/menus/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-menus--id-">
                <blockquote>
                    <p>Example response (404):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Menu].&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-menus--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-menus--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-menus--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-menus--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-menus--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-menus--id-" data-method="GET" data-path="api/menus/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-menus--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-menus--id-" onclick="tryItOut('GETapi-menus--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-menus--id-" onclick="cancelTryOut('GETapi-menus--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-menus--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/menus/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-menus--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-menus--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="GETapi-menus--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the menu. Example: <code>1</code></p>
                </div>
            </form>

            <h2 id="menu-PUTapi-menus--id-">Update Menu</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-menus--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://172.16.4.97:8000/api/menus/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"level\": 17,
    \"path\": \"a\",
    \"externalLink\": true,
    \"nameEn\": \"amet\",
    \"nameUz\": \"cumque\",
    \"nameRU\": \"asperiores\",
    \"nameKr\": \"aut\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/menus/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "level": 17,
    "path": "a",
    "externalLink": true,
    "nameEn": "amet",
    "nameUz": "cumque",
    "nameRU": "asperiores",
    "nameKr": "aut"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUTapi-menus--id-">
            </span>
            <span id="execution-results-PUTapi-menus--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-menus--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-menus--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUTapi-menus--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-menus--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUTapi-menus--id-" data-method="PUT" data-path="api/menus/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-menus--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-menus--id-" onclick="tryItOut('PUTapi-menus--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-menus--id-" onclick="cancelTryOut('PUTapi-menus--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-menus--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/menus/{id}</code></b>
                </p>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/menus/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="PUTapi-menus--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="PUTapi-menus--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="PUTapi-menus--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the menu. Example: <code>1</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="level"
                        data-endpoint="PUTapi-menus--id-" value="17" data-component="body">
                    <br>
                    <p>Example: <code>17</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>parentId</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="parentId" data-endpoint="PUTapi-menus--id-"
                        value="" data-component="body">
                    <br>
                    <p>This field is required unless <code>level</code> is in <code>1</code>.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="PUTapi-menus--id-"
                        value="a" data-component="body">
                    <br>
                    <p>Example: <code>a</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>externalLink</code></b>&nbsp;&nbsp;
                    <small>boolean</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <label data-endpoint="PUTapi-menus--id-" style="display: none">
                        <input type="radio" name="externalLink" value="true" data-endpoint="PUTapi-menus--id-"
                            data-component="body">
                        <code>true</code>
                    </label>
                    <label data-endpoint="PUTapi-menus--id-" style="display: none">
                        <input type="radio" name="externalLink" value="false" data-endpoint="PUTapi-menus--id-"
                            data-component="body">
                        <code>false</code>
                    </label>
                    <br>
                    <p>Example: <code>true</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameEn</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameEn" data-endpoint="PUTapi-menus--id-"
                        value="amet" data-component="body">
                    <br>
                    <p>optional Example: <code>amet</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameUz</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameUz" data-endpoint="PUTapi-menus--id-"
                        value="cumque" data-component="body">
                    <br>
                    <p>optional Example: <code>cumque</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameRU</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameRU" data-endpoint="PUTapi-menus--id-"
                        value="asperiores" data-component="body">
                    <br>
                    <p>optional Example: <code>asperiores</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>nameKr</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="nameKr" data-endpoint="PUTapi-menus--id-"
                        value="aut" data-component="body">
                    <br>
                    <p>optional Example: <code>aut</code></p>
                </div>
            </form>

            <h2 id="menu-DELETEapi-menus--id-">Delete menu</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-menus--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://172.16.4.97:8000/api/menus/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/menus/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEapi-menus--id-">
            </span>
            <span id="execution-results-DELETEapi-menus--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-menus--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-menus--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-menus--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-menus--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEapi-menus--id-" data-method="DELETE" data-path="api/menus/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-menus--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-menus--id-" onclick="tryItOut('DELETEapi-menus--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-menus--id-" onclick="cancelTryOut('DELETEapi-menus--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-menus--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/menus/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEapi-menus--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="DELETEapi-menus--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="DELETEapi-menus--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the menu. Example: <code>1</code></p>
                </div>
            </form>

            <h1 id="news">News</h1>



            <h2 id="news-GETapi-news">Get all news</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-news">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/news" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-news">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully!&quot;,
    &quot;result&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 5729,
                &quot;title&quot;: &quot;Iqtidorli talabalarga imtiyozli diplomlar topshirildi&hellip;&quot;,
                &quot;views&quot;: 1775,
                &quot;imagePath&quot;: &quot;6683f07940515-6683f07940517-6683f07940518-6683f07940519.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-07-02T07:17:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 5720,
                &quot;title&quot;: &quot;ISHANKULOV TOLIB&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;6682902c5451c-6682902c5451e-6682902c5451f-6682902c54520.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-07-01T06:16:26.000000Z&quot;
            },
            {
                &quot;id&quot;: 5713,
                &quot;title&quot;: &quot;Samarqand davlat universiteti psixologiya va ijtimoiy-siyosiy fanlar hamda tarix fakultetida \&quot;Samarqand falsafasi va tarixi\&quot; nomli yozgi maktab boshlandi... &quot;,
                &quot;views&quot;: 1917,
                &quot;imagePath&quot;: &quot;66754ea32f761-66754ea32f763-66754ea32f764-66754ea32f765.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-06-21T04:49:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 4643,
                &quot;title&quot;: &quot; MEXANIKA LABORATORIYASI&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;667414ea020e3-667414ea020e5-667414ea020e6-667414ea020e7.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-06-20T06:39:22.000000Z&quot;
            },
            {
                &quot;id&quot;: 4626,
                &quot;title&quot;: &quot;Samarqand davlat universiteti akademik litseyi bitiruvchilariga diplom topshirildi&hellip;&quot;,
                &quot;views&quot;: 1991,
                &quot;imagePath&quot;: &quot;6674083115873-6674083115875-6674083115876-6674083115877.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-06-20T05:36:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 4620,
                &quot;title&quot;: &quot;Sharof Rashidov nomidagi Samarqand davlat universiteti huzuridagi ilmiy darajalar beruvchi DSc.30.12.2019.FM/T.02.09 raqamli Ilmiy kengash qoshidagi ilmiy seminar yig&lsquo;ilishi 2024-yil 25-iyun kuni soat 14:00 bo&lsquo;lib o&lsquo;tadi.&quot;,
                &quot;views&quot;: 842,
                &quot;imagePath&quot;: &quot;6674032303d66-6674032303d68-6674032303d69-6674032303d6a.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-06-20T05:20:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 5570,
                &quot;title&quot;: &quot;Tug&lsquo;ilgan kuningiz muborak bo&lsquo;lsin !&quot;,
                &quot;views&quot;: 2507,
                &quot;imagePath&quot;: &quot;645d408b42ff6-645d408b42ffa-645d408b42ffc-645d408b42ffd.png&quot;,
                &quot;createdAt&quot;: &quot;2024-05-11T22:15:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 561,
                &quot;title&quot;: &quot;XUSHVAQTOV HAKIM ABDULHAQOVICH&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;663f49e070ef1-663f49e070ef3-663f49e070ef4-663f49e070ef5.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-05-11T05:35:12.000000Z&quot;
            },
            {
                &quot;id&quot;: 493,
                &quot;title&quot;: &quot;NIZOMOV NEGMAT&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;663f492cb1d8b-663f492cb1d8e-663f492cb1d8f-663f492cb1d90.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-05-11T05:32:12.000000Z&quot;
            },
            {
                &quot;id&quot;: 380,
                &quot;title&quot;: &quot;JUMABAEV ABDUVOXID&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;663f489ad7237-663f489ad723a-663f489ad723b-663f489ad723c.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-05-11T05:29:46.000000Z&quot;
            },
            {
                &quot;id&quot;: 218,
                &quot;title&quot;: &quot;IBODOV RUSTAM MUSTAFOYEVICH&quot;,
                &quot;views&quot;: 0,
                &quot;imagePath&quot;: &quot;663f47f7eefc9-663f47f7eefcc-663f47f7eefcd-663f47f7eefce.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-05-11T05:27:04.000000Z&quot;
            },
            {
                &quot;id&quot;: 4744,
                &quot;title&quot;: &quot;Ochiq dars&quot;,
                &quot;views&quot;: 900,
                &quot;imagePath&quot;: &quot;663a2f10afc56-663a2f10afc5a-663a2f10afc5b-663a2f10afc5c.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-05-07T08:38:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 3074,
                &quot;title&quot;: &quot;Samarqand davlat universiteti Janubiy Koreyaning Hankyong milliy universiteti bilan hamkorlikda xalqaro loyihani amalga oshiradi&hellip;&quot;,
                &quot;views&quot;: 3261,
                &quot;imagePath&quot;: &quot;6631066114511-6631066114514-6631066114515-6631066114516.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-04-30T09:38:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 1919,
                &quot;title&quot;: &quot;Samarqand davlat universitetiga Tambov viloyati rahbariyati tashrif buyurdi&hellip;&quot;,
                &quot;views&quot;: 1837,
                &quot;imagePath&quot;: &quot;662a8bed13bc5-662a8bed13bc8-662a8bed13bc9-662a8bed13bca.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-04-25T11:54:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 1870,
                &quot;title&quot;: &quot;&ldquo;Bolalarimizning yana-da yaxshiroq o&lsquo;qishi uchun biz universitet bilan hamkorlik qilishimiz lozim&rdquo;&hellip;&quot;,
                &quot;views&quot;: 1688,
                &quot;imagePath&quot;: &quot;662a848b7fea4-662a848b7fea7-662a848b7fea8-662a848b7fea9.jpg&quot;,
                &quot;createdAt&quot;: &quot;2024-04-25T11:21:00.000000Z&quot;
            }
        ],
        &quot;meta&quot;: {
            &quot;currentPage&quot;: 1,
            &quot;perPage&quot;: 15,
            &quot;lastPage&quot;: 394,
            &quot;total&quot;: 5900
        }
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-news" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-news"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-news"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-news" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-news">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-news" data-method="GET" data-path="api/news" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-news', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-news" onclick="tryItOut('GETapi-news');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-news" onclick="cancelTryOut('GETapi-news');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-news" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/news</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETapi-news"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-news"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>perPage</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="number" style="display: none" step="any" name="perPage"
                        data-endpoint="GETapi-news" value="" data-component="query">
                    <br>
                    <p>.</p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>lang</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="lang" data-endpoint="GETapi-news"
                        value="" data-component="query">
                    <br>
                    <p>, in [uz,en,ru,kr].</p>
                </div>
            </form>

            <h2 id="news-POSTapi-news">Store news</h2>

            <p>
            </p>

            <p>only signed admin</p>

            <span id="example-requests-POSTapi-news">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/news" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"imagePath\": \"excepturi\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "imagePath": "excepturi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-news">
            </span>
            <span id="execution-results-POSTapi-news" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-news"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-news"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-news" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-news">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-news" data-method="POST" data-path="api/news" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-news', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-news" onclick="tryItOut('POSTapi-news');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-news" onclick="cancelTryOut('POSTapi-news');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-news" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/news</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTapi-news"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-news"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>categoryId</code></b>&nbsp;&nbsp;
                    <small>required</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="categoryId" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>int The type of news.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>imagePath</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="imagePath" data-endpoint="POSTapi-news"
                        value="excepturi" data-component="body">
                    <br>
                    <p>Example: <code>excepturi</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleEn" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleRu" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleKr" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleUz" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyEn" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyRu" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyUz" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyKr" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>required</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="POSTapi-news"
                        value="" data-component="body">
                    <br>
                    <p>string Main image path.</p>
                </div>
            </form>

            <h2 id="news-GETapi-news--id-">Get News</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-news--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/news/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-news--id-">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully!&quot;,
    &quot;result&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Samarqand davlat universitetida respublika esselar tanlovining hududiy bosqichi o&#039;tkazildi&quot;,
        &quot;body&quot;: &quot;&lt;p&gt;&lt;iframe frameborder=\&quot;0\&quot; height=\&quot;720\&quot; scrolling=\&quot;no\&quot; src=\&quot;https://www.youtube.com/embed/zGnR3HLUe78\&quot; title=\&quot;YouTube video player\&quot; width=\&quot;100%\&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n&quot;,
        &quot;status&quot;: &quot;1&quot;,
        &quot;views&quot;: 794,
        &quot;imagePath&quot;: &quot;628796dbb11b2-628796dbb11b4-628796dbb11b5-628796dbb11b6.jpg&quot;,
        &quot;createdAt&quot;: &quot;2022-05-20T13:23:00.000000Z&quot;
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-news--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-news--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-news--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-news--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-news--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-news--id-" data-method="GET" data-path="api/news/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-news--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-news--id-" onclick="tryItOut('GETapi-news--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-news--id-" onclick="cancelTryOut('GETapi-news--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-news--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/news/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-news--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-news--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="GETapi-news--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the news. Example: <code>1</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>lang</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="lang" data-endpoint="GETapi-news--id-"
                        value="" data-component="query">
                    <br>
                    <p>uz.</p>
                </div>
            </form>

            <h2 id="news-PUTapi-news--id-">Update news</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-news--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://172.16.4.97:8000/api/news/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUTapi-news--id-">
            </span>
            <span id="execution-results-PUTapi-news--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-news--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-news--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUTapi-news--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-news--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUTapi-news--id-" data-method="PUT" data-path="api/news/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-news--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-news--id-" onclick="tryItOut('PUTapi-news--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-news--id-" onclick="cancelTryOut('PUTapi-news--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-news--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/news/{id}</code></b>
                </p>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/news/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="PUTapi-news--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="PUTapi-news--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="PUTapi-news--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the news. Example: <code>1</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>categoryId</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="categoryId"
                        data-endpoint="PUTapi-news--id-" value="" data-component="body">
                    <br>
                    <p>int The type of news.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>not null string Main image path.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleEn" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleRu" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleKr" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleUz" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyEn" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyRu" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyUz" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyKr" data-endpoint="PUTapi-news--id-"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
            </form>

            <h2 id="news-DELETEapi-news--id-">Delete News</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-news--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://172.16.4.97:8000/api/news/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEapi-news--id-">
            </span>
            <span id="execution-results-DELETEapi-news--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-news--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-news--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-news--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-news--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEapi-news--id-" data-method="DELETE" data-path="api/news/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-news--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-news--id-" onclick="tryItOut('DELETEapi-news--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-news--id-" onclick="cancelTryOut('DELETEapi-news--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-news--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/news/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEapi-news--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="DELETEapi-news--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="DELETEapi-news--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the news. Example: <code>1</code></p>
                </div>
            </form>

            <h1 id="news-category">News Category</h1>



            <h2 id="news-category-GETapi-news-categories">Get all news category</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-news-categories">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/news-categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/news-categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-news-categories">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully!&quot;,
    &quot;result&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category&quot;: &quot;old&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category&quot;: &quot;about science&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;category&quot;: &quot;about nothing&quot;
            }
        ]
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-news-categories" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-news-categories"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-news-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-news-categories" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-news-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-news-categories" data-method="GET" data-path="api/news-categories"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-news-categories', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-news-categories" onclick="tryItOut('GETapi-news-categories');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-news-categories"
                        onclick="cancelTryOut('GETapi-news-categories');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-news-categories" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/news-categories</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-news-categories" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-news-categories" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h1 id="page">Page</h1>



            <h2 id="page-GETapi-pages--menu_path-">Get Page</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-pages--menu_path-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/pages/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/pages/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-pages--menu_path-">
                <blockquote>
                    <p>Example response (404):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Menu] 1&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-pages--menu_path-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-pages--menu_path-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-pages--menu_path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-pages--menu_path-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-pages--menu_path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-pages--menu_path-" data-method="GET" data-path="api/pages/{menu_path}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-pages--menu_path-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-pages--menu_path-" onclick="tryItOut('GETapi-pages--menu_path-');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-pages--menu_path-"
                        onclick="cancelTryOut('GETapi-pages--menu_path-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-pages--menu_path-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/pages/{menu_path}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-pages--menu_path-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-pages--menu_path-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>menu_path</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="menu_path"
                        data-endpoint="GETapi-pages--menu_path-" value="1" data-component="url">
                    <br>
                    <p>Example: <code>1</code></p>
                </div>
            </form>

            <h2 id="page-POSTapi-pages">Store page</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-pages">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/pages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"menu\": \"vero\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/pages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "menu": "vero"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-pages">
            </span>
            <span id="execution-results-POSTapi-pages" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-pages"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-pages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-pages" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-pages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-pages" data-method="POST" data-path="api/pages" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-pages', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-pages" onclick="tryItOut('POSTapi-pages');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-pages" onclick="cancelTryOut('POSTapi-pages');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-pages" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/pages</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-pages" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-pages"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>menu</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="menu" data-endpoint="POSTapi-pages"
                        value="vero" data-component="body">
                    <br>
                    <p>Example: <code>vero</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>menuId</code></b>&nbsp;&nbsp;
                    <small>required</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="menuId" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>int</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleEn" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleRu" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleKr" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleUz" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyEn</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyEn" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyRu" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyUz" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>bodyKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="bodyKr" data-endpoint="POSTapi-pages"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
            </form>

            <h2 id="page-PUTapi-pages--menu_path-">Update Page</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-pages--menu_path-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://172.16.4.97:8000/api/pages/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/pages/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUTapi-pages--menu_path-">
            </span>
            <span id="execution-results-PUTapi-pages--menu_path-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-pages--menu_path-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-pages--menu_path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUTapi-pages--menu_path-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-pages--menu_path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUTapi-pages--menu_path-" data-method="PUT" data-path="api/pages/{menu_path}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-pages--menu_path-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-pages--menu_path-" onclick="tryItOut('PUTapi-pages--menu_path-');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-pages--menu_path-"
                        onclick="cancelTryOut('PUTapi-pages--menu_path-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-pages--menu_path-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/pages/{menu_path}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="PUTapi-pages--menu_path-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="PUTapi-pages--menu_path-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>menu_path</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="menu_path"
                        data-endpoint="PUTapi-pages--menu_path-" value="1" data-component="url">
                    <br>
                    <p>Example: <code>1</code></p>
                </div>
            </form>

            <h1 id="permissions">Permissions</h1>



            <h2 id="permissions-GETapi-permissions-personal">Get User permissions</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-permissions-personal">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/permissions/personal" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/permissions/personal"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-permissions-personal">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-permissions-personal" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-permissions-personal"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-permissions-personal"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-permissions-personal" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-permissions-personal">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-permissions-personal" data-method="GET" data-path="api/permissions/personal"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-permissions-personal', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-permissions-personal"
                        onclick="tryItOut('GETapi-permissions-personal');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-permissions-personal"
                        onclick="cancelTryOut('GETapi-permissions-personal');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-permissions-personal" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/permissions/personal</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-permissions-personal" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-permissions-personal" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="permissions-GETapi-permissions">Get Permissions</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-permissions">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/permissions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/permissions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-permissions">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully!&quot;,
    &quot;result&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;permission&quot;: &quot;news&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;permission&quot;: &quot;page&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;permission&quot;: &quot;menu&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;permission&quot;: &quot;slide&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;permission&quot;: &quot;user&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;permission&quot;: &quot;file.upload&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;permission&quot;: &quot;file.delete&quot;
        }
    ]
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-permissions" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-permissions"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-permissions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-permissions" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-permissions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-permissions" data-method="GET" data-path="api/permissions" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-permissions', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-permissions" onclick="tryItOut('GETapi-permissions');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-permissions" onclick="cancelTryOut('GETapi-permissions');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-permissions" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/permissions</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-permissions" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-permissions" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="permissions-POSTapi-permissions-assign">POST api/permissions/assign</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-permissions-assign">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/permissions/assign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"permissions\": [
        16
    ],
    \"userId\": 6
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/permissions/assign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "permissions": [
        16
    ],
    "userId": 6
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-permissions-assign">
            </span>
            <span id="execution-results-POSTapi-permissions-assign" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-permissions-assign" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-permissions-assign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-permissions-assign" data-method="POST" data-path="api/permissions/assign"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-permissions-assign"
                        onclick="tryItOut('POSTapi-permissions-assign');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-permissions-assign"
                        onclick="cancelTryOut('POSTapi-permissions-assign');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-permissions-assign" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/permissions/assign</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-permissions-assign" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSTapi-permissions-assign" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>permissions</code></b>&nbsp;&nbsp;
                    <small>integer[]</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="permissions[0]"
                        data-endpoint="POSTapi-permissions-assign" data-component="body">
                    <input type="number" style="display: none" name="permissions[1]"
                        data-endpoint="POSTapi-permissions-assign" data-component="body">
                    <br>

                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>userId</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="userId"
                        data-endpoint="POSTapi-permissions-assign" value="6" data-component="body">
                    <br>
                    <p>Example: <code>6</code></p>
                </div>
            </form>

            <h2 id="permissions-POSTapi-permissions-remove">POST api/permissions/remove</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-permissions-remove">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/permissions/remove" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"permissions\": [
        19
    ],
    \"userId\": 11
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/permissions/remove"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "permissions": [
        19
    ],
    "userId": 11
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-permissions-remove">
            </span>
            <span id="execution-results-POSTapi-permissions-remove" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-remove"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-permissions-remove"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-permissions-remove" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-permissions-remove">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-permissions-remove" data-method="POST" data-path="api/permissions/remove"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-remove', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-permissions-remove"
                        onclick="tryItOut('POSTapi-permissions-remove');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-permissions-remove"
                        onclick="cancelTryOut('POSTapi-permissions-remove');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-permissions-remove" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/permissions/remove</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-permissions-remove" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSTapi-permissions-remove" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>permissions</code></b>&nbsp;&nbsp;
                    <small>integer[]</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="permissions[0]"
                        data-endpoint="POSTapi-permissions-remove" data-component="body">
                    <input type="number" style="display: none" name="permissions[1]"
                        data-endpoint="POSTapi-permissions-remove" data-component="body">
                    <br>

                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>userId</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="userId"
                        data-endpoint="POSTapi-permissions-remove" value="11" data-component="body">
                    <br>
                    <p>Example: <code>11</code></p>
                </div>
            </form>

            <h1 id="slide">Slide</h1>



            <h2 id="slide-GETapi-slides">Get all slides</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-slides">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/slides?lang=en" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/slides"
);

const params = {
    "lang": "en",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-slides">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;The operation was done successfully&quot;,
    &quot;result&quot;: {
        &quot;data&quot;: []
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-slides" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-slides"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-slides"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-slides" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-slides">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-slides" data-method="GET" data-path="api/slides" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-slides', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-slides" onclick="tryItOut('GETapi-slides');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-slides" onclick="cancelTryOut('GETapi-slides');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-slides" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/slides</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-slides" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-slides"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="status" data-endpoint="GETapi-slides"
                        value="" data-component="query">
                    <br>
                    <p>Sign of active or unactive</p>
                    Must be one of:
                    <ul style="list-style-type: square;">
                        <li><code>1</code></li>
                        <li><code>0</code></li>
                    </ul>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>lang</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="lang" data-endpoint="GETapi-slides"
                        value="en" data-component="query">
                    <br>
                    <p>Example: <code>en</code></p>
                    Must be one of:
                    <ul style="list-style-type: square;">
                        <li><code>uz</code></li>
                        <li><code>kr</code></li>
                        <li><code>en</code></li>
                        <li><code>ru</code></li>
                    </ul>
                </div>
            </form>

            <h2 id="slide-POSTapi-slides">Store new Slide</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-slides">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/slides" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"path\": null
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/slides"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "path": null
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-slides">
            </span>
            <span id="execution-results-POSTapi-slides" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-slides"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-slides"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-slides" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-slides">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-slides" data-method="POST" data-path="api/slides" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-slides', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-slides" onclick="tryItOut('POSTapi-slides');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-slides" onclick="cancelTryOut('POSTapi-slides');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-slides" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/slides</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-slides" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-slides"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="path" data-endpoint="POSTapi-slides"
                        value="" data-component="body">
                    <br>
                    <p>The path of image.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleRu</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleRu" data-endpoint="POSTapi-slides"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleKr</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleKr" data-endpoint="POSTapi-slides"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>titleUz</code></b>&nbsp;&nbsp;
                    <small>optional</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="titleUz" data-endpoint="POSTapi-slides"
                        value="" data-component="body">
                    <br>
                    <p>string.</p>
                </div>
            </form>

            <h2 id="slide-PUTapi-slides--id-">Update slide</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-slides--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request PUT \
    "http://172.16.4.97:8000/api/slides/9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/slides/9"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-PUTapi-slides--id-">
            </span>
            <span id="execution-results-PUTapi-slides--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-slides--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-slides--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-PUTapi-slides--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-slides--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-PUTapi-slides--id-" data-method="PUT" data-path="api/slides/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-slides--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-slides--id-" onclick="tryItOut('PUTapi-slides--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-slides--id-" onclick="cancelTryOut('PUTapi-slides--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-slides--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/slides/{id}</code></b>
                </p>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/slides/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="PUTapi-slides--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="PUTapi-slides--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="PUTapi-slides--id-" value="9" data-component="url">
                    <br>
                    <p>The ID of the slide. Example: <code>9</code></p>
                </div>
            </form>

            <h2 id="slide-DELETEapi-slides--id-">Delete slide</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-slides--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://172.16.4.97:8000/api/slides/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/slides/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEapi-slides--id-">
            </span>
            <span id="execution-results-DELETEapi-slides--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-slides--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-slides--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-slides--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-slides--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEapi-slides--id-" data-method="DELETE" data-path="api/slides/{id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-slides--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-slides--id-" onclick="tryItOut('DELETEapi-slides--id-');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-slides--id-" onclick="cancelTryOut('DELETEapi-slides--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-slides--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/slides/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEapi-slides--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="DELETEapi-slides--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="DELETEapi-slides--id-" value="3" data-component="url">
                    <br>
                    <p>The ID of the slide. Example: <code>3</code></p>
                </div>
            </form>

            <h1 id="upload-file">Upload File</h1>



            <h2 id="upload-file-POSTapi-upload--type-">Summary of store</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-upload--type-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/upload/{type}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "file=@C:\OSPanel\temp\PHP-8.1\default\php375F.tmp" </code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/upload/{type}"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-upload--type-">
            </span>
            <span id="execution-results-POSTapi-upload--type-" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-upload--type-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-upload--type-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-upload--type-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-upload--type-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-upload--type-" data-method="POST" data-path="api/upload/{type}"
                data-authed="0" data-hasfiles="1" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-upload--type-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-upload--type-" onclick="tryItOut('POSTapi-upload--type-');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-upload--type-" onclick="cancelTryOut('POSTapi-upload--type-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-upload--type-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/upload/{type}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-upload--type-" value="multipart/form-data" data-component="header">
                    <br>
                    <p>Example: <code>multipart/form-data</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSTapi-upload--type-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="type"
                        data-endpoint="POSTapi-upload--type-" value="" data-component="url">
                    <br>
                    <p>in [&quot;news&quot;, &quot;slide&quot;].</p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>file</code></b>&nbsp;&nbsp;
                    <small>file</small>&nbsp;
                    &nbsp;
                    <input type="file" style="display: none" name="file"
                        data-endpoint="POSTapi-upload--type-" value="" data-component="body">
                    <br>
                    <p>Must be a file. Must not be greater than 4096 kilobytes. Example:
                        <code>C:\OSPanel\temp\PHP-8.1\default\php375F.tmp</code></p>
                </div>
            </form>

            <h1 id="user">User</h1>



            <h2 id="user-GETapi-users-personal-details">GET api/users/personal-details</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-users-personal-details">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/users/personal-details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/users/personal-details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-users-personal-details">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-users-personal-details" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-GETapi-users-personal-details"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-users-personal-details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-users-personal-details" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-users-personal-details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-users-personal-details" data-method="GET" data-path="api/users/personal-details"
                data-authed="0" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-users-personal-details', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-users-personal-details"
                        onclick="tryItOut('GETapi-users-personal-details');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-users-personal-details"
                        onclick="cancelTryOut('GETapi-users-personal-details');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-users-personal-details" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/users/personal-details</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-users-personal-details" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-users-personal-details" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="user-GETapi-users">Display a listing of the resource.</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-users">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-users">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-users" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:
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
            <form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-users" onclick="tryItOut('GETapi-users');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-users" onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-users" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
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
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="GETapi-users"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-users"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="user-POSTapi-users">POST api/users</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-users">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://172.16.4.97:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"nostrum\",
    \"email\": \"sabina43@example.org\",
    \"fullname\": \"provident\",
    \"password\": \"\\\",Ip&amp;4\\/SQ&lt;\'qo~?\\/.[Pl\",
    \"permissions\": [
        6
    ]
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "nostrum",
    "email": "sabina43@example.org",
    "fullname": "provident",
    "password": "\",Ip&amp;4\/SQ&lt;'qo~?\/.[Pl",
    "permissions": [
        6
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-users">
            </span>
            <span id="execution-results-POSTapi-users" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-users"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-users" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-users" data-method="POST" data-path="api/users" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-users" onclick="tryItOut('POSTapi-users');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-users" onclick="cancelTryOut('POSTapi-users');" hidden>Cancel
                        🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-users" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/users</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-users" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-users"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    <i>optional</i> &nbsp;
                    <input type="text" style="display: none" name="username" data-endpoint="POSTapi-users"
                        value="nostrum" data-component="body">
                    <br>
                    <p>Example: <code>nostrum</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTapi-users"
                        value="sabina43@example.org" data-component="body">
                    <br>
                    <p>Must be a valid email address. Example: <code>sabina43@example.org</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>fullname</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="fullname" data-endpoint="POSTapi-users"
                        value="provident" data-component="body">
                    <br>
                    <p>Example: <code>provident</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTapi-users"
                        value="",Ip&4/SQ<'qo~?/.[Pl" data-component="body">
                    <br>
                    <p>Must be at least 6 characters. Example: <code>",Ip&amp;4/SQ&lt;'qo~?/.[Pl</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>permissions</code></b>&nbsp;&nbsp;
                    <small>integer[]</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="permissions[0]"
                        data-endpoint="POSTapi-users" data-component="body">
                    <input type="number" style="display: none" name="permissions[1]"
                        data-endpoint="POSTapi-users" data-component="body">
                    <br>

                </div>
            </form>

            <h2 id="user-GETapi-users--id-">GET api/users/{id}</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-users--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://172.16.4.97:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-users--id-">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-users--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-users--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-users--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-users--id-" data-method="GET" data-path="api/users/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-users--id-" onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-users--id-" onclick="cancelTryOut('GETapi-users--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-users--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/users/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-users--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-users--id-"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="GETapi-users--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the user. Example: <code>1</code></p>
                </div>
            </form>

            <h2 id="user-DELETEapi-users--id-">DELETE api/users/{id}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-users--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request DELETE \
    "http://172.16.4.97:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://172.16.4.97:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-DELETEapi-users--id-">
            </span>
            <span id="execution-results-DELETEapi-users--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-users--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-users--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-DELETEapi-users--id-" data-method="DELETE" data-path="api/users/{id}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-users--id-" onclick="tryItOut('DELETEapi-users--id-');">Try it out
                        ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-users--id-" onclick="cancelTryOut('DELETEapi-users--id-');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-users--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/users/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="DELETEapi-users--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="DELETEapi-users--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>integer</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" step="any" name="id"
                        data-endpoint="DELETEapi-users--id-" value="1" data-component="url">
                    <br>
                    <p>The ID of the user. Example: <code>1</code></p>
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
