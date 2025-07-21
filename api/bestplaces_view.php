<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best Places Around the World</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #222;
            color: #fff;
        }
        .container {
            margin-top: 40px;
        }
        .well {
            background: rgba(255,255,255,0.08);
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            color: #fff;
        }
        h2 {
            color: #ffbb2b;
        }
        #places-list li {
            background: rgba(255,255,255,0.12);
            margin-bottom: 10px;
            padding: 12px 18px;
            border-radius: 6px;
            font-size: 1.1em;
            box-shadow: 0 1px 4px rgba(0,0,0,0.08);
        }
        #places-list strong {
            color: #36a2eb;
        }
    </style>
</head>
<body>
    <div class="container well">
        <h2 class="mb-4 text-center">Best Places Around the World</h2>
        <ul id="places-list"></ul>
    </div>
    <script>
    fetch('bestplace.php')
      .then(response => response.json())
      .then(data => {
        const list = document.getElementById('places-list');
        list.innerHTML = "";
        data.places.forEach(place => {
          const li = document.createElement('li');
          li.innerHTML = `<strong>${place.title}</strong> (${place.city}, ${place.country}): ${place.snippet}`;
          list.appendChild(li);
        });
      })
      .catch(error => {
        document.getElementById('places-list').innerHTML = "<li>Could not load places.</li>";
        console.error(error);
      });
    </script>
</body>
</html>