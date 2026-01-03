<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hope horizon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans bg-gray-100">
   
  <x-header />

    <main>

      <x-hero />
        


      <x-stats :stats="$stats" />

      <x-whywe/>

      <x-feature/>

      <x-story/>

      <x-volunteer/>

    </main>

    <x-footer />

  


</body>

</html>
