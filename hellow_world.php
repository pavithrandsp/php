<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #83a4d4, #b6fbff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            font-size: 3rem;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            opacity: 0;
            animation: fadeIn 3s ease-in-out forwards, glow 1.5s infinite alternate;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes glow {
            0% { text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); }
            100% { text-shadow: 0 0 20px rgba(255, 255, 255, 0.9); }
        }

        #btn {
            padding: 10px 20px;
            background-color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            color: #000;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            animation: fadeInButton 2s ease-in-out 2s forwards;
            opacity: 0;
        }

        #btn:hover {
            background-color: #ddd;
        }

        @keyframes fadeInButton {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Hello, World!</h1>
        <button id="btn" onclick="changeText()">Click Me!</button>
    </div>

    <script>
        function changeText() {
            document.querySelector('h1').textContent = "Hello, Universe!";
            document.querySelector('h1').style.color = "#FFD700";
        }
    </script>
</body>
</html>
