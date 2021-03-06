@extends('main')

@section('main')
  @foreach($posts as $post)
    <article class="blog-post">
      <div class="blog-post-image">
        <a href="post.html"><img src="{{ $post['image_url'] }}" alt=""></a>
      </div>
      <div class="blog-post-body">
      <h2><a href="post.html">{{ $post['title'] }}</a></h2>
        <div class="post-meta">
          <span>by <a href="#">Jamie Mooze</a></span>/
          <span><i class="fa fa-clock-o"></i>March 14, 2015</span>/
          <span><i class="fa fa-comment-o"></i> <a href="#">{{ $post['comments'] }}</a></span>
        </div>
        <p>{{ $post['content'] }}</p>
        <div class="read-more"><a href="#">Continue Reading</a></div>
      </div>
    </article>
  @endforeach
@endsection

@section('sidebar')
  <aside>
    
    @component('widget')
      @slot('title', 'About Me')

      <a href="post.html"><img src="images/author.jpg" alt=""></a>
      <h4>Jamie Mooz</h4>
      <div class="author-title">Designer</div>
      <p>While everyone’s eyes are glued to the runway, it’s hard to ignore that there are major fashion moments on the front row too.</p>
    @endcomponent


    @component('widget')
      @slot('title', 'Featured Posts')

      <article class="widget-post">
        <div class="post-image">
          <a href="post.html"><img src="images/90x60-1.jpg" alt=""></a>
        </div>
        <div class="post-body">
          <h2><a href="post.html">The State of the Word 2014</a></h2>
          <div class="post-meta">
            <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
          </div>
        </div>
      </article>
      <article class="widget-post">
        <div class="post-image">
          <a href="post.html"><img src="images/90x60-2.jpg" alt=""></a>
        </div>
        <div class="post-body">
          <h2><a href="post.html">Why The Muppets Needs to Channel 30 Rock</a></h2>
          <div class="post-meta">
            <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
          </div>
        </div>
      </article>
      <article class="widget-post">
        <div class="post-image">
          <a href="post.html"><img src="images/90x60-3.jpg" alt=""></a>
        </div>
        <div class="post-body">
          <h2><a href="post.html">The State of the Word 2014</a></h2>
          <div class="post-meta">
            <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
          </div>
        </div>
      </article>
      <article class="widget-post">
        <div class="post-image">
          <a href="post.html"><img src="images/90x60-4.jpg" alt=""></a>
        </div>
        <div class="post-body">
          <h2><a href="post.html">Vintage-Inspired Finds for Your Home</a></h2>
          <div class="post-meta">
            <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
          </div>
        </div>
      </article>
      <article class="widget-post">
        <div class="post-image">
          <a href="post.html"><img src="images/90x60-5.jpg" alt=""></a>
        </div>
        <div class="post-body">
          <h2><a href="post.html">The State of the Word 2014</a></h2>
          <div class="post-meta">
            <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
          </div>
        </div>
      </article>
    @endcomponent

    <!-- sidebar-widget -->
    <div class="sidebar-widget">
      <h3 class="sidebar-title">Socials</h3>
      <div class="widget-container">
        <div class="widget-socials">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-reddit"></i></a>
        </div>
      </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
      <h3 class="sidebar-title">Categories</h3>
      <div class="widget-container">
        <ul>
          <li><a href="#">Fashion</a></li>
          <li><a href="#">Art</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Featured</a></li>
          <li><a href="#">Graphics</a></li>
          <li><a href="#">Peoples</a></li>
          <li><a href="#">Uncategorized</a></li>
        </ul>
      </div>
    </div>
    </div>
  </aside>
@endsection
