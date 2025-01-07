<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Kod</title>
</head>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 95vh;
        flex-direction: column;
    }

    .card {
        background-color: lightgray;
        padding: 15px 40px 40px 40px;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    h3 {
        font-size: 2rem;
        color: #333;
    }

    p {
        font-size: 1.5rem;
    }

    span {
        font-weight: bold;
        font-size: 4rem;
        color: darkgreen;
    }

    span>span {
        font-size: 2rem;
        color: darkgreen;
    }
</style>

<body>
    <div class="container">
        <div class="card">
            <h3>{{ $urun_adi }}</h3>
            <p>Uygulanacak olan indirim</p>
            <span><span>%</span>{{ $discount_number }}</span>
        </div>
    </div>
</body>

</html>
