<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>San Jose National High School Student Portal: Secure Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap');

    .font-crimson {
      font-family: 'Crimson Text', serif;
    }

    .font-open {
      font-family: 'Open Sans', sans-serif;
    }

    /* ✅ Light Green Theme */
    .light-green {
      background-color: #22c55e; /* Tailwind green-600 */
    }

    .light-green-text {
      color: #22c55e;
    }

    .gradient-bg {
      background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(22, 163, 74, 0.1) 100%);
    }

    .login-shadow {
      box-shadow: 0 20px 50px rgba(34, 197, 94, 0.15);
    }

    /* Animations */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.9s ease-out;
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    .slide-in {
      opacity: 0;
      transform: translateX(-30px);
      transition: all 1s ease-out;
    }

    .slide-in.show {
      opacity: 1;
      transform: translateX(0);
    }
  </style>
</head>

<body class="bg-slate-50 min-h-screen font-open gradient-bg">
  <!-- Navigation -->
  <div class="navbar bg-white shadow-lg border-b-2 border-green-700">
    <div class="navbar-start">
      <a href="/" class="btn btn-ghost normal-case text-sm md:text-xl font-crimson text-green-700 font-bold">
        <i class="fas fa-university mr-1 md:mr-2"></i> San Jose National High School Student Portal
      </a>
    </div>
    <div class="navbar-end">
      <a href="/" class="btn btn-ghost btn-sm text-gray-700 hover:text-green-700">Back to Home</a>
    </div>
  </div>

  <!-- Login Section -->
  <div class="min-h-[85vh] flex items-center justify-center p-4">
    <div class="card w-full max-w-md bg-white login-shadow border border-gray-100 fade-in">
      <div class="card-body p-6 md:p-8">
        <!-- Branding -->
        <div class="text-center mb-6">
          <div
            class="w-24 h-24 mx-auto mb-4 bg-green-50 rounded-full flex items-center justify-center border-4 border-green-100">
            <i class="fas fa-university text-3xl light-green-text"></i>
          </div>
          <h1 class="text-2xl md:text-3xl font-bold font-crimson light-green-text mb-2">
            Student Portal
          </h1>
          <p class="text-sm md:text-base text-gray-600 font-open">
            Access your academic dashboard
          </p>
          <div class="w-16 h-1 light-green mx-auto mt-3 rounded"></div>
        </div>

        <!-- Login Form -->
        <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
          @csrf

          <div class="form-control">
            <label class="label">
              <span class="label-text font-medium text-gray-700 font-open">Student ID</span>
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-id-card text-gray-400"></i>
              </div>
              <input type="text" name="student_number" placeholder="Enter your Student ID"
                class="input input-bordered w-full pl-10 focus:border-green-700 focus:ring-1 focus:ring-green-700 bg-white"
                required />
            </div>
          </div>

          <div class="form-control">
            <label class="label">
              <span class="label-text font-medium text-gray-700 font-open">Password</span>
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400"></i>
              </div>
              <input type="password" name="password" placeholder="Enter your password"
                class="input input-bordered w-full pl-10 focus:border-green-700 focus:ring-1 focus:ring-green-700 bg-white"
                required />
            </div>
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between text-sm">
            <label class="cursor-pointer label">
              <input type="checkbox" class="checkbox checkbox-sm mr-2" />
              <span class="label-text text-gray-600">Remember me</span>
            </label>
            <a href="#" class="link link-hover light-green-text font-medium">Forgot password?</a>
          </div>

          <div class="form-control mt-6">
            <button type="submit"
              class="btn light-green text-white hover:bg-green-800 border-none font-semibold py-3">
              <i class="fas fa-sign-in-alt mr-2"></i>
              Access Portal
            </button>
          </div>
        </form>

        <div class="divider mt-6 mb-4">
          <span class="text-gray-400 text-xs font-open">SECURE LOGIN</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
  <section class="bg-white py-16 fade-in">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl md:text-3xl font-bold font-crimson light-green-text mb-8">
        What Our Students Say
      </h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 shadow-lg rounded-lg border border-gray-200 slide-in">
          <p class="text-gray-600 mb-4">"This portal makes managing my academic life so much easier."</p>
          <h3 class="font-crimson font-bold light-green-text">– John Doe</h3>
        </div>
        <div class="p-6 shadow-lg rounded-lg border border-gray-200 slide-in">
          <p class="text-gray-600 mb-4">"Clean design and fast access to my grades."</p>
          <h3 class="font-crimson font-bold light-green-text">– Jane Smith</h3>
        </div>
        <div class="p-6 shadow-lg rounded-lg border border-gray-200 slide-in">
          <p class="text-gray-600 mb-4">"Secure and reliable – just what students need."</p>
          <h3 class="font-crimson font-bold light-green-text">– Alex Carter</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-6 fade-in">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <p class="text-sm font-crimson">
            © 2025 San Jose National High School
          </p>
          <p class="text-xs text-gray-400 mt-1">
            All rights reserved • San Jose, Occidental Mindoro
          </p>
        </div>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Script for animations -->
  <script>
    const elements = document.querySelectorAll('.fade-in, .slide-in');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
  </script>
</body>

</html>
