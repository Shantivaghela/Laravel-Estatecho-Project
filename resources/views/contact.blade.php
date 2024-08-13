@extends('master')

@section('title'.'contact')

@section('condent')

<main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">

                            <h2 class="mb-0">Contact Page</h2>
                        </div>

                    </div>
                </div>
            </header>
            

            <section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12 pe-lg-5">
                            <div class="contact-info">
                                <h3 class="mb-4">We love to help you. Get in touch</h3>

                                <p class="d-flex border-bottom pb-3 mb-4">
                                    <strong class="d-inline me-4">Phone:</strong>
                                    <span>9737485653</span>
                                </p>

                                <p class="d-flex border-bottom pb-3 mb-4">
                                    <strong class="d-inline me-4">Email:</strong>
                                    <a href="#">Shanti@2001.com</a> 
                                </p>

                                <p class="d-flex">
                                    <strong class="d-inline me-4">Location:</strong>
                                    <span>Krishna hostel rajkot</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                            
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d411.1184778397702!2d70.74098865990011!3d22.288645956082306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbddf2c9c89f%3A0x5dcca5b14b5f2321!2z4KqV4KuN4Kqw4Kq_4Kq34KuN4Kqo4Kq-IOCqj-CqqOCrjeCqn-CqsOCqquCrjeCqsOCqvuCqh-CqnQ!5e0!3m2!1sen!2sin!4v1701177479690!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section section-padding pt-0">
                <div class="container">
                    <div class="row">
                    @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">You know, Contact Form</h4>
                            </div>

                            <form action="/contact" method="POST" class="custom-form contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="full-name" class="form-control" placeholder="Full Name" >
                                            
                                            <label for="floatingInput">Full Name</label>
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name')}}<p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" >
                                            <label for="floatingInput">Email address</label>
                                            @if ($errors->has('email'))
                                                <p class="text-danger">{{ $errors->first('email')}}<p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="reason" id="name" class="form-control" placeholder="Name">
                                            <label for="floatingInput">Reason</label>
                                            @if ($errors->has('reason'))
                                                <p class="text-danger">{{ $errors->first('reason')}}<p>
                                            @endif
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            <label for="floatingTextarea">Describe message here</label>
                                            @if ($errors->has('message'))
                                                <p class="text-danger">{{ $errors->first('message')}}<p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>
@endsection