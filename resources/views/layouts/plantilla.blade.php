<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="tailwind.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-white">

  <header class="bg-neutral-950 shadow px-6">
    
    <div class="flex h-15 items-center justify-between">

    <img src="./imagenes/logo.jpg" alt="Logo" class="h-8 mr-2">

      <h1 class="text-xl text-white font-bold mt-1 mb-1">EduFinMx</h1>
        
      <a href="{{route('home')}}"><button class="px-2 w-15 items-center rounded-md text-gray-400  hover:text-amber-300" onclick="Home()">
        <svg class="text-center h-10 p-2"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
         Home
      </button></a>
      
      <a href="{{route('Lecciones')}}"><button class="px-2 w-15 items-center rounded-md text-gray-400 hover:text-amber-300">
        <svg class="justify-center w-full h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
        </svg> 
        Lecciones
      </button></a>

      <a href="{{route('Declaraciones')}}"> <button class="px-2px-2 w-15 items-center justify-center rounded-md text-gray-400 hover:text-amber-300">
        <svg class="justify-center w-full h-10 p-2"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
         Declaraciones
      </button></a>

      <a href="{{route('Ahooro')}}"> <button class="px-2px-2 w-15 items-center justify-center rounded-md text-gray-400 hover:text-amber-300">
  <svg class="justify-center w-full h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
  </svg>  
   Ahorro e inversión
</button></a>


<a href="{{route('perfil')}}"><button class="px-2px-2 w-15 items-center justify-center rounded-md text-gray-400 hover:text-amber-300">
        <svg class="justify-center w-full h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg> Perfil
      </button></a>
    </div>

  </div>

  </header >
  <main class="flex-grow ml-5 mr-5 text-xl mt-1 mb-1">
    @yield('contenido')
  </main>

    <footer class="h-10 w-full bg-gray-200  px-9">
        <p class="text-2 text-center  font-bold  justify-between">&copy; 2024 EduFinMx. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
