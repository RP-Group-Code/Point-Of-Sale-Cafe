<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">  
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
{{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
<style>
    .w3-button .w3-teal {
        color: #ffffff !important;
        background-color: #ffffff !important;
    }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    body {
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .sidebar {
        position: fixed;
        background: #fafafa;
        border: 0.1px solid #bbcabd;
        width: 230px;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .sidebar h2 {
        text-align: center;
        font-size: 20px;
        text-transform: uppercase;
        color: #ffffff;
        background: #198754;
        padding: 20px;
        font-weight: bold;
        margin-top: -0.5rem;

    }

    .sidebar a{
        text-decoration:none
    }

    .sidebar ul li {
        margin: 20px 0;
    }

    .sidebar ul li a {
        color: #ffffff;
        padding: 0 30px;

    }

    .main {
        margin-left: 200px;
        padding: 5px;
    }
    .sidebar .nav a span{
        color: #000000;

    }

</style>