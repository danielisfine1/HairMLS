<style>
.video-hero {
    width: 100%;
    height: 900px;
    overflow: hidden;
    position: relative;    
    z-index: 1;
}

.video-hero video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    z-index: -1; /* Place video behind the content */
}

.video-hero-content {
    position: absolute;
    top: 0;  /* Adjust these values as needed */
    left: 0; /* Adjust these values as needed */
    z-index: 2; /* Ensure content stays on top */
}

</style>

<div class="video-hero">
    <div class='video-hero-content'>
		
    [widget=Bootstrap Theme - Homepage Search - Extra Content Above]
    [widget=Bootstrap Theme - Homepage Search - Yellow Pages Search]
    [widget=Bootstrap Theme - Homepage Search - Extra Content Below]

	</div>	
    <video width="100%" height="100%" loop muted autoplay>
        <source src="https://pub-3f0807475f8c490dbff43e23e7f4ab29.r2.dev/8866d5e7-ca05-4dfc-b623-6d09bc571d97.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
