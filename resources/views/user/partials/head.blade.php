<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News Website</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    html, body {
        height: 100%;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    .container {
        flex: 1;
    }
    footer {
        
        color: white;
        padding: 1rem 0;
    }
    .comments-container {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .comment {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .comment-form {
            margin-top: 10px;
        }
        .comment-form textarea {
            resize: none;
        }

        .container-body {
            min-height: calc(100vh - 56px - 56px); /* Adjust based on header and footer height */
            padding-bottom: 56px; /* Adjust based on footer height */
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: white !important;
            border-radius: 5px;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-outline-light:hover {
            background-color: white;
            color: #007bff;
        }
</style>
