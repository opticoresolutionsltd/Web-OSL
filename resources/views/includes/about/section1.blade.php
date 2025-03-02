<div class="sm:flex items-center place-self-center max-w-screen-xl pt-10">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="{{Vite::asset('resources/images/about-us.png')}}">
        </div>
    </div>
    <div class="sm:w-1/2 p-5">
        <div class="text">
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-[#1B4071]">{{config('opticore.brand_name')}}</span>
            </h2>
            <p class="text-gray-700 text-lg">
                At Opticore Solutions Limited, we believe in the transformative power of creativity to elevate brands and drive business growth. Our mission is simple yet profound: to help you communicate your brand effectively and make a lasting impact in your industry.
            </p>
        </div>
    </div>
</div>

<!-- Who We Are Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Who We Are</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <p class="text-gray-600 leading-relaxed text-lg">We are a team of passionate creatives, strategists, and technologists who thrive on innovation.
                    With years of experience across diverse industries, we bring a fresh perspective to every
                    project, ensuring that your brand stands out in today’s competitive landscape.</p>
                <p class="text-gray-600 leading-relaxed text-lg">From startups to established enterprises, we partner with businesses of all sizes to craft tailored
                    solutions that align with their unique goals. Whether it’s designing a stunning website, creating
                    captivating visuals, or executing a robust digital marketing strategy, we’re here to turn your
                    vision into reality.</p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Team Collaboration" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-8">Why Choose Us</h2>
        <p class="text-xl text-gray-600 mb-16 text-center">In a world full of options, here’s why Opticore Solutions Limited should be your go-to creative partner:</p>
        <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <img src="{{Vite::asset('resources/images/tailored solution.svg')}}" class="h-12 w-12 text-blue-100"/>
                </div>
                <h3 class="text-xl font-semibold mb-4">Tailored Solutions</h3>
                <p class="text-gray-600">No two businesses are alike—and neither are our solutions. We take the time to understand your needs, challenges, and aspirations, ensuring that every deliverable is perfectly aligned with your vision.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <img src="{{Vite::asset('resources/images/Expert team.svg')}}" class="h-12 w-12 text-blue-100"/>
                </div>
                <h3 class="text-xl font-semibold mb-4">Expert Team</h3>
                <p class="text-gray-600">Our team consists of seasoned professionals who live and breathe creativity. From designers to developers, marketers to videographers, each member brings a wealth of knowledge and a passion for excellence.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <img src="{{Vite::asset('resources/images/end-end.svg')}}" class="h-12 w-12 text-blue-100"/>
                </div>
                <h3 class="text-xl font-semibold mb-4">End-to-End Services</h3>
                <p class="text-gray-600">From concept to execution, we handle everything under one roof. This streamlined approach saves you time, reduces complexity, and ensures consistency across all touchpoints.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <img src="{{Vite::asset('resources/images/quality.svg')}}" class="h-12 w-12 text-blue-100"/>
                </div>
                <h3 class="text-xl font-semibold mb-4">Commitment to Quality</h3>
                <p class="text-gray-600">We don’t just meet expectations—we exceed them. Every project undergoes rigorous quality checks to ensure it meets the highest standards before reaching your hands.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <img src="{{Vite::asset('resources/images/communication.svg')}}" class="h-12 w-12 text-blue-100"/>
                </div>
                <h3 class="text-xl font-semibold mb-4">Transparent Communication</h3>
                <p class="text-gray-600">Your voice matters. We keep you involved at every stage, providing regular updates and seeking feedback to ensure the final result reflects your goals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Our Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-6 w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{Vite::asset('resources/images/creativity.svg')}}" class="h-8 w-20 scale-150"/>
                </div>
                <h3 class="text-xl font-semibold mb-2">Creativity</h3>
                <p class="text-gray-600">Pushing boundaries to deliver innovative solutions.</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-6 w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{Vite::asset('resources/images/collaboration.svg')}}" class="h-8 w-20 scale-150"/>
                </div>
                <h3 class="text-xl font-semibold mb-2">Collaboration</h3>
                <p class="text-gray-600">Working closely with you as a true partner.</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-6 w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{Vite::asset('resources/images/integrity.svg')}}" class="h-8 w-20 scale-150"/>
                </div>
                <h3 class="text-xl font-semibold mb-2">Integrity</h3>
                <p class="text-gray-600">Being honest, transparent, and accountable in all interactions.</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-6 w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{Vite::asset('resources/images/excellence.svg')}}" class="h-8 w-20 scale-150"/>
                </div>
                <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                <p class="text-gray-600">Striving for perfection in every detail.</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-6 w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="{{Vite::asset('resources/images/impact.svg')}}" class="h-8 w-20 scale-150"/>
                </div>
                <h3 class="text-xl font-semibold mb-2">Impact</h3>
                <p class="text-gray-600">Focusing on results that make a real difference.</p>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="py-20 bg-[#1B4071] text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Our Achievements</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold mb-4"><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1.5" class="purecounter">0</span>+</div>
                <p class="text-xl">Projects Completed</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-4"><span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1.5" class="purecounter">0</span>+</div>
                <p class="text-xl">Team Members</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-4"><span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1.5" class="purecounter">0</span>+</div>
                <p class="text-xl">Countries Served</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-4"><span data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="1.5" class="purecounter">0</span>%</div>
                <p class="text-xl">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-8">Let’s Create Something Extraordinary Together</h2>
        <p class="text-xl text-gray-600 mb-8">At Opticore Solutions Limited, we’re more than just a service provider—we’re your creative partner. Whether you’re looking to revamp your brand, launch a new product, or scale your business, we’re here to guide you every step of the way.</p>
        <p class="text-xl text-gray-600 mb-8">Ready to take the next step? Let’s connect and explore how we can help you achieve your goals.</p>
        <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Get In Touch</a>
    </div>
</section>

