<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>San Jose National High School Student Portal</title>
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

    /* Light Green Theme */
    .light-green {
      background-color: #22c55e;
    }

    .light-green-text {
      color: #16a34a;
    }

    .gradient-overlay {
      background: linear-gradient(135deg, rgba(136, 253, 155, 0.85) 0%, rgba(34, 197, 94, 0.9) 100%);
    }

    /* Fade In */
    .fade-in {
      animation: fadeIn 1.2s ease-in-out forwards;
      opacity: 0;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Glass Effect */
    .glass-bg {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* Hover Cards */
    .hover-scale {
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hover-scale:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }

    /* Slide-in animations */
    .slide-in-left,
    .slide-in-right {
      opacity: 0;
      transform: translateX(100px);
      transition: all 0.8s ease-out;
    }

    .slide-in-left {
      transform: translateX(-100px);
    }

    .slide-visible {
      opacity: 1 !important;
      transform: translateX(0) !important;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-green-50 to-white min-h-screen font-open">

  <!-- Navigation -->
  <div class="navbar bg-white shadow-lg border-b-2 border-green-700 fade-in">
    <div class="navbar-start">
      <a class="btn btn-ghost normal-case text-xl font-crimson light-green-text font-bold">
        <i class="fas fa-university mr-2"></i> SJ National High School Portal
      </a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a class="font-medium text-gray-700 hover:text-green-700 transition-colors">Home</a></li>
        <li><a class="font-medium text-gray-700 hover:text-green-700 transition-colors">Academics</a></li>
        <li><a class="font-medium text-gray-700 hover:text-green-700 transition-colors">Research</a></li>
        <li><a class="font-medium text-gray-700 hover:text-green-700 transition-colors">Campus Life</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="{{ route('login.form') }}" class="btn light-green text-white hover:bg-green-700 border-none transition-all">Access
        Portal</a>
    </div>
  </div>
  <!-- Hero Section -->
  <div class="relative min-h-[70vh] bg-cover bg-center"
    style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.c4RP6ko1VLRtUtAiOEoOegHaFe?cb=ucfimg2ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3');">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="relative hero min-h-[70vh]">
      <div class="hero-content text-center text-white p-4 md:p-8 fade-in glass-bg rounded-xl">
        <div class="max-w-4xl">
          <h1 class="text-4xl md:text-6xl font-bold font-crimson mb-4 animate-bounce">
            San Jose National High School Student Portal
          </h1>
          <h2 class="text-xl md:text-3xl mb-6 font-crimson opacity-90">
            Excellence Through Digital Innovation
          </h2>
          <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
            Experience seamless academic management with tools designed for modern digital education.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('login.form') }}"
              class="btn btn-lg bg-white light-green-text hover:bg-green-50 border-none font-semibold transition-all">
              Enter Portal
            </a>
            <a href="#features"
              class="btn btn-lg btn-outline text-white border-white hover:bg-white hover:text-green-700 transition-all">
              Explore Features
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div id="features" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-crimson light-green-text fade-in">
        Portal Capabilities
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card bg-white shadow-xl border border-gray-200 hover-scale">
          <div class="card-body items-center text-center">
            <i class="fas fa-medal text-4xl light-green-text mb-4"></i>
            <h3 class="card-title text-xl font-crimson">Academic Excellence</h3>
            <p class="text-gray-600">Track grades and performance with modern digital tools.</p>
          </div>
        </div>
        <div class="card bg-white shadow-xl border border-gray-200 hover-scale">
          <div class="card-body items-center text-center">
            <i class="fas fa-users text-4xl light-green-text mb-4"></i>
            <h3 class="card-title text-xl font-crimson">Community Engagement</h3>
            <p class="text-gray-600">Connect with peers, faculty, and the broader community.</p>
          </div>
        </div>
        <div class="card bg-white shadow-xl border border-gray-200 hover-scale">
          <div class="card-body items-center text-center">
            <i class="fas fa-brain text-4xl light-green-text mb-4"></i>
            <h3 class="card-title text-xl font-crimson">Research Resources</h3>
            <p class="text-gray-600">Access vast digital libraries and research databases.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-crimson light-green-text">
        Voices from Students & Teachers
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <div class="card bg-gray-50 shadow-lg border slide-in-left">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80"
                    alt="Professor" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold font-crimson">Professor James Mitchell</h3>
                <p class="text-sm text-gray-600">Kennedy School of Government</p>
              </div>
            </div>
            <p class="text-gray-700 italic">
              "This portal exemplifies dedication to innovation in education. It seamlessly integrates academic
              traditions with technology."
            </p>
          </div>
        </div>

        <div class="card bg-gray-50 shadow-lg border slide-in-right">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://images.unsplash.com/photo-1494790108755-2616c5e83a78?auto=format&fit=crop&q=80"
                    alt="Student" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold font-crimson">Emily Rodriguez</h3>
                <p class="text-sm text-gray-600">Graduate Student</p>
              </div>
            </div>
            <p class="text-gray-700 italic">
              "The intuitive design and comprehensive features have transformed how I engage with my coursework."
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="py-16 light-green text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 font-crimson">
        Begin Your Journey
      </h2>
      <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
        Join the legacy of excellence. Access your academic portal and become part of our continuing story of discovery.
      </p>
      <a href="{{ route('login.form') }}"
        class="btn btn-lg bg-white light-green-text hover:bg-green-50 border-none font-semibold transition-all">
        Access Your Portal
      </a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer p-10 bg-gray-900 text-gray-300 slide-in-left">
    <div>
      <span class="footer-title text-white font-crimson">Our School</span>
      <a class="link link-hover">About Us</a>
      <a class="link link-hover">Programs</a>
      <a class="link link-hover">Research</a>
      <a class="link link-hover">Community</a>
    </div>
    <div>
      <span class="footer-title text-white font-crimson">Portal</span>
      <a class="link link-hover">Features</a>
      <a class="link link-hover">Support</a>
      <a class="link link-hover">Guidelines</a>
      <a class="link link-hover">Privacy</a>
    </div>
    <div>
      <span class="footer-title text-white font-crimson">Contact</span>
      <a class="link link-hover">San Jose, Philippines</a>
      <a class="link link-hover">info@sjnational.edu</a>
      <a class="link link-hover">+63 900 123 4567</a>
      <div class="grid grid-flow-col gap-4 mt-2">
        <a><i class="fab fa-facebook-f text-lg hover:text-green-400"></i></a>
        <a><i class="fab fa-twitter text-lg hover:text-green-400"></i></a>
        <a><i class="fab fa-linkedin text-lg hover:text-green-400"></i></a>
        <a><i class="fab fa-youtube text-lg hover:text-green-400"></i></a>
      </div>
    </div>
  </footer>
  <footer class="footer footer-center p-4 bg-black text-gray-400 slide-in-right">
    <div>
      <p class="font-crimson">© 2025 San Jose National High School. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scroll Animation Script -->
  <script>
    const elements = document.querySelectorAll('.slide-in-left, .slide-in-right');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('slide-visible');
        }
      });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
  </script>

</body>

</html>
