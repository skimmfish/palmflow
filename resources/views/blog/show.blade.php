
@extends('layouts.simple_pages_header')
@section('content')

<div class="container centra">
<!--2 columns with one image box and the other title-->

<!--post body-->

<div class="body">

<div class="title_layer">
	<div class="author_img"><img src="{{ asset('img/'.$post->body_img) }}" class="img-rd"/><br/><small>{{$post->author}}</small></div>
		<div class="post_title">{{ $post->post_title }}
			<br/>
				<b class="time">Posted on {{ date('d, F Y h:i:s A',strtotime($post->created_at)) }} / <a href="{{route('blog.cat', ['cat'=>$post->category])}}">{{ ucfirst($post->category) }}</a></b>
					</div>

<!--closing the title_layer-->
</div>
<hr/>
<!--post_body-->
<p class="texts_p">
{{$post->intro}}
</p>
<div class="post_img_description">

	<img src="{{asset('img/'.$post->body_img)}}" class="img-responsive img-rounded"/>

</div>

<!--end of post body-->

<div class="post_body texts_p">
<p class="main-post">{{$post->post_body}}</p>
</div>

<div class="text_ads_card card"></div>

<!--end of post body-->
<!--all comments go here-->

@include('blog.comments')

<!--comment_box-->
@guest
     <div class="login_field" style="margin-top:15px;">Please <a href="{{ route('login') }}">login to </a> send in your comment</div>  
@else
<div class="comment_box">
 {!! Form::open(['route'=> 'comments.store', 'class'=>'form', 'method'=>'POST']) !!}

<div class="form-field">
 {!! Form::text('comment', "", [ 'class' => 'form-control', 'style'=>'height:90px;margin-top:15px;border-radius:15px;','placeholder' => Auth::user()->name. ', You can enter some comments here!']) !!}

 {!! Form::hidden('post_id', $post->id, [ 'class' => 'form-control input-lg responsive']) !!}
 {!! Form::hidden('commenter_name', Auth::user()->username, [ 'class' => 'form-control input-lg responsive']) !!}
 {!! Form::hidden('author_id', Auth::user()->id, [ 'class' => 'form-control input-lg responsive']) !!}
</div>

<div class="form-group">
 {!! Form::submit('Comment',['class' => 'btn btn-info btn-lg', 'style' => 'display:block;margin:10px auto 0 auto;width:auto;padding:15px 45px 15px 45px;background-color:red;border:0;border-radius:50px;font-size:13px;width:50%' ]) !!}
</div>

	 {!! Form::close() !!}

</div>
	 @endguest

<div class=""><h3>Related Stories</h3></div>
<div class="row related_stories">
@foreach($relatedStoryModel as $relStory)
<div class="rel_story_child">
<div class="col-md-3 rel_title"><b>{{ucfirst($relStory->category)}}</b><br/><a href="{{route('blog.show',['id'=>$relStory->id])}}"><h4>{{$relStory->post_title}}</h4></a></div>
<div class="col-md-3 rel_bg" style="background:url( {{ asset( 'img/'.$relStory->post_bg_img) }} ) center center;background-size:cover;background-repeat:no-repeat;width:160px;height:100px;"></div>
</div>
@endforeach
</div>

</div>





</div>

@endsection


