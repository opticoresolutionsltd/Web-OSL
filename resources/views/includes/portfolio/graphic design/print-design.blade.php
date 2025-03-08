<section id="portfolio" class="portfolio-section py-16 px-4 mt-10">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 mt-10">Print Design Portfolio Showcase</h2>
            <p class="text-lg text-indigo-500 font-semibold">Discover our latest projects and success stories</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal(this)">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-3.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-4.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-3.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-2.jpg')}}" alt="Project 1">
                </a>
            </div>
        </div>
    </div>
</section>
<div id="modal" class="fixed inset-0 bg-black bg-opacity-75 hidden items-center justify-center z-50" onclick="closeModal()">
    <button class="absolute top-4 right-4 text-white text-4xl font-bold hover:text-gray-300" aria-label="Close modal">&times;</button>
    <img id="modalImage" class="max-h-[90vh] max-w-[90vw] object-contain" src="" alt="">
</div>

<script>
    function openModal(element) {
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modalImage');
        const img = element.querySelector('img');
        modalImg.src = img.src;
        modalImg.alt = img.alt;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });

    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('error', function() {
            this.src = 'https://images.unsplash.com/photo-1682687220063-4742bd7fd538';
            this.alt = 'Fallback image';
        });
    });
</script>
