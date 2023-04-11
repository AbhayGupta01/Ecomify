<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        .parent_menu
        {
            display:flex;
            justify-content:start;
            gap:30px;

        }
        .parent_menu div
        {
            padding:10px;
        }
        .parent_menu a
        {
            color:inherit;
            border-radius:10px;
            padding: 10px;
            text-decoration:none;
        }
        .parent_menu a:hover
        {
            background-color:#3461a8;
            
        }
    </style>

</head>
<body>
    
    <div class="parent_menu bg-primary p-4 text-white w-100" >

    <div>
        <a href='index.php'>Upload Product</a>
    </div>
    <div>
        <a href='view.php'>View Products</a>
    </div>
    <div>
        <a href='order.php'>View order</a>
    </div>

    </div>


</body>
</html>