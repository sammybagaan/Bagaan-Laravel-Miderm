<a href="https://yourwebsite.com/about">
    <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
</a>
<button onclick="alert('Hello there!')" class="btn btn-primary">
    Click Me
</button>
<div class="container">
    <h1 id="my-clickable-title" class="display-4 mb-3">{{ $portfolio['name'] }}</h1>
    </div>
    // Get the element by its ID
const clickableTitle = document.getElementById('my-clickable-title');

// Add a 'click' event listener
clickableTitle.addEventListener('click', function() {
    alert('You clicked the title!');
});