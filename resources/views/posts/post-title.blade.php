<div class="post-title-div">
	@include('votes-section')
	<div class="post-section">
		<a href="{{ $post->postHref() }}" class="post-link">{{ $post->title }}</a>
		<p class="submission-info">Submitted {{ $post->timeSincePosted() }} <a href="#">{{ $post->user['name'] }}</a> to 
		<a href="{{ appRoot() }}r/{{ $post->subreddit['name'] }}" >{{ $post->subreddit['name'] }}</a></p>

		@yield('textpost-body')
		
		<a href="{{ $post->commentsHref() }}" class="link-to-comments">{{ $post->commentsLinkText() }}</a>
	</div>
</div>
