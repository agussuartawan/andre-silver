<div id="contact" class="py-5 my-6 mb-0 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 text-light">{{ __('Workshop Address') }}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>andresilverclass@gmail.com</p>
                <div class="pt-2 d-flex">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 text-light">Quick Links</h4>
                <a class="btn btn-link" href="/about">About Us</a>
                <a class="btn btn-link" href="/services">Our Services</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 text-light">Photo Gallery</h4>
                <div class="row g-2" id="galery">
                </div>
                <div class="spinner-border" role="status" id="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <a href="https://drive.google.com/drive/u/1/folders/17hNWes5ZK8ybTN-W1NKT1WqsYaWpAs5V"
                    target="_blank">View more</a>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        $(document).ready(function() {
            // Function to fetch data from API
            function fetchData() {
                $.ajax({
                    url: 'https://script.google.com/macros/s/AKfycbz8-0nYkhrsEO1-6PfECP4lDYFJUbyTZiB0vBuM8Rpe6POGIPSIuhSoG-LxAFn3Dq0l/exec',
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Loop through the data and append to the container
                        $.each(data, function(index, image) {
                            $('#galery').append(
                                `<div class="col-4">
                                    <a href="https://drive.google.com/file/d/${image.fileId}/view?usp=drive_link" target="_blank">
                                        <img class="p-1 rounded img-fluid bg-light" src="https://lh3.googleusercontent.com/d/${image.fileId}" alt="${image.fileName}">
                                    <a/>
                                </div>`
                            );
                        });
                    },
                    error: function(error) {
                        console.error('Error fetching data:', error);
                    },
                    complete: function() {
                        $('#loading').remove();
                    }
                });
            }

            // Call fetchData function to fetch and display data
            fetchData();
        });
    </script>
@endpush
