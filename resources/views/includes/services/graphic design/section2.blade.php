<section class="container mx-auto lg:px-52">
    <!-- Service Row 1 -->
    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/59361.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Photoshop Editing
        </x-slot>
        <x-slot name="description">
            Are your images failing to capture attention? Poorly edited photos can make your brand look unprofessional and uninspiring.
            Imagine losing customers because your visuals lack polish or fail to convey your message. In today’s visually driven world, subpar imagery can hurt your credibility and sales.
            Opticore offers expert Photoshop editing services that transform ordinary images into stunning visuals. From retouching to creative enhancements, we ensure your photos stand out and resonate with your audience.
        </x-slot>
    </x-services.sectionLToR>

    <x-services.sectionRToL>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4280794.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Logo & Identity Design
        </x-slot>
        <x-slot name="description">
            Struggling to create a logo that represents your brand? A weak or generic logo can make your business forgettable.
            Without a strong brand identity, you risk blending into the background while competitors steal the spotlight. Your logo is often the first impression—don’t let it be the last.
            At Opticore, we design logos that capture your brand’s essence and leave a lasting impression. Let us craft an identity that sets you apart and builds trust with your audience.
        </x-slot>
    </x-services.sectionRToL>
    <!-- Service Row 2 -->


    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4422913.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Social Media Graphics
        </x-slot>
        <x-slot name="description">
            Are your social media posts failing to generate engagement? Bland visuals can get lost in crowded feeds.
            Low likes, shares, and comments mean missed opportunities for growth. Without eye-catching graphics, you’re invisible in the digital space.
            Our team designs compelling social media graphics that grab attention and drive interaction. From Instagram posts to Facebook ads, we help you dominate social platforms.
        </x-slot>
    </x-services.sectionLToR>


    <x-services.sectionRToL>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4280794.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Packaging Design
        </x-slot>
        <x-slot name="description">
            Is your product packaging failing to attract buyers? Generic designs can make even great products go unnoticed on shelves.
            Poor packaging design can lead to lower sales and a weaker brand presence. In competitive markets, first impressions are everything.
            We create innovative packaging designs that not only protect your product but also captivate consumers. Let us help you turn shoppers into loyal customers.
        </x-slot>
    </x-services.sectionRToL>


    <!-- Service Row 3 -->
    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4422913.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Illustration & Infographics
        </x-slot>
        <x-slot name="description">
            Are you struggling to explain complex ideas visually? Text-heavy content can overwhelm and disengage audiences.
            Without clear and appealing visuals, your message might get lost or ignored. This could hurt customer understanding and decision-making.
            Opticore specializes in custom illustrations and infographics that simplify information while keeping it visually engaging. Communicate effectively with stunning designs tailored to your needs.
        </x-slot>
    </x-services.sectionLToR>

    <!-- Service Row 2 -->
    <x-services.sectionRToL>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4280794.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Product & Merchandise Design
        </x-slot>
        <x-slot name="description">
            Are you struggling to create merchandise that resonates with customers? Generic designs fail to build brand loyalty or drive sales.
            Without unique and appealing merchandise, you miss out on opportunities for additional revenue streams and stronger customer connections.
            Opticore crafts bespoke product designs that align with your brand’s identity. From apparel to promotional items, we help you turn everyday products into powerful marketing tools.
        </x-slot>
    </x-services.sectionRToL>
    <!-- Service Row 3 -->
    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4422913.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Print Design
        </x-slot>
        <x-slot name="description">
            Are your print materials failing to make an impact? Poor design can result in wasted resources and missed opportunities.
            Imagine handing out brochures or business cards that end up in the trash because they fail to impress. Your print materials should reflect the quality of your brand.
            Opticore delivers professional print designs that leave a mark. Whether it’s brochures, flyers, or business cards, we ensure every piece communicates excellence.
        </x-slot>
    </x-services.sectionLToR>
    <div class="flex flex-col sm:flex-row justify-center items-center my-8">
        <img src="{{Vite::asset('resources/images/4422913.jpg')}}" alt="Service 3" class="hidden sm:block w-full md:w-1/3 object-cover mb-4 md:mb-0 animate-fade-in-from-left" style="width: 250px; height: 250px;">
        <div class="md:ml-4 p-4 animate-fade-in-from-right">
            <h2 class="text-2xl font-bold mb-2 ">Print Design</h2>
            <p class="text-lg text-justify">Are your print materials failing to make an impact? Poor design can result in wasted resources and missed opportunities.
                Imagine handing out brochures or business cards that end up in the trash because they fail to impress. Your print materials should reflect the quality of your brand.
                Opticore delivers professional print designs that leave a mark. Whether it’s brochures, flyers, or business cards, we ensure every piece communicates excellence.</p>
        </div>
    </div>
</section>
