<?php include 'templates/header.php'; ?>
    <!-- Main Content -->
    <main>
      <!-- Hero Section -->
      <section class="py-20 lg:py-32 bg-gradient-to-br from-eco-green-50 to-eco-blue-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in">
              <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                Power Your Future with
                <span class="bg-gradient-to-r from-eco-green-500 to-eco-blue-500 bg-clip-text text-transparent">Clean Energy</span>
              </h1>
              <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Join the renewable energy revolution. EcoVolt provides cutting-edge solar, wind, and hydro solutions 
                that reduce costs, increase energy independence, and protect our planet.
              </p>
              <div class="flex flex-col sm:flex-row gap-4">
                <button class="bg-gradient-to-r from-eco-green-500 to-eco-blue-500 text-white px-8 py-3 rounded-md hover:opacity-90 transition-opacity flex items-center justify-center">
                  <a href="solution.php">
                    Learn More
                  </a>
                  <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </button>
                <button class="border border-eco-green-300 text-eco-green-700 px-8 py-3 rounded-md hover:bg-eco-green-50 transition-colors flex items-center justify-center">
                  <a href="https://youtu.be/1kUE0BZtTRc?si=zvXejUNLapcYAib5" target="_blank" rel="noopener noreferrer">
                  </a>
                  <span class="ml-2 ">Watch Demo</span>
                </button>
              </div>
            </div>
            <div class="relative">
              <img src="assets/img/hero.jpg" alt="Renewable Energy" class="w-full h-96 object-cover rounded-2xl shadow-2xl animate-float">
            </div>
          </div>
        </div>
      </section>

      <!-- Features Section -->
      <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
              Why Choose EcoVolt?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              We're committed to delivering innovative renewable energy solutions that benefit both your bottom line and the environment.
            </p>
          </div>

          <!-- Cards Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Solar Energy Card -->
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg p-6 text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-eco-green-500 to-eco-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined" style="color: #ffffff;">
                  solar_power
                </span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Solar Energy</h3>
              <p class="text-gray-600">Harness the power of the sun for a cleaner tomorrow</p>
            </div>

            <!-- Wind Power Card -->
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg p-6 text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-eco-green-500 to-eco-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined" style="color: #ffffff;">
                  wind_power
                </span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Wind Power</h3>
              <p class="text-gray-600">Convert wind into clean electricity efficiently</p>
            </div>

            <!-- Hydro Power Card -->
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg p-6 text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-eco-green-500 to-eco-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined" style="color: #ffffff;">
                  water_ec
                </span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Hydro Power</h3>
              <p class="text-gray-600">Generate clean energy from flowing water</p>
            </div>

            <!-- Reliable Power Card -->
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg p-6 text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-eco-green-500 to-eco-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined" style="color: #ffffff;">
                  wb_incandescent
                </span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Reliable</h3>
              <p class="text-gray-600">Dependable power systems for long-term performance</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Stats Section -->
      <section class="py-20 bg-gradient-to-r from-eco-green-500 to-eco-blue-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center text-white">
              <div class="text-4xl lg:text-5xl font-bold mb-2">10,000+</div>
              <div class="text-lg opacity-90">Homes Powered</div>
            </div>
            <div class="text-center text-white">
              <div class="text-4xl lg:text-5xl font-bold mb-2">500MW</div>
              <div class="text-lg opacity-90">Energy Generated</div>
            </div>
            <div class="text-center text-white">
              <div class="text-4xl lg:text-5xl font-bold mb-2">95%</div>
              <div class="text-lg opacity-90">Client Satisfaction</div>
            </div>
            <div class="text-center text-white">
              <div class="text-4xl lg:text-5xl font-bold mb-2">50+</div>
              <div class="text-lg opacity-90">Projects Completed</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Solutions Preview -->
      <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
              Our Energy Solutions
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              From residential solar installations to large-scale wind farms and hydro power, we have the expertise to power your vision.
            </p>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg overflow-hidden">
              <img src="assets/img/solar.jpg" alt="Solar Energy" class="h-48 w-full object-cover">
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Solar Energy</h3>
                <p class="text-gray-600 mb-4">Harness the power of the sun with our advanced photovoltaic systems.</p>
                <a href="solution.php" class="text-eco-green-600 hover:text-eco-green-700 font-medium inline-flex items-center">
                  Learn More
                  <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg overflow-hidden">
              <img src="assets/img/turbin.jpg" alt="Wind Power" class="h-48 w-full object-cover">
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Wind Power</h3>
                <p class="text-gray-600 mb-4">Convert wind into clean electricity with our efficient turbine solutions.</p>
                <a href="solution.php" class="text-eco-green-600 hover:text-eco-green-700 font-medium inline-flex items-center">
                  Learn More
                  <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg overflow-hidden">
              <img src="assets/img/dam.jpg" alt="Hydro Power" class="h-48 w-full object-cover">
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Hydro Power</h3>
                <p class="text-gray-600 mb-4">Generate clean energy from flowing water with our hydroelectric systems.</p>
                <a href="solution.php" class="text-eco-green-600 hover:text-eco-green-700 font-medium inline-flex items-center">
                  Learn More
                  <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
            <div class="hover-lift bg-white border-0 shadow-lg rounded-lg overflow-hidden">
              <img src="assets/img/energy-storage.jpg" alt="Hydro Power" class="h-48 w-full object-cover">
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Energy Storage</h3>
                <p class="text-gray-600 mb-4">Store and manage your renewable energy with cutting-edge battery systems.</p>
                <a href="solution.php" class="text-eco-green-600 hover:text-eco-green-700 font-medium inline-flex items-center">
                  Learn More
                  <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Ready to Go Green?
          </h2>
          <p class="text-xl text-gray-600 mb-8">
            Join thousands of satisfied customers who have made the switch to clean energy. Contact us today to learn more.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-gradient-to-r from-eco-green-500 to-eco-blue-500 text-white px-8 py-3 rounded-md hover:opacity-90 transition-opacity">
              Contact Us
            </button>
            <button class="border border-eco-green-300 text-eco-green-700 px-8 py-3 rounded-md hover:bg-eco-green-50 transition-colors">
              <a href="resources.php">
                Learn More
              </a>
            </button>
          </div>
        </div>
      </section>
    </main>
<?php include 'templates/footer.php'; ?>