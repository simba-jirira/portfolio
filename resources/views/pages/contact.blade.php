<x-portfolio-layout :title=$title>
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr overlay-primary-dark" style="background-image: url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>Contact</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Get A Quote -->
        <!-- Get A Quote -->
        <livewire:quote.get-quote/>


    </div>
</x-portfolio-layout>
