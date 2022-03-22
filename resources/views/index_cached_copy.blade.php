<div class="container">
<div class="heading_container hero hero_section">
<div class="title_head">
<h1 class="padded">My Story Board
<br/>
<small>Curation of stories to make your day</small>
</h1>
</div>
<!--
<div class="search_bar">
<form method="post" ><div class="main__sbx"><div class="search_box_holder"><input type="text" name="search_text" placeholder="Search for your favorite stories" class="form-control boxr" onChange="fetchByTitle()"/></div><div class="btn_box">
<button class="btn btn-circle" onClick="e.preventDefault(); fetchByTitle()" ><i class="fa fa-search"></i></button></div></div></form>
</div>
-->
</div>

<ul>
@foreach($posts as $post)

<div class="story_card col-md-3" style="background:linear-gradient(rgba(0,0,0,0.7),#000),url( {{asset('img/'.$post->post_bg_img) }} ) center center;
background-repeat: no-repeat;background-size:cover;filter: grayscale(100%);">
<div class="title"><a href="{{ route('blog.show', ['id' => $post->id]) }}" style="color:#fff;">{{ $post->post_title }}</a></div>
<div class="description">{{ $post->description }}</div>

<div class="meta_data">
<div><small></small><img src="{{asset('img/'.$post->post_bg_img)}}" class="img-responsive imgs" width="50" height="50" /> {{$post->author}}</div>
<div><small><i class="fa fa-clock"></i> {{$post->created_at}} <br/> <a href="{{ route('blog.cat',['cat'=>$post->category]) }}" style="color:#fff;text-decoration:capitalize">{{$post->category}}</a></small></div>
</div>

</div>	
	
	
@endforeach
</ul>
</div>
