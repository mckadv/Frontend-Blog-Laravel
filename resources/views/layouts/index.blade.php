@extends('layouts.app')
@section('content')
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
       <div class="container" data-aos="fade-up">
          <div class="row">  
		     @if (count($posts) > 0)				 
			    <div class="col-lg-4">
	                <div class="post-entry-1 lg mt-4">
		                <!-- <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
		                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div> -->
		                <h1 style="color:lightblue;"><b>About our blog!</b></h1>
		                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

		                <div class="d-flex align-items-center author">
			                <div class="name">
			                   <h3 class="m-0 p-0">Rafael Montero, 
							   <small class="text-muted">MSc</small></h3>
			                </div>
						</div>
	                </div>
			    </div>
				
			   	@php($i = 0)		   
			    @foreach ($posts as $post)
					@if ( $i < count($posts))
						<div class="col-lg-4 border-start custom-border">
							<div class="post-entry-1 lg mt-4">
			                    <!-- <a href="./blog/{{ $post->id }}"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a> -->
			                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
			                    <h2><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></h2>
								<p class="mb-4 d-block">{{ substr($post->body, 0, 100) }}</p>		
							</div>
						</div> <!-- /. col-lg-4 -->
					@endif
					@php($i++)
			    @endforeach					 										
			@endif 
          </div> <!-- End .row -->
       </div>
    </section> <!-- End Post Grid Section -->		
@endsection