<section id="portfolio" class="portfolio-section py-16 px-4 mt-10">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 mt-10">Print Design Portfolio Showcase</h2>
            <p class="text-lg text-indigo-500 font-semibold">Discover our latest projects and success stories</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image1')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image2')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image3')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image4')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image5')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-3.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image6')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-4.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image7')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image8')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-2.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image9')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-3.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image10')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-1.jpg')}}" alt="Project 1">
                </a>
            </div>
            <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
                <a href="#" onclick="openModal('image11')">
                    <img class="w-full h-60 object-cover cursor-pointer transform transition-transform hover:scale-75" src="{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-2.jpg')}}" alt="Project 1">
                </a>
            </div>
        </div>
    </div>
</section>
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden items-center justify-center z-50" onclick="closeModal()">
    <div class="relative max-w-4xl mx-auto p-4">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 focus:outline-none" aria-label="Close modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="Full size image" class="max-h-[90vh] mx-auto rounded-lg shadow-2xl transform scale-95 transition-transform duration-300">
        <div class="absolute left-4 top-1/2 -translate-y-1/2">
            <button onclick="previousImage(event)" class="text-white hover:text-gray-300 focus:outline-none" aria-label="Previous image">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
        </div>
        <div class="absolute right-4 top-1/2 -translate-y-1/2">
            <button onclick="nextImage(event)" class="text-white hover:text-gray-300 focus:outline-none" aria-label="Next image">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    const images = [
        { id: 'image1', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-1.jpg')}}', alt: 'Project 1' },
        { id: 'image2', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/brochure-2.jpg')}}', alt: 'Project 1' },
        { id: 'image3', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-1.jpg')}}', alt: 'Project 1' },
        { id: 'image4', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-2.jpg')}}', alt: 'Project 1' },
        { id: 'image5', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-3.jpg')}}', alt: 'Project 1' },
        { id: 'image6', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/flyer-4.jpg')}}', alt: 'Project 1' },
        { id: 'image7', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-1.jpg')}}', alt: 'Project 1' },
        { id: 'image8', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-2.jpg')}}', alt: 'Project 1' },
        { id: 'image9', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-illustration-3.jpg')}}', alt: 'Project 1' },
        { id: 'image10', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-1.jpg')}}', alt: 'Project 1' },
        { id: 'image11', src: '{{Vite::asset('resources/images/portfolio/graphic design/print design/tshirt-typography-2.jpg')}}', alt: 'Project 1' }
    ];
    let currentImageIndex = 0;

    function openModal(imageId) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const image = images.find(img => img.id === imageId);
        currentImageIndex = images.findIndex(img => img.id === imageId);

        modalImage.src = image.src;
        modalImage.alt = image.alt;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modalImage.classList.remove('scale-95');
        modalImage.classList.add('scale-100');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.classList.remove('scale-100');
        modalImage.classList.add('scale-95');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    function nextImage(event) {
        event.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateModalImage();
    }

    function previousImage(event) {
        event.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateModalImage();
    }

    function updateModalImage() {
        const modalImage = document.getElementById('modalImage');
        modalImage.src = images[currentImageIndex].src;
        modalImage.alt = images[currentImageIndex].alt;
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
        if (e.key === 'ArrowRight') nextImage(e);
        if (e.key === 'ArrowLeft') previousImage(e);
    });
</script>
