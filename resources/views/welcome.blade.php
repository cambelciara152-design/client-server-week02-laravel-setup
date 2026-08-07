<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Server Week 02 Laravel Setup</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ff9ec4,#cdb4ff,#a2d2ff);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;
        }

        .card{
            background:#fff;
            width:550px;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.2);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .header{
            background:#9c2267;
            color:white;
            text-align:center;
            padding:35px 20px;
        }

        .header h1{
            font-size:30px;
            margin-bottom:8px;
        }

        .header p{
            font-size:15px;
            opacity:.9;
        }

        .content{
            padding:30px;
        }

        .info{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 18px;
            margin-bottom:12px;
            background:#f8f8f8;
            border-left:6px solid #9c2267;
            border-radius:10px;
        }

        .label{
            font-weight:600;
            color:#555;
        }

        .value{
            color:#333;
        }

        .footer{
            text-align:center;
            padding:18px;
            background:#fafafa;
            color:#777;
            font-size:14px;
        }
    </style>

</head>
<body>

<div class="card">

    <div class="header">
        <h1>Laravel Setup Activity</h1>
        <p>Client-Server Technologies • Week 02</p>
    </div>

    <div class="content">

        <div class="info">
            <span class="label"> Student Name</span>
            <span class="value">Ciara Jane P. Cambel</span>
        </div>

        <div class="info">
            <span class="label"> Student Number</span>
            <span class="value">0124-1349</span>
        </div>

        <div class="info">
            <span class="label"> Course</span>
            <span class="value">BS Information Technology</span>
        </div>

        <div class="info">
            <span class="label"> Section</span>
            <span class="value">BSIT-3D</span>
        </div>

        <div class="info">
            <span class="label"> Subject</span>
            <span class="value">Client-Server Technologies</span>
        </div>

        <div class="info">
            <span class="label"> Current Date</span>
            <span class="value">{{ date('F d, Y') }}</span>
        </div>

    </div>

    <div class="footer">
        Laravel Setup Activity | Week 02
    </div>

</div>

</body>
</html>
